<?php
	// Logo
	$logo_top = get_fetch_array("select photo_$lang as photo from #_photo where com='logo'");
	$banner_top = get_fetch_array("select photo_$lang as photo from #_photo where com='banner_top'");
	$bg_visao = get_fetch_array("select photo_$lang as photo from #_photo where com='bg_visao'");
	$bg_mail = get_fetch_array("select photo_$lang as photo from #_photo where com='bg_mail'");
	$bg_footer = get_fetch_array("select photo_$lang as photo from #_photo where com='bg_footer'");

	// Banner
	$banner_top = get_fetch_array("select photo_$lang as photo from #_photo where com='banner_top'");
	$bocongthuong = get_fetch_array("select photo_$lang as photo,link from #_photo where com='bocongthuong'");
	$quangcao_left = get_fetch_array("select photo_$lang as photo,link from #_photo where com='quangcao_left'");
	$quangcao_right = get_fetch_array("select photo_$lang as photo,link from #_photo where com='quangcao_right'");


	// Hotline
	$image_top = get_fetch_array("select photo_$lang from #_photo where com='image_top'");
	$tinh_binhdinh = get_result_array("select *  from table_place_city order by id asc");
	$quan_binhdinh = get_result_array("select *  from table_place_dist where id_city=14 order by stt asc, id desc");
	$phuong_quynhon = get_result_array("select *  from table_place_ward where id_city=14 and id_dist=168 order by id");
	$duong_quynhon = get_result_array("select *  from table_place_street where id_city=14 and id_dist=168 order by id");
	// Giới thiệu
	$gioithieu_menu = get_result_array("select tenkhongdau,id,ten_$lang as ten,type from #_baiviet where hienthi=1 and type='gioi-thieu' order by stt asc,id desc");
	$sanpham_menu = get_result_array("select tenkhongdau,id,ten_$lang as ten,type,checkgia from #_baiviet_list where hienthi=1 and type='san-pham' order by stt asc,id desc");
	$count_tin = get_fetch_array("select count(id) as dem from #_baiviet where hienthi=1 and type='san-pham' order by stt asc,id desc");
	$phukien_menu = get_result_array("select tenkhongdau,id,ten_$lang as ten,type from #_baiviet_list where hienthi=1 and type='phu-kien' order by stt asc,id desc");
	$dichvu_menu = get_result_array("select tenkhongdau,id,ten_$lang as ten,type from #_baiviet where hienthi=1 and type='dich-vu' order by stt asc,id desc");
	$chinhsach_menu = get_result_array("select tenkhongdau,id,ten_$lang as ten,type from #_baiviet where hienthi=1 and type='chinh-sach' order by stt asc,id desc");

	// Footer
	$footer = get_fetch_array("select noidung_$lang as noidung from #_company where type='footer'");
	$gioithieu_index = get_fetch_array("select mota_$lang as mota,ten_$lang as ten from #_info where type='gioi-thieu'");
	// Danh mục sản phẩm
	$danhmuc_sanpham = get_result_array("select id,ten_$lang,tenkhongdau,photo from #_product_list where hienthi=1 and type='san-pham' order by stt asc,id desc");
	if($source=='index'){
		$sanpham_nb_list = get_result_array("select id,ten_$lang as ten, mota_$lang as mota,tenkhongdau,photo,thumb,type from #_baiviet_list where noibat!=0 and hienthi=1 and type='san-pham' order by stt asc,id desc");
		$doitac = get_result_array("select * from #_photo where hienthi=1 and com='doitac' order by stt asc,id desc");
	}

	$quangcao = get_result_array("select photo_vi as photo,link,ten_$lang as ten from #_photo where com='quangcao' order by stt asc,id desc");

	$kygui_noibat = get_result_array("select id,ten_$lang,tenkhongdau,photo,thumb,mota_$lang,ngaytao,type from #_baiviet where hienthi=1 and type='ky-gui' and noibat=1 order by stt asc,id desc");
	$tintuc_noibat = get_result_array("select id,ten_$lang,tenkhongdau,photo,thumb,mota_$lang,ngaytao,type from #_baiviet where hienthi=1 and type='tin-tuc' and noibat=1 order by stt asc,id desc");
	$tintuc_view = get_result_array("select id,ten_$lang,tenkhongdau,photo,thumb,mota_$lang,ngaytao,type from #_baiviet where hienthi=1 and type='tin-tuc' order by luotxem desc limit 0,10");

	$mangxahoi = get_result_array("select photo_vi,link,ten_$lang from #_photo where com='mangxahoi' order by stt asc,id desc");
	$quangcaoleft = get_result_array("select photo_vi as photo,link,ten_$lang as ten from #_photo where com='quangcaoleft' and hienthi=1 order by stt asc,id desc");

	$hotrokhachhang = get_result_array("select id,ten_$lang,tenkhongdau from #_baiviet where noibat!=0 and hienthi=1 and type='ho-tro-khach-hang' order by stt asc,id desc");
	$vechungtoi = get_result_array("select id,ten_$lang,tenkhongdau from #_baiviet where noibat!=0 and hienthi=1 and type='ve-chung-toi' order by stt asc,id desc");
	$yahoo = get_result_array("select * from #_yahoo where  hienthi=1  order by stt asc,id desc");

	// Slider
	$slider = get_result_array("select photo_vi, mota_$lang, link,ten_$lang,photo_logo from #_photo where hienthi=1 and com='slider' order by stt asc,id desc");
	$mangxahoi_sp = get_result_array("select photo_vi,link,ten_$lang from #_photo where hienthi=1 and com='mxh-support' order by stt asc,id desc");
	$video_na = get_result_array("select * from #_video where hienthi=1 and type='video' order by stt asc,id desc limit 0,4");


	if($share_facebook==''){
		$seo_top = get_fetch_array("select photo_$lang from #_photo where com='hinhdaidien'");

		$share_facebook = '<meta property="og:url" content="'.getCurrentPageURL().'" />
<meta property="og:type" content="website" />
<meta property="og:title" content="'.$row_setting['title'].'" />
<meta property="og:description" content="'.strip_tags($row_setting['description']).'" />
<meta property="og:locale" content="vi" />
<meta property="og:image" content="http://'.$config_url.'/'._upload_hinhanh_l.$seo_top['photo_'.$lang].'" />
<meta itemprop="name" content="'.$row_setting['title'].'">
<meta itemprop="description" content="'.strip_tags($row_setting['description']).'">
<meta itemprop="image" content="http://'.$config_url.'/'._upload_hinhanh_l.$seo_top['photo_'.$lang].'">
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="'.$row_setting['ten_'.$lang].'">
<meta name="twitter:title" content="'.$row_setting['title'].'">
<meta name="twitter:description" content="'.strip_tags($row_setting['description']).'">
<meta name="twitter:creator" content="'.$row_setting['title'].'">
<meta name="twitter:image" content="http://'.$config_url.'/'._upload_hinhanh_l.$seo_top['photo_'.$lang].'">
<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "Article",
	"name": "'.$row_setting['ten_'.$lang].'",
	"author": "'.$row_setting['ten_'.$lang].'",
	"image": "http://'.$config_url.'/'._upload_hinhanh_l.$seo_top['photo_'.$lang].'",
	"description": "'.strip_tags($row_setting['description']).'",
	"aggregateRating": {
		"@type": "Article",
		"ratingValue": "4.5",
		"reviewCount": "'.$all_visitors.'",
		"bestRating": "5",
		"worstRating": "1"
	}
}
</script>
';
	}
?>
