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

	$com=$_POST['com'];
	$list=$_POST['list'];
	$stt=(int)$_POST['stt'];
	$id=(int)$_POST['id'];

	$d->reset();
	$sql="update #_".$com.$list." set stt=$stt where id='$id'";
	$d->query($sql);
?>