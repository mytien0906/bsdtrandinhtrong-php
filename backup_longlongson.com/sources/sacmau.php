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
	
	if($id!='')
	{
		#tin tuc chi tiet
		$d->reset();
		$sql="select id,ten_$lang as ten,luotxem,noidung_$lang as noidung,title_$lang as title,keywords_$lang as keywords,description_$lang as description,gia,thumb,photo from #_product where hienthi=1 and tenkhongdau_$lang='$id' and type='$type'";
		$d->query($sql);
		$product_detail=$d->fetch_array();	
		
		if($product_detail['id']=='')
		{
			redirect("http://".$config_url."/404");	
		}
		
		if($product_detail['title']!="")
		{
			$tit_c=$product_detail['title'];
		}
		else
		{
			$title_bar=$product_detail['ten']." - ";	
		}
		$title_tcat=$product_detail['ten'];
		$keywords_c=$product_detail['keywords'];
		$description_c=$product_detail['description'];

		if($config['type'][$type]['multi_photo'])
		{
			# Lay danh sach hinh anh
			$d->reset();
			$sql="select thumb,photo from #_product_hinhanh where hienthi =1 and id_pro='".$product_detail['id']." order by stt,id desc";
			$d->query($sql);
			$list_photo=$d->result_array();	
		}
		
		# Lay tab san pham
		$d->reset();
		$sql="select id,ten_$lang as ten,noidung_$lang as noidung,thumb,photo1 from #_product_tab where hienthi=1 and id_pro='".$product_detail['id']."' order by stt,id desc";
		$d->query($sql);
		$product_tab=$d->result_array();	

		#Lấy tin cung loai
		$d->reset();
		$sql="select id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,thumb,gia,link from #_product where hienthi =1 and id<>".$product_detail['id']." and type='$type' order by stt,id desc limit 0,8";
		$d->query($sql);
		$product=$d->result_array();
		
		## Update luot xem
		$d->reset();
		$sql_lanxem = "UPDATE #_product SET luotxem=luotxem+1  WHERE id='".$product_detail['id']."'";
		$d->query($sql_lanxem);
		
	}
	elseif($idl!='')
	{
		#tin tuc chi tiet
		$d->reset();
		$sql="select id,ten_$lang as ten,title_$lang as title,keywords_$lang as keywords,description_$lang as description from #_product_list where hienthi=1 and tenkhongdau_$lang='$idl' and level='$level' and type='$type'";
		$d->query($sql);
		$product_detail=$d->fetch_array();	
		
		if($product_detail['id']=='')
		{
			redirect("http://".$config_url."/404");	
		}
		
		if($product_detail['title']!="")
		{
			$tit_c=$product_detail['title'];
		}
		else
		{
			$title_bar=$product_detail['ten']." - ";	
		}
		$title_tcat=$product_detail['ten'];
		$keywords_c=$product_detail['keywords'];
		$description_c=$product_detail['description'];
		
		#Lấy danh sach tin
		$d->reset();
		$sql="select id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,thumb,gia,link from #_product where hienthi =1 and id_lv".$level."='".$product_detail['id']."' and type='$type' order by stt,id desc";
		$d->query($sql);
		$product=$d->result_array();
		
		#Phân trang
		$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
		$url=getCurrentPageURL();
		$maxR=8;
		$maxP=7;
		$paging=paging_home($product, $url, $curPage, $maxR, $maxP);
		$product=$paging['source'];
		
	}
	else
	{
		#Lấy danh sach tin
		$d->reset();
		$sql="select id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,thumb from #_product_list where hienthi =1 and type='$type' and level=0 order by stt,id desc";
		$d->query($sql);
		$product=$d->result_array();
		
		$title_bar=$title_tcat.' - ';
	}
?>