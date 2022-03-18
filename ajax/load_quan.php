<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	
	@define ( '_lib' , '../libraries/');
    
	include_once _lib."config.php";
	include_once _lib."constant.php";;
	include_once _lib."functions.php";;
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
    
	$d = new database($config['database']);
		
	@$id = (int)$_POST['id'];
	@$loai = (int)$_POST['loai'];
	if($loai==1){
		$danhmuc_sanpham = get_result_array("select id, ten from table_place_dist where id_city=".$id." and hienthi=1 order by id asc");
		$ch = '<option value="0">Quận / huyện</option>';
		foreach ($danhmuc_sanpham as $key => $value) {
			$ch .= '<option value="'.$value['id'].'">'.$value['ten'].'</option>';
		}
		echo $ch;
	}

	if($loai==2){
		$danhmuc_sanpham = get_result_array("select id, ten from table_place_ward where id_dist=".$id." and hienthi=1 order by id asc");
		$ch = '<option value="0">Phường / xã</option>';
		foreach ($danhmuc_sanpham as $key => $value) {
			$ch .= '<option value="'.$value['id'].'">'.$value['ten'].'</option>';
		}
		echo $ch;
	}

	if($loai==3){
		$danhmuc_sanpham = get_result_array("select id, ten from table_place_street where id_dist=".$id." and hienthi=1 order by id asc");
		$ch = '<option value="0">Đường / phố</option>';
		foreach ($danhmuc_sanpham as $key => $value) {
			$ch .= '<option value="'.$value['id'].'">'.$value['ten'].'</option>';
		}
		echo $ch;
	}
	
?>