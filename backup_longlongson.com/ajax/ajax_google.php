<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	@define ( '_lib' , '../admin/lib/');
	@define ( '_source' , '../sources/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	
	$email=$_POST['email'];
	$d->reset();
	$sql="select * from #_thanhvien where email='".$email."'";
	$d->query($sql);
	$thanhvien_face=$d->result_array();
	if(count($thanhvien_face)>0){
		$d->reset();
		$sql="select * from #_thanhvien where email='".$_POST['email']."'";
		$d->query($sql);
		$row_user=$d->fetch_array();
		
		//exit($row_user['ten']);
		$_SESSION['logging']= array();
		$_SESSION['logging']= $row_user;
		
		exit('success1');
	}else{
		$data['ten']=$_POST['name'];
		$data['email']=$_POST['email'];
		$d->setTable('thanhvien');
		$d->insert($data);
		
		$d->reset();
		$sql="select * from #_thanhvien where email='".$_POST['email']."'";
		$d->query($sql);
		$row_user=$d->fetch_array();
		
		//exit($row_user['ten']);
		$_SESSION['logging']= array();
		$_SESSION['logging']= $row_user;
		exit('success2');
	}
?>