<?php

	if(!defined('_lib')) die("Error");
	function nettuts_error_handler($number, $message, $file, $line, $vars)
	{
		if ( ($number !== E_NOTICE) && ($number < 2048) ) {
			include 'templates/error_tpl.php';
			die();
		}
	}

	date_default_timezone_set('Asia/Ho_Chi_Minh');
	error_reporting(E_ALL & ~E_NOTICE & ~8192);

	$config_url=$_SERVER["SERVER_NAME"].'';
	$config['debug']=1;
	$config['lang'] = array(
		"vi" => "Tiếng Việt"
	);

	$config_email="no-reply@choquynhon.vn";
	$config_pass="ymq0I-Nn=yr~";
	$config_ip="127.0.0.1";

	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'root';
	$config['database']['password'] = '';
	$config['database']['database'] = 'bdimulasd_bds1';
	$config['database']['refix'] = 'table_';
	$config['salt']='1!@#6hg%&89';

	$config['facebook-id'] = '';
	$config['link-web'] = 'bds.vinavietnam.net';
	
	// product or article
	$config['schema'] = 'product';
	$config['date_create'] = time();

	$config['dangtin']['type'] = array(
		"0"=>"Không xác định",
		"1"=>"Cần bán",
		"2"=>"Cần mua",
		"3"=>"Cần thuê",
		"4"=>"Cho thuê",
		"5"=>"Khác"
	);

	$config['dangtin']['status'] = array(
		"0"=>"Không xác định",
		"1"=>"Bán gấp",
		"2"=>"Cần mua gấp",
		"3"=>"Cần thuê gấp",
		"4"=>"Cho thuê gấp",
		"5"=>"Giảm giá",
		"6"=>"Xin hỏi"
	);
	$config['dangtin']['giaban'] = array(
		"0"=>"Chọn giá bán",
		"0-500"=>"&lt;=500 triệu",
		"500-800"=>"500 - 800 triệu",
		"800-1000"=>"800 triệu - 1 tỷ",
		"1000-2000"=>"1 - 2 tỷ",
		"2000-3000"=>"2 - 3 tỷ",
		"3000-5000"=>"3 - 5 tỷ",
		"5000-7000"=>"5 - 7 tỷ",
		"7000-10000"=>"7 - 10 tỷ",
		"10000-20000"=>"10 - 20 tỷ",
		"20000-30000"=>"20 - 30 tỷ",
		"0-30000"=>"&gt; 30 tỷ"
	);
	$config['dangtin']['dientich'] = array(
		"0"=>"Diện tích",
		"0-30"=>"&lt;=30 m2",
		"30-50"=>"30 - 50 m2",
		"50-80"=>"30 - 80 m2",
		"80-100"=>"80 - 100 m2",
		"100-150"=>"100 - 150 m2",
		"150-200"=>"150 - 200 m2",
		"250-300"=>"250 - 300 m2",
		"300-400"=>"300 - 400 m2",
		"500-1000"=>"500 - 1000 m2",
		"0-1000"=>"&gt; 1000 m2"
	);
	$config['dangtin']['donvi'] = array(
		'0'=>'Thỏa thuận',
		'1000'=>'Nghìn',
		'1000000'=>'Triệu',
		'1000000000'=>'Tỷ'
	);

	$config['dangtin']['giatinh'] = array(
		'1'=>'Tổng diện tích',
		'2'=>'m2',
		'3'=>'tháng'
	);

	$config['dangtin']['phaply'] = array(
		'1'=>'Sổ đỏ',
		'2'=>'Sổ hồng',
		'3'=>'Giấy phép xây dựng',
		'4'=>'Chưa rõ pháp lý'
	);

	$config['dangtin']['huongnha'] = array(
		'1'=>'Đông',
		'2'=>'Tây',
		'3'=>'Nam',
		'4'=>'Bắc',
		'5'=>'Đông - Bắc',
		'6'=>'Tây - Bắc',
		'7'=>'Đông - Nam',
		'8'=>'Tây - Nam'
	);
?>
