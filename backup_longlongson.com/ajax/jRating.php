<?php
	session_start();
	$session=session_id();
	@define ( '_template' , '../templates/');
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../admin/lib/');


	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	
	$idBox = $_GET['idBox'];
	$rate = $_GET['rate'];
	
	$sql="update table_product set rate=(rate+'".$rate."')/2, soluotrate=soluotrate+1 where id='".$idBox."'";
	
	$d=mysql_query($sql);
	
			
?>
