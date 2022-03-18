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
	$id=(int)$_POST['id'];

	$d->reset();
	$sql="select tinhtrang from #_".$com.$list." where id='$id'";
	$d->query($sql);
	$re=$d->fetch_array();

	if($re['tinhtrang']==0)
	{
		$d->reset();
		$sql="update #_".$com.$list." set tinhtrang=1 where id='$id'";
		$d->query($sql);
		echo '<strong style="color:green">Còn hàng</strong>';
	}
	else
	{
		$d->reset();
		$sql="update #_".$com.$list." set tinhtrang=0 where id='$id'";
		$d->query($sql);
		echo '<strong style="color:red">Hết hàng</strong>';
	}
?>