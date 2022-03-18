<?php
	session_start();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './lib/');

	include_once _lib."config.php";
	include_once _lib."config_type.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";	

	$d = new database($config['database']);

	$login_name = 'Gaconlonton';

	#example: update_link.php?str=http://demo68.ninavietnam.org/dental_lab&rec=http://mydomain.com

	if((!isset($_SESSION[$login_name]) || $_SESSION[$login_name]==false))
	{
		header('Content-Type: text/html; charset=utf-8');
		alert('Vui lòng đăng nhập để thực hiện chức năng này!');
		redirect("index.php?com=user&act=login");
	}
	else
	{
		$str=trim($_GET['str']);
		$rec=trim($_GET['rec']);

		if($str!='' && $rec!='')
		{
			foreach ($config['lang'] as $key => $value) 
			{
				# Thuc hien update duong dan trong noidung bang product
				$d->reset();
				$sql="update #_product noidung_".$key." set noidung_".$key."=replace(noidung_".$key.",'$str','$rec')";
				$d->query($sql);

				# Thuc hien update duong dan trong noidung bang tintuc
				$d->reset();
				$sql="update #_tintuc noidung_".$key." set noidung_".$key."=replace(noidung_".$key.",'$str','$rec')";
				$d->query($sql);

				# Thuc hien update duong dan trong noidung bang baiviet
				$d->reset();
				$sql="update #_baiviet noidung_".$key." set noidung_".$key."=replace(noidung_".$key.",'$str','$rec')";
				$d->query($sql);

				# Thuc hien update duong dan trong noidung bang page
				$d->reset();
				$sql="update #_page noidung_".$key." set noidung_".$key."=replace(noidung_".$key.",'$str','$rec')";
				$d->query($sql);
			}
			header('Content-Type: text/html; charset=utf-8');
			alert('Đã cập nhật lại đường dẫn hình trong nội dung!');
		}
		else
		{
			header('Content-Type: text/html; charset=utf-8');
			alert('Cấu trúc: update_link.php?str=duongdancu&rec=duongdanmoi');
		}
	}

?>