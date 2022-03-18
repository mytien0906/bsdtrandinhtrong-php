<?php  if(!defined('_source')) die("Error");

	$id =  addslashes($_GET['id']);
	$idl =  addslashes($_GET['idl']);
	$level =  (int)$_GET['level'];
	if($config['type'][$type]['level']<$level || $level<0)
	{
		redirect("http://".$config_url."/404");	
	}
	if (get_magic_quotes_gpc()==false) {
		$id = mysql_real_escape_string($id);
		$idl = mysql_real_escape_string($idl);
	}

	if(isset($_POST['duan'])){

		$data['ten'] = $_POST['ten'];
		$data['email'] = $_POST['email'];
		$data['dienthoai'] = $_POST['dienthoai'];
		$data['tieude'] = $_POST['tieude'];
		$data['noidung'] = $_POST['noidung'];
		$ngaydangky = time();
		
		$sql = "INSERT INTO  table_nhantin (ten,email,dienthoai,tieude,noidung,type,ngaytao,hienthi ) 
				  VALUES ('".$data['ten']."','".$data['email']."','".$data['dienthoai']."','".$data['tieude']."','".$data['noidung']."','duan','$ngaydangky',0)";
		if(mysql_query($sql))
		{	
				transfer("Gửi nhận bảng giá thành công!<br/>", "http://".$config_url."/");	
			
		}
		else
		{
				transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "http://".$config_url."/");
		}
	}
	
	if($id!='')
	{
		#tin tuc chi tiet
		$d->reset();
		$sql="select id,ten_$lang as ten,ngaytao,luotxem,noidung_$lang as noidung,title_$lang as title,keywords_$lang as keywords,description_$lang as description from #_tintuc where hienthi=1 and tenkhongdau_$lang='$id' and type='$type'";
		$d->query($sql);
		$tintuc_detail=$d->fetch_array();	
		
		if($tintuc_detail['id']=='')
		{
			redirect("http://".$config_url."/404");	
		}
		
		if($tintuc_detail['title']!="")
		{
			$tit_c=$tintuc_detail['title'];
		}
		else
		{
			$title_bar=$tintuc_detail['ten']." - ";	
		}
		$title_tcat=$tintuc_detail['ten'];
		$keywords_c=$tintuc_detail['keywords'];
		$description_c=$tintuc_detail['description'];
		
		#Lấy tin cung loai
		$d->reset();
		$sql="select tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,ngaytao from #_tintuc where hienthi =1 and id<>".$tintuc_detail['id']." and type='$type' order by stt,id desc limit 0,8";
		$d->query($sql);
		$tintuc=$d->result_array();
		
		## Update luot xem
		$d->reset();
		$sql_lanxem = "UPDATE #_tintuc SET luotxem=luotxem+1  WHERE id='".$tintuc_detail['id']."'";
		$d->query($sql_lanxem);
		
	}
	elseif($idl!='')
	{
		#tin tuc chi tiet
		$d->reset();
		$sql="select id,ten_$lang as ten,title_$lang as title,keywords_$lang as keywords,description_$lang as description from #_tintuc_list where hienthi=1 and tenkhongdau_$lang='$idl' and level='$level' and type='$type'";
		$d->query($sql);
		$tintuc_detail=$d->fetch_array();	
		
		if($tintuc_detail['id']=='')
		{
			redirect("http://".$config_url."/404");	
		}
		
		if($tintuc_detail['title']!="")
		{
			$tit_c=$tintuc_detail['title'];
		}
		else
		{
			$title_bar=$tintuc_detail['ten']." - ";	
		}
		$title_tcat=$tintuc_detail['ten'];
		$keywords_c=$tintuc_detail['keywords'];
		$description_c=$tintuc_detail['description'];
		
		#Lấy danh sach tin
		$d->reset();
		$sql="select tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,thumb,photo,mota_$lang as mota,ngaytao from #_tintuc where hienthi =1 and id_lv".$level."='".$tintuc_detail['id']."' and type='$type' order by stt,id desc";
		$d->query($sql);
		$tintuc=$d->result_array();
		
		#Phân trang
		$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
		$url=getCurrentPageURL();
		$maxR=15;
		$maxP=7;
		$paging=paging_home($tintuc, $url, $curPage, $maxR, $maxP);
		$tintuc=$paging['source'];
		
	}
	else
	{
		#Lấy danh sach tin
		$d->reset();
		$sql="select tenkhongdau_$lang tenkhongdau,ten_$lang as ten,thumb,photo,mota_$lang as mota,ngaytao from #_tintuc where hienthi =1 and type='$type' order by stt,id desc";
		$d->query($sql);
		$tintuc=$d->result_array();
		
		#Phân trang
		$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
		$url=getCurrentPageURL();
		$maxR=15;
		$maxP=7;
		$paging=paging_home($tintuc, $url, $curPage, $maxR, $maxP);
		$tintuc=$paging['source'];
		
		$title_bar=$title_tcat.' - ';
	}
?>