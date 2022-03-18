<?php
	session_start();
	@define ( '_lib' , '../libraries/');

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";	

	$d = new database($config['database']);
	
	if($_SESSION['logging']['id']){
		$id = (int)$_POST['id'];
		$namebg = (string)$_POST['namebg'];
		$d->reset();
		$sql = "select id,photo,thumb from #_$namebg where id='".$id."'";
		$d->query($sql);
		$row = $d->result_array();

		if(count($row)>0){
			for($i=0; $i<count($row); $i++){
				if($namebg=='baiviet_photo'){
					delete_file(_upload_baiviet_l.$row[$i]['photo']);
					delete_file(_upload_baiviet_l.$row[$i]['thumb']);
				}
			}
			$sql = "delete from #_$namebg where id='".$id."'";
			$d->query($sql);
		}
	}
?>
