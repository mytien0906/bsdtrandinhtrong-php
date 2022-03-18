<?php  if(!defined('_source')) die("Error");

	#Lấy danh sach tin
	$d->reset();
	$sql="select id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,thumb,gia,link from #_product where hienthi =1 and type='$type' order by stt,id desc";
	$d->query($sql);
	$product=$d->result_array();
	
	$title_bar=$title_tcat.' - ';
?>