<?php  if(!defined('_source')) die("Error");

	#Lấy danh sach tin
	$d->reset();
	$sql="select thumb,link from #_photo where hienthi =1 and type='$type' order by stt,id desc";
	$d->query($sql);
	$tintuc=$d->result_array();
	
	#Phân trang
	$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
	$url=getCurrentPageURL();
	$maxR=30;
	$maxP=7;
	$paging=paging_home($tintuc, $url, $curPage, $maxR, $maxP);
	$tintuc=$paging['source'];
	
	$title_bar=$title_tcat.' - ';
?>