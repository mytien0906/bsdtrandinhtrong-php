<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

$id=$_REQUEST['id'];
$type=$_REQUEST['type'];
$level=$_REQUEST['level'];
$id_pro=$_REQUEST['id_pro'];

## Kiem tra xem id_lv co ton tai trong csdl hay chua
for ($i=0; $i < $config['type'][$type]['level']; $i++) { 
	$d->reset();
	$sql="select 1 from #_product where id_lv".$i."=0";
	if($d->queryf($sql)==false)
	{
		$d->reset();
		$sql="ALTER TABLE #_product ADD id_lv".$i." INT(11) NOT NULL";
		$d->query($sql);
	}

	$d->reset();
	$sql="select 1 from #_product_list where id_lv".$i."=0";
	if($d->queryf($sql)==false)
	{
		$d->reset();
		$sql="ALTER TABLE #_product_list ADD id_lv".$i." INT(11) NOT NULL";
		$d->query($sql);
	}
}


## Kiem tra noi bat
foreach ($config['type'][$type]['noibat'] as $key => $value) {
	$d->reset();
	$sql="select 1 from #_product where $key=0";
	if($d->queryf($sql)==false)
	{
		$d->reset();
		$sql="ALTER TABLE #_product ADD $key INT(11) NOT NULL";
		$d->query($sql);
	}	
}

switch($act){

	case "man":
		get_items();
		$template = "product/items";
		break;
	case "add":		
		$template = "product/item_add";
		break;
	case "edit":		
		get_item();
		$template = "product/item_add";
		break;
	case "save":
		save_item();
		break;
	case "delete":
		delete_item();
		break;
	
	#===================================================	
	case "man_list":
		get_lists();
		$template = "product/lists";
		break;
	case "add_list":		
		$template = "product/list_add";
		break;
	case "edit_list":		
		get_list();
		$template = "product/list_add";
		break;
	case "save_list":
		save_list();
		break;
	case "delete_list":
		delete_list();
		break;

	#===================================================	
	case "man_thuonghieu":
		get_thuonghieus();
		$template = "product/thuonghieus";
		break;
	case "add_thuonghieu":		
		$template = "product/thuonghieu_add";
		break;
	case "edit_thuonghieu":		
		get_thuonghieu();
		$template = "product/thuonghieu_add";
		break;
	case "save_thuonghieu":
		save_thuonghieu();
		break;
	case "delete_thuonghieu":
		delete_thuonghieu();
		break;

	#===================================================	
	case "man_tab":
		get_tabs();
		$template = "product/tabs";
		break;
	case "add_tab":		
		$template = "product/tab_add";
		break;
	case "edit_tab":		
		get_tab();
		$template = "product/tab_add";
		break;
	case "save_tab":
		save_tab();
		break;
	case "delete_tab":
		delete_list();
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
	
	$sql = "select * from #_product where type='".$_REQUEST['type']."'";	

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
	global $d, $item,$ds_tags,$list_trichdoan;

	$type=$_REQUEST['type'];
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=product&act=man&type=".$type);	
	$sql = "select * from #_product where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man&type=".$type);
	$item = $d->fetch_array();	

	## Lấy hình trích đoạn
	$sql = "select * from #_product_hinhanh where id_pro='".$id."' order by id asc";
	$d->query($sql);
	$list_trichdoan = $d->result_array();
}

function save_item(){
	global $d,$config;
	
	$type=$_REQUEST['type'];
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man&type=".$type);
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
		if($photo = upload_image("file", $config['type'][$type]['photo_extension'], _upload_product,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], $config['type'][$type]['thumb_width'], $config['type'][$type]['thumb_height'], _upload_product,$file_name,$config['type'][$type]['thumb_crop']);
			$d->setTable('product');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_product.$row['photo']);	
				delete_file(_upload_product.$row['thumb']);				
			}		
		}		
		
		foreach ($config['lang'] as $key => $value) {
			$data['tenkhongdau_'.$key] = changeTitle($data['ten_vi']);	
		}

		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaysua'] = time();
		$d->setTable('product');
		$d->setWhere('id', $id);
		if($d->update($data))
		{
			//Xử lý hình trích đoạn
			if (isset($_FILES['files'])) {
	            $myFile = $_FILES['files'];
	            $fileCount = count($myFile["name"]);
	            $file_name=fns_Rand_digit(0,9,6);
				
				$ck=0;
	            for ($i = 0; $i < $fileCount; $i++) {  
		            if(move_uploaded_file($myFile["tmp_name"][$i], _upload_product."/".$file_name."_".$myFile["name"][$i])){		            							
						$data1['photo'] = $file_name."_".$myFile["name"][$i];
						$data1['thumb'] = create_thumb($data1['photo'], $config['type'][$type]['thumb_width'],$config['type'][$type]['thumb_height'], _upload_product,$file_name."_".$myFile["name"][$i],1);			
						$data1['id_pro'] = $id;
						$data1['hienthi'] = 1;
						$d->setTable('product_hinhanh');
						$d->insert($data1);
		            }
	            }
	        }
			redirect($_SESSION['adm_crp']);
		}
		else
			transfer("Cập nhật dữ liệu bị lỗi",$_SESSION['adm_crp']);
	}else{
		if($photo = upload_image("file", $config['type'][$type]['photo_extension'], _upload_product,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], $config['type'][$type]['thumb_width'], $config['type'][$type]['thumb_height'], _upload_product,$file_name,$config['type'][$type]['thumb_crop']);
		}		
		
		foreach ($config['lang'] as $key => $value) {
			$data['tenkhongdau_'.$key] = changeTitle($data['ten_vi']);	
		}

		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaytao'] = time();
		$d->setTable('product');
		if($d->insert($data))
		{		
			$idpro = mysql_insert_id();
			//Xử lý hình trích đoạn
	     	if (isset($_FILES['files'])) {
	            $myFile = $_FILES['files'];
	            $fileCount = count($myFile["name"]);
	            $file_name=fns_Rand_digit(0,9,6);
				
				$ck=0;
	            for ($i = 0; $i < $fileCount; $i++) {  
		            if(move_uploaded_file($myFile["tmp_name"][$i], _upload_product."/".$file_name."_".$myFile["name"][$i])){
		            	$data1['photo'] = $file_name."_".$myFile["name"][$i];	
						$data1['thumb'] = create_thumb($data1['photo'], $config['type'][$type]['thumb_width'],$config['type'][$type]['thumb_height'], _upload_product,$file_name."_".$myFile["name"][$i],1);			
						$data1['id_pro'] = $idpro;
						$data1['hienthi'] = 1;
						$d->setTable('product_hinhanh');
						$d->insert($data1);
		            }
	            }
	        }		
			redirect($_SESSION['adm_crp']);
		}
		else
			transfer("Lưu dữ liệu bị lỗi", $_SESSION['adm_crp']);
	}
}

function delete_item(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id,thumb, photo from #_product where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_product.$row['photo']);
				delete_file(_upload_product.$row['thumb']);			
			}
		$sql = "delete from #_product where id='".$id."'";
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
			$sql = "select id,thumb,photo from #_product where id='".$id."'";
			$d->query($sql);
			if($d->num_rows()>0){
				while($row = $d->fetch_array()){
					delete_file(_upload_product.$row['photo']);
					delete_file(_upload_product.$row['thumb']);			
				}
			$sql = "delete from #_product where id='".$id."'";
			$d->query($sql);
			}
		}
		redirect($_SESSION['adm_crp']);
	}
}

/*---------------------------------*/
function get_lists(){
	global $d, $items, $paging;

	$level=$_REQUEST['level'];
	$ssql="";
	for ($i=0; $i < $level; $i++) { 
		if((int)$_GET['lv'.$i]>0)
		{
			$ssql.=" and id_lv".$i."='".(int)$_GET['lv'.$i]."' ";	
		}
	}

	$sql = "select * from #_product_list where level='$level' and type='".$_REQUEST['type']."' $ssql order by stt,id desc";
	$d->query($sql);
	$items = $d->result_array();

	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url=getCurrentPageUrlAdmin();;
	$maxR=20;
	$maxP=10;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];

	$_SESSION['adm_crp']=getCurrentPageUrlAdmin();
}

function get_list(){
	global $d, $item;

	$type=$_REQUEST['type'];
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
	transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_list&type=".$type);	
	$sql = "select * from #_product_list where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man_list&type=".$type);
	$item = $d->fetch_array();	
}

function save_list(){
	global $d,$config;
	
	$type=$_REQUEST['type'];
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_list&type=".$type);
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
		if($photo = upload_image("file", $config['type'][$type]['photo_list_extension'], _upload_product,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], $config['type'][$type]['thumb_list_width'], $config['type'][$type]['thumb_list_height'], _upload_product,$file_name,$config['type'][$type]['thumb_list_crop']);
			$d->setTable('product_list');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_product.$row['photo']);	
				delete_file(_upload_product.$row['thumb']);				
			}		
		}		
		
		foreach ($config['lang'] as $key => $value) {
			$data['tenkhongdau_'.$key] = changeTitle($data['ten_vi']);	
		}
		
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaysua'] = time();
		
		$d->setTable('product_list');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect($_SESSION['adm_crp']);
		else
			transfer("Cập nhật dữ liệu bị lỗi", $_SESSION['adm_crp']);
	}else{	
	
		if($photo = upload_image("file", $config['type'][$type]['photo_list_extension'], _upload_product,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], $config['type'][$type]['thumb_list_width'], $config['type'][$type]['thumb_list_height'], _upload_product,$file_name,$config['type'][$type]['thumb_list_crop']);
		}		
		
		foreach ($config['lang'] as $key => $value) {
			$data['tenkhongdau_'.$key] = changeTitle($data['ten_vi']);	
		}
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaysua'] = time();
		
		$d->setTable('product_list');
		if($d->insert($data))
			redirect($_SESSION['adm_crp']);
		else
			transfer("Lưu dữ liệu bị lỗi", $_SESSION['adm_crp']);
	}
}

function delete_list(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id,thumb, photo from #_product_list where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_product.$row['photo']);
				delete_file(_upload_product.$row['thumb']);			
			}
		$sql = "delete from #_product_list where id='".$id."'";
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
			$sql = "select id,thumb,photo from #_product_list where id='".$id."'";
			$d->query($sql);
			if($d->num_rows()>0){
				while($row = $d->fetch_array()){
					delete_file(_upload_product.$row['photo']);
					delete_file(_upload_product.$row['thumb']);			
				}
			$sql = "delete from #_product_list where id='".$id."'";
			$d->query($sql);
			}
		}
		redirect($_SESSION['adm_crp']);
	}
}


function get_tabs(){
	global $d, $items, $paging, $config;
	
	$sql = "select * from #_product_tab where id_pro='".$_REQUEST['id_pro']."'";	

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

function get_tab(){
	global $d, $item,$ds_tags;

	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_tab&id_pro=".$_REQUEST['id_pro']);	
	$sql = "select * from #_product_tab where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man_tab&id_pro=".$_REQUEST['id_pro']);
	$item = $d->fetch_array();	
}

function save_tab(){
	global $d,$config;

	$type=$_REQUEST['type'];
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_tab&id_pro=".$_REQUEST['id_pro']);
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
		if($photo = upload_image("file", $config['type'][$type]['photo_extension'], _upload_product,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], $config['type'][$type]['thumb_tab_width'], $config['type'][$type]['thumb_tab_height'], _upload_product,$file_name,$config['type'][$type]['thumb_tab_crop']);
			$d->setTable('product_tab');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_product.$row['photo']);	
				delete_file(_upload_product.$row['thumb']);				
			}		
		}	

		if($photo1 = upload_image("file1", $config['type'][$type]['photo_extension'], _upload_product,$file_name.'1')){
			$data['photo1'] = $photo1;		
			$d->setTable('product_tab');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_product.$row['photo1']);	
			}		
		}		
		
		foreach ($config['lang'] as $key => $value) {
			$data['tenkhongdau_'.$key] = changeTitle($data['ten_'.$key]);	
		}

		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaysua'] = time();
		$d->setTable('product_tab');
		$d->setWhere('id', $id);
		if($d->update($data))
		{
			redirect($_SESSION['adm_crp']);
		}
		else
			transfer("Cập nhật dữ liệu bị lỗi",$_SESSION['adm_crp']);
	}else{
		if($photo = upload_image("file", $config['type'][$type]['photo_extension'], _upload_product,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], $config['type'][$type]['thumb_tab_width'], $config['type'][$type]['thumb_tab_height'], _upload_product,$file_name,$config['type'][$type]['thumb_tab_crop']);
		}	

		if($photo1 = upload_image("file1", $config['type'][$type]['photo_extension'], _upload_product,$file_name.'1')){
			$data['photo1'] = $photo1;
		}		
		
		foreach ($config['lang'] as $key => $value) {
			$data['tenkhongdau_'.$key] = changeTitle($data['ten_'.$key]);	
		}
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaytao'] = time();
		$d->setTable('product_tab');
		if($d->insert($data))
		{		
			redirect($_SESSION['adm_crp']);
		}
		else
			transfer("Lưu dữ liệu bị lỗi", $_SESSION['adm_crp']);
	}
}

function delete_tab(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id,thumb, photo from #_product_tab where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_product.$row['photo']);
				delete_file(_upload_product.$row['thumb']);			
			}
		$sql = "delete from #_product_tab where id='".$id."'";
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
			$sql = "select id,thumb,photo from #_product_tab where id='".$id."'";
			$d->query($sql);
			if($d->num_rows()>0){
				while($row = $d->fetch_array()){
					delete_file(_upload_product.$row['photo']);
					delete_file(_upload_product.$row['thumb']);			
				}
			$sql = "delete from #_product_tab where id='".$id."'";
			$d->query($sql);
			}
		}
		redirect($_SESSION['adm_crp']);
	}
}

/*---------------------------------*/
function get_thuonghieus(){
	global $d, $items, $paging;

	$level=$_REQUEST['level'];
	$ssql="";
	for ($i=0; $i < $level; $i++) { 
		if((int)$_GET['lv'.$i]>0)
		{
			$ssql.=" and id_lv".$i."='".(int)$_GET['lv'.$i]."' ";	
		}
	}

	$sql = "select * from #_product_thuonghieu where level='$level' and type='".$_REQUEST['type']."' $ssql order by stt,id desc";
	$d->query($sql);
	$items = $d->result_array();

	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url=getCurrentPageUrlAdmin();;
	$maxR=20;
	$maxP=10;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];

	$_SESSION['adm_crp']=getCurrentPageUrlAdmin();
}

function get_thuonghieu(){
	global $d, $item;

	$type=$_REQUEST['type'];
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
	transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_thuonghieu&type=".$type);	
	$sql = "select * from #_product_thuonghieu where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man_thuonghieu&type=".$type);
	$item = $d->fetch_array();	
}

function save_thuonghieu(){
	global $d,$config;
	
	$type=$_REQUEST['type'];
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_thuonghieu&type=".$type);
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
		if($photo = upload_image("file", $config['type'][$type]['photo_thuonghieu_extension'], _upload_product,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], $config['type'][$type]['thumb_thuonghieu_width'], $config['type'][$type]['thumb_thuonghieu_height'], _upload_product,$file_name,$config['type'][$type]['thumb_thuonghieu_crop']);
			$d->setTable('product_thuonghieu');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_product.$row['photo']);	
				delete_file(_upload_product.$row['thumb']);				
			}		
		}		
		
		foreach ($config['lang'] as $key => $value) {
			$data['tenkhongdau_'.$key] = changeTitle($data['ten_vi']);	
		}
		
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaysua'] = time();
		
		$d->setTable('product_thuonghieu');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect($_SESSION['adm_crp']);
		else
			transfer("Cập nhật dữ liệu bị lỗi", $_SESSION['adm_crp']);
	}else{	
	
		if($photo = upload_image("file", $config['type'][$type]['photo_thuonghieu_extension'], _upload_product,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], $config['type'][$type]['thumb_thuonghieu_width'], $config['type'][$type]['thumb_thuonghieu_height'], _upload_product,$file_name,$config['type'][$type]['thumb_thuonghieu_crop']);
		}		
		
		foreach ($config['lang'] as $key => $value) {
			$data['tenkhongdau_'.$key] = changeTitle($data['ten_vi']);	
		}
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaysua'] = time();
		
		$d->setTable('product_thuonghieu');
		if($d->insert($data))
			redirect($_SESSION['adm_crp']);
		else
			transfer("Lưu dữ liệu bị lỗi", $_SESSION['adm_crp']);
	}
}

function delete_thuonghieu(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id,thumb, photo from #_product_thuonghieu where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_product.$row['photo']);
				delete_file(_upload_product.$row['thumb']);			
			}
		$sql = "delete from #_product_thuonghieu where id='".$id."'";
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
			$sql = "select id,thumb,photo from #_product_thuonghieu where id='".$id."'";
			$d->query($sql);
			if($d->num_rows()>0){
				while($row = $d->fetch_array()){
					delete_file(_upload_product.$row['photo']);
					delete_file(_upload_product.$row['thumb']);			
				}
			$sql = "delete from #_product_thuonghieu where id='".$id."'";
			$d->query($sql);
			}
		}
		redirect($_SESSION['adm_crp']);
	}
}

?>