<?php  if(!defined('_source')) die("Error");

	#Lấy danh sach tin
	$d->reset();
	$sql="select id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,thumb,gia,link,giakm from #_product where hienthi =1 and type='$type' and $noibat>0 order by stt,id desc";
	$d->query($sql);
	$product=$d->result_array();

	#Phân trang
	$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
	$url=getCurrentPageURL();
	$maxR=12;
	$maxP=7;
	$paging=paging_home($product, $url, $curPage, $maxR, $maxP);
	$product=$paging['source'];
	
	$title_bar=$title_tcat.' - ';
?>