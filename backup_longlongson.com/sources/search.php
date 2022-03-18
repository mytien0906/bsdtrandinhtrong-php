<?php  if(!defined('_source')) die("Error");
	
	$tukhoa = trim(strip_tags($_GET['keyword']));
	$idl = (int)$_GET['idl'];
	
	if (get_magic_quotes_gpc()==false) {
		$tukhoa = mysql_real_escape_string($tukhoa);
	}
	if($idl>0)
	{
		$ssql=" and id_lv0='$idl'";
	}
	$title_tcat=_ketquatimkiem;
	
	$d->reset();
	$sql="select id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,mota_$lang as mota,thumb,photo from #_tintuc where hienthi =1 and type='sanpham' $ssql and (ten_$lang LIKE '%$tukhoa%') order by stt,id desc";
	$d->query($sql);
	$tintuc=$d->result_array();
	
	$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
	$url=getCurrentPageURL1();
	$maxR=8;
	$maxP=7;
	$paging=paging_home1($tintuc, $url, $curPage, $maxR, $maxP);
	$tintuc=$paging['source'];
	
?>