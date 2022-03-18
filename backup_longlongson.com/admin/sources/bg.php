<?php	if(!defined('_source')) die("Error");
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
switch($act){
	case "capnhat":
		get_bg();
		$template = "bg/item_add";
		break;
	case "save":
		save_bg();
		break;

		
	default:
		$template = "index";
}
function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}

function get_bg(){
	global $d, $item;

	$sql = "select * from #_bg limit 0,1";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu chưa khởi tạo.", "index.php");
	$item = $d->fetch_array();
}

function save_bg(){
	global $d,$config;
	$file_name=fns_Rand_digit(0,9,5);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=bg&act=capnhat");
	
	$data=$_POST['data'];
	foreach ($config['lang'] as $key => $value) {
		if($photo = upload_image("logo_".$key, 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF',_upload_hinhanh,$file_name."_logo_".$key)){
			$data['logo_'.$key] = $photo;
			$d->setTable('bg');			
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_hinhanh.$row['logo_'.$key]);
			}
		}
		if($photo = upload_image("file_".$key, 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF',_upload_hinhanh,$file_name."_bg_".$key)){
			$data['photo_'.$key] = $photo;
			$d->setTable('bg');			
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_hinhanh.$row['photo_'.$key]);
			}
		}
		if($photo = upload_image("flash_".$key, 'swf|jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF',_upload_hinhanh,$file_name."_flash_".$key)){
			$data['flash_'.$key] = $photo;
			$d->setTable('bg');			
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_hinhanh.$row['flash_'.$key]);
			}
		}
		if($photo = upload_image("mobile_".$key, 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF',_upload_hinhanh,$file_name."_mobile_".$key)){
			$data['mobile_'.$key] = $photo;
			$d->setTable('bg');			
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_hinhanh.$row['mobile_'.$key]);
			}
		}
	}

	if($bg = upload_image("bg", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF',_upload_hinhanh,$file_name."_bg")){
		$data['bg'] = $bg;
		$d->setTable('bg');			
		$d->select();
		if($d->num_rows()>0){
			$row = $d->fetch_array();
			delete_file(_upload_hinhanh.$row['bg']);
		}
	}	

	$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
	$data['hienthi1'] = isset($_POST['hienthi1']) ? 1 : 0;
		
	$d->reset();
	$d->setTable('bg');
	if($d->update($data))
		redirect("index.php?com=bg&act=capnhat");
	else
		transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=bg&act=capnhat");
}

?>