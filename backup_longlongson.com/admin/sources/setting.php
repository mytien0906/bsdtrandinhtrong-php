<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

switch($act){
	case "capnhat":
		get_gioithieu();
		$template = "setting/item_add";
		break;
	case "save":
		save_gioithieu();
		break;
		
	default:
		$template = "index";
}

function get_gioithieu(){
	global $d, $item;

	$sql = "select * from #_setting limit 0,1";
	$d->query($sql);
	//if($d->num_rows()==0) transfer("Dữ liệu chưa khởi tạo.", "index.php");
	$item = $d->fetch_array();
}

function save_gioithieu(){
	global $d;
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=setting&act=capnhat");

	$data=$_POST['data'];
	
	if($favicon = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,"favicon")){
		$data['favicon'] = $favicon;	
	}
	
	if($video_img = upload_image("video_img", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,"video-img-index")){
			$data['video_img'] = $video_img;	
			$d->setTable('setting');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_hinhanh.$row['video_img']);	
			}
		}
		
	$data['hienthinews'] = isset($_POST['hienthinews']) ? 1 : 0;
	$data['hienthivideo'] = isset($_POST['hienthivideo']) ? 1 : 0;

	if($i360 = upload_image("i360", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,"img-360")){
		$data['img_360'] = $i360;	
		$data['thumb_360'] = create_thumb($data['img_360'], 619, 420, _upload_hinhanh,"img-360",1);
	}
	$data['link_360'] = $_POST['link_360'];

	if($img_en = upload_image("img_en", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,"icon-en")){
		$data['img_en'] = $img_en;	
	}
	$data['link_en'] = $_POST['link_en'];

	if($qc = upload_image("qc", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,"qc-code")){
		$data['qc'] = $qc;	
	}

	#Query--------------------	
	$d->reset();
	$d->setTable('setting');
	if($d->update($data))
		header("Location:index.php?com=setting&act=capnhat");
	else
		transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=setting&act=capnhat");
}

?>