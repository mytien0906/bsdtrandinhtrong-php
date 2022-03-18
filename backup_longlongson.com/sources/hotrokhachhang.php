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
		redirect("http://".$config_url."/404");	
	}
	else
	{
		redirect("http://".$config_url."/404");	
	}
?>