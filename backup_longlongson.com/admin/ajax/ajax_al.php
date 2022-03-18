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
	$id = $_POST['id'];
	
	$d->reset();
	$sql = "select photo,thumb from #_product_hinhanh where id='".$id."'";
	$d->query($sql);
	$row=$d->fetch_array();
	delete_file('../'._upload_product.$row['photo']);			
	delete_file('../'._upload_product.$row['thumb']);			
	
	$d->reset();
	$sql = "delete from #_product_hinhanh where id='".$id."'";
	$d->query($sql);
?>
