<?php  if(!defined('_source')) die("Error");

	$id =  addslashes($_GET['id']);
	if (get_magic_quotes_gpc()==false) {
		$id = mysql_real_escape_string($id);
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
		
		## Update luot xem
		$d->reset();
		$sql_lanxem = "UPDATE #_product SET luotxem=luotxem+1  WHERE id='".$product_detail['id']."'";
		$d->query($sql_lanxem);
	}
	else
	{
		#Lấy danh sach tin
		$d->reset();
		$sql="select id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,thumb,gia,link from #_product where hienthi =1 and type='$type' order by stt,id desc";
		$d->query($sql);
		$product=$d->result_array();
		
		$title_bar=$title_tcat.' - ';

		## Mau hop
		$d->reset();
		$sql="select id,ten_$lang as ten,thumb,mota_$lang as mota from #_product where hienthi =1 and type='mauhop' order by stt,id desc";
		$d->query($sql);
		$mauhop=$d->result_array();

		## Mau hop
		$d->reset();
		$sql="select id,ten_$lang as ten,thumb,mota_$lang as mota from #_product where hienthi =1 and type='mauky' order by stt,id desc";
		$d->query($sql);
		$mauky=$d->result_array();
	}
?>