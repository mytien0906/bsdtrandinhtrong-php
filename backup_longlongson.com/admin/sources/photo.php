<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$urldanhmuc ="";

$id=$_REQUEST['id'];
$type=$_REQUEST['type'];

switch($act){

	case "man":
		get_items();
		$template = "photo/items";
		break;
	case "add":		
		$template = "photo/item_add";
		break;
	case "edit":		
		get_item();
		$template = "photo/item_add";
		break;
	case "save":
		save_item();
		break;
	case "delete":
		delete_item();
		break;
	
	default:
		$template = "index";
}

#====================================
function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}

function get_items(){
	global $d, $items, $paging, $config;
	
	$sql = "select * from #_photo where type='".$_REQUEST['type']."'";	

	for ($i=0; $i < $config['type'][$_REQUEST['type']]['level']; $i++) { 
		if((int)$_GET['lv'.$i]>0)
		{
			$sql.=" and id_lv".$i."='".(int)$_GET['lv'.$i]."' ";	
		}
	}

	if($_REQUEST['keyword']!='')
	{
		$keyword=addslashes($_REQUEST['keyword']);
		$sql.=" and ten_vi LIKE '%$keyword%'";
	}
	$sql.=" order by stt,id desc";

	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url=getCurrentPageUrlAdmin();
	$maxR=20;
	$maxP=20;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];

	$_SESSION['adm_crp']=getCurrentPageUrlAdmin();
}

function get_item(){
	global $d, $item,$ds_tags;

	$type=$_REQUEST['type'];
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=photo&act=man&type=".$type);	
	$sql = "select * from #_photo where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=photo&act=man&type=".$type);
	$item = $d->fetch_array();	
}

function save_item(){
	global $d,$config;
	
	$type=$_REQUEST['type'];
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=photo&act=man&type=".$type);
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
			$d->setTable('photo');
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
		$d->setTable('photo');
		$d->setWhere('id', $id);
		if($d->update($data))
		{
			redirect($_SESSION['adm_crp']);
		}
		else
			transfer("Cập nhật dữ liệu bị lỗi",$_SESSION['adm_crp']);
	}else{
		for ($i=0; $i < 5; $i++) { 
			$data=$_POST['data'.$i];
			if($photo = upload_image("file".$i, $config['type'][$type]['photo_extension'], _upload_hinhanh,$file_name.$i)){
				$data['photo'] = $photo;		
				$data['thumb'] = create_thumb($data['photo'], $config['type'][$type]['thumb_width'], $config['type'][$type]['thumb_height'], _upload_hinhanh,$file_name.$i,$config['type'][$type]['thumb_crop']);

				foreach ($config['lang'] as $key => $value) {
					$data['tenkhongdau_'.$key] = changeTitle($data['ten_'.$key]);	
				}

				$data['hienthi'] = isset($_POST['hienthi'.$i]) ? 1 : 0;
				$data['ngaytao'] = time();
				$d->setTable('photo');
				$d->insert($data);
			}		
		}
		redirect($_SESSION['adm_crp']);
	}
}

function delete_item(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id,thumb, photo from #_photo where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_hinhanh.$row['photo']);
				delete_file(_upload_hinhanh.$row['thumb']);			
			}
		$sql = "delete from #_photo where id='".$id."'";
		$d->query($sql);
		}
		if($d->query($sql))
			redirect($_SESSION['adm_crp']);
		else
			transfer("Xóa dữ liệu bị lỗi", $_SESSION['adm_crp']);
	}elseif(isset($_GET['listid'])){
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$d->reset();
			$sql = "select id,thumb,photo from #_photo where id='".$id."'";
			$d->query($sql);
			if($d->num_rows()>0){
				while($row = $d->fetch_array()){
					delete_file(_upload_hinhanh.$row['photo']);
					delete_file(_upload_hinhanh.$row['thumb']);			
				}
			$sql = "delete from #_photo where id='".$id."'";
			$d->query($sql);
			}
		}
		redirect($_SESSION['adm_crp']);
	}
}

?>