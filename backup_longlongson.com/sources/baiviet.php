<?php  if(!defined('_source')) die("Error");

	#tin tuc chi tiet
	$d->reset();
	$sql="select id,noidung_$lang as noidung,title_$lang as title,keywords_$lang as keywords,description_$lang as description from #_baiviet where type='$type'";
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
		$title_bar=$title_tcat." - ";	
	}
	$keywords_c=$tintuc_detail['keywords'];
	$description_c=$tintuc_detail['description'];
	
?>