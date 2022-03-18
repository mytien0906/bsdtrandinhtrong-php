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
	@$type = (int)$_POST['type'];
	
	if($type==1){
		$danhmuc_sanpham = get_result_array("select id, ten_vi as ten from table_baiviet_cat where id_list=".$id." and hienthi=1 order by stt asc, id desc");

		$ch = '<option value="0">Khoảng giá</option>';
		foreach ($danhmuc_sanpham as $key => $value) {
			$ch .= '<option value="'.$value['id'].'">'.$value['ten'].'</option>';
		}

		echo $ch;
	}elseif($type==2){
		$danhmuc_sanpham = get_result_array("select id, ten_vi as ten from table_baiviet_item where id_cat=".$id." and hienthi=1 order by stt asc, id desc");

		$ch = '<option value="0">Danh mục cấp 3</option>';
		foreach ($danhmuc_sanpham as $key => $value) {
			$ch .= '<option value="'.$value['id'].'">'.$value['ten'].'</option>';
		}

		echo $ch;
	}
	
?>