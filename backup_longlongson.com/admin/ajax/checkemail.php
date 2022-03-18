<?php
	session_start();
	@define ( '_template' , '../templates/');
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../lib/');

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";	
	
	$d = new database($config['database']);
	
	$email=$_POST['email'];
	
	$d->reset();
	$sql="select id from #_thanhvien where email='$email'";	
	$d->query($sql);
	$re=$d->fetch_array();
	if($re['id']!="")
	{
		echo 'Email đã tồn tại.';
	}
	else
	{
		echo '';	
	}
?>
