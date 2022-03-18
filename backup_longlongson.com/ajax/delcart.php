<?php
	session_start();
	$session=session_id();
	date_default_timezone_set('Asia/Saigon');
	@define ( '_template' , '../templates/'); //định nghĩa đường dẫn tắt, chèn biến vào thay thế
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../admin/lib/');
	@define ( _upload_folder , './media/upload/' );

	$lang='vi';

	require_once _source."lang_$lang.php";
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	
	$i=(int)$_POST['id'];

	unset($_SESSION['cart'][$i]);
	$_SESSION['cart']=array_values($_SESSION['cart']);
	$arr['soluong']=count($_SESSION['cart']);
	$arr['thanhtien']=number_format(get_order_total(),0, ',', '.').'đ';

	echo json_encode($arr);
?>

