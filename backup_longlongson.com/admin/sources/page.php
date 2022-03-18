<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$urldanhmuc ="";

$id=$_REQUEST['id'];
$type=$_REQUEST['type'];

switch($act){

	case "capnhat":		
		get_item();
		$template = "page/item_add";
		break;
	case "save":
		save_item();
		break;
	
	
	default:
		$template = "index";
}

function get_item(){
	global $d, $item,$ds_tags;

	$type=$_REQUEST['type'];
	$sql = "select * from #_page where type='".$type."'";
	$d->query($sql);
	$item = $d->fetch_array();	
}

function save_item(){
	global $d,$config;
	
	$type=$_REQUEST['type'];
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=page&act=capnhat&type=".$type);
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	$data=$_POST['data'];
	if($data['ten_vi']!='')
	{
		$file_name=changeTitle($data['ten_vi']).time();
	}
	else
	{
		$file_name=time();
	}
	if($id){
		$id =  themdau($_POST['id']);
		if($photo = upload_image("file", $config['type'][$type]['photo_extension'], _upload_hinhanh,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], $config['type'][$type]['thumb_width'], $config['type'][$type]['thumb_height'], _upload_hinhanh,$file_name,$config['type'][$type]['thumb_crop']);
			$d->setTable('page');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_hinhanh.$row['photo']);	
				delete_file(_upload_hinhanh.$row['thumb']);				
			}		
		}		
		
		foreach ($config['lang'] as $key => $value) {
			$data['tenkhongdau_'.$key] = changeTitle($data['ten_'.$key]);	
		}

		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaysua'] = time();
		$d->setTable('page');
		$d->setWhere('id', $id);
		if($d->update($data))
		{
			transfer("Cập nhật dữ liệu thành công",'index.php?com=page&act=capnhat&type='.$type);
		}
		else
			transfer("Cập nhật dữ liệu bị lỗi",'index.php?com=page&act=capnhat&type='.$type);
	}else{
		if($photo = upload_image("file", $config['type'][$type]['photo_extension'], _upload_hinhanh,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], $config['type'][$type]['thumb_width'], $config['type'][$type]['thumb_height'], _upload_hinhanh,$file_name,$config['type'][$type]['thumb_crop']);
		}		
		
		foreach ($config['lang'] as $key => $value) {
			$data['tenkhongdau_'.$key] = changeTitle($data['ten_'.$key]);	
		}

		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaytao'] = time();
		$d->setTable('page');
		if($d->insert($data))
		{			
			transfer("Cập nhật dữ liệu thành công",'index.php?com=page&act=capnhat&type='.$type);
		}
		else
			transfer("Cập nhật dữ liệu bị lỗi",'index.php?com=page&act=capnhat&type='.$type);
	}
}

?>