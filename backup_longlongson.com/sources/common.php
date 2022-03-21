<?php
	## background
	// $d->reset();
	// $sql="select bg,rp,x,y,hienthi,hienthi1,color,fix from #_bg limit 0,1";
	// $d->query($sql);
	// $bg=$d->fetch_array();
	
	## Banner
	$d->reset();
	$sql="select logo_$lang as logo,photo_$lang as photo,flash_$lang as flash,rp,x,y,fix,hienthi,hienthi1,color,bg from #_banner limit 0,1";
	$d->query($sql);
	$banner=$d->fetch_array();

	$d->reset();
	$sql="select thumb,link,photo from #_photo where hienthi=1 and type='popup' order by stt,id desc limit 0,1";
	$d->query($sql);
	$popup=$d->fetch_array();

	## Menu
	$d->reset();
	$sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,noibat from #_product_list where hienthi=1 and type='product' and level=0 order by stt,id desc";
	$d->query($sql);
	$mproduct=$d->result_array();

	$d->reset();
	$sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,noibat from #_tintuc_list where hienthi=1 and type='sanpham' and level=0 order by stt,id desc";
	$d->query($sql);
	$msanpham=$d->result_array();

	$d->reset();
	$sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,noibat from #_tintuc_list where hienthi=1 and type='tintuc' and level=0 order by stt,id desc";
	$d->query($sql);
	$mtintuc=$d->result_array();

	$d->reset();
	$sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,noibat from #_tintuc where hienthi=1 and type='tuyendung' and noibat > 0 order by stt,id desc";
	$d->query($sql);
	$mtuyendung=$d->result_array();

	$d->reset();
	$sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,noibat from #_tintuc_list where hienthi=1 and type='dichvu' and level=0 order by stt,id desc";
	$d->query($sql);
	$mdichvu=$d->result_array();

	$d->reset();
	$sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,thumb,photo,ngaytao from #_tintuc where hienthi=1 and type='tintuc' and noibat>0 order by stt,id desc";
	$d->query($sql);
	$newsnb=$d->result_array();

	$d->reset();
	$sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,thumb,photo,ngaytao from #_tintuc where hienthi=1 and type='gioithieu' order by stt,id desc limit 0,1";
	$d->query($sql);
	$iabout=$d->fetch_array();

	$d->reset();
    $sql="select id,ten_$lang as ten,mota_$lang as mota,tenkhongdau_$lang as tenkhongdau,photo from #_tintuc where hienthi=1 and type='sanpham' and moi>0 order by stt,id desc limit 0,8";
    $d->query($sql);
    $sanphammoi=$d->result_array();

	## Footer
	$d->reset();
	$sql="select noidung_$lang as noidung from #_page where type='footer'";
	$d->query($sql);
	=$d->fetch_array();

	## Yahoo
	$d->reset();
	$sql="select ten,yahoo,skype,dienthoai,email from #_yahoo where hienthi=1 order by stt,id desc";
	$d->query($sql);
	$yh=$d->result_array();

	$d->reset();
	$sql="select photo,link,thumb from #_photo where hienthi=1 and type='mxh' order by stt,id desc";
	$d->query($sql);
	$mxh=$d->result_array();

	$d->reset();
	$sql="select photo,link,thumb,ten_$lang as ten from #_photo where hienthi=1 and type='mxh1' order by stt,id desc";
	$d->query($sql);
	$mxh1=$d->result_array();	

?>