<?php	
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
    @define ( '_lib' , './libraries/');
	 //Lưu ngôn ngữ chọn vào $_SESSION
    if(!isset($_SESSION['lang']))
    {
        $_SESSION['lang']='vi';
    }
    $lang=$_SESSION['lang'];

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	header("Content-Type: application/xml; charset=utf-8"); 
	echo '<?xml version="1.0" encoding="UTF-8"?>'; 
	echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'; 
	 
	function urlElement($url, $pri,$mod) {
	echo '<url>'; 
	echo '<loc>'.$url.'</loc>'; 
	echo '<changefreq>weekly</changefreq>';
	echo '<lastmod>'.$mod.'</lastmod>';
	echo '<priority>'.$pri.'</priority>';
	echo '</url>';
	}

	urlElement('http://'.$config_url,'1.0',date(c));
	
	$arrcom = array("gioi-thieu","san-pham","tin-tuc","huong-dan-dang-tin","chinh-sach","hoi-dap","lien-he");
	$arrcom_article = array("san-pham","tin-tuc","hoi-dap","chinh-sach");
	$arrcom_article_list = array("san-pham");
	
	foreach ($arrcom as $k => $v) {
		urlElement('http://'.$config_url.'/'.$v.'','1.0',date(c));
	}
	
	for($m = 0, $count_tintuc = count($arrcom_article_list); $m < $count_tintuc; $m++){
		$d->reset();
		$sql = "select id,ten_$lang as ten,tenkhongdau,ngaytao from #_baiviet_list where type='".$arrcom_article_list[$m]."'";		
		$d->query($sql);
		$product_list = $d->result_array();
		for($x = 0 ; $x < count($product_list); $x++){
			urlElement('http://'.$config_url.'/'.$product_list[$x]['tenkhongdau'].'','0.8',date(c,$product_list[$x]['ngaytao']));
		}

		$d->reset();
		$sql = "select id,ten_$lang as ten,tenkhongdau,ngaytao from #_baiviet_cat where type='".$arrcom_article_list[$m]."'";		
		$d->query($sql);
		$product_list = $d->result_array();
		for($x = 0 ; $x < count($product_list); $x++){
			urlElement('http://'.$config_url.'/'.$product_list[$x]['tenkhongdau'].'','0.8',date(c,$product_list[$x]['ngaytao']));
		}


		$d->reset();
		$sql = "select id,ten_$lang as ten,tenkhongdau,ngaytao from #_baiviet_item where type='".$arrcom_article_list[$m]."'";		
		$d->query($sql);
		$product_list = $d->result_array();
		for($x = 0 ; $x < count($product_list); $x++){
			urlElement('http://'.$config_url.'/'.$product_list[$x]['tenkhongdau'].'','0.8',date(c,$product_list[$x]['ngaytao']));
		}
	}
	

	for($m = 0; $m < count($arrcom_article); $m++){
		$d->reset();
		$sql = "select id,ten_$lang as ten,tenkhongdau,ngaytao from #_baiviet where type='".$arrcom_article[$m]."'";		
		$d->query($sql);
		$product = $d->result_array();
		for($h = 0 ; $h < count($product); $h++){

			urlElement('http://'.$config_url.'/'.$arrcom_article[$m].'/'.$product[$h]['tenkhongdau'].'','0.8',date(c,$product[$h]['ngaytao']));

		}
	}

	
	echo '</urlset>'; 

?>
