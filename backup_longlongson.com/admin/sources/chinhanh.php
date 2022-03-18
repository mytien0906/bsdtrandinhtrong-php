<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

switch($act){
	case "man":
		get_items();
		$template = "chinhanh/items";
		break;
	case "add":
		$template = "chinhanh/item_add";
		break;
	case "edit":		
		get_item();		
		$template = "chinhanh/item_add";
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

function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}


function get_items(){
	global $d, $items, $paging;
	
	if(@$_REQUEST['noibat']!='')
	{
	$id_up = @$_REQUEST['noibat'];
	
	$noibat=time();
	
	$sql_sp = "SELECT id,noibat FROM table_chinhanh where id='".$id_up."' ";
	$d->query($sql_sp);
	$cats= $d->result_array();
	$spdc1=$cats[0]['noibat'];
	//echo "id:". $spdc1;
	if($spdc1==0)
	{
	$sqlUPDATE_ORDER = "UPDATE table_chinhanh SET noibat ='".$noibat."' WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	else
	{
	$sqlUPDATE_ORDER = "UPDATE table_chinhanh SET noibat =0  WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");

	}	
	}
	
	if(@$_REQUEST['hienthi']!='')
	{
	$id_up = @$_REQUEST['hienthi'];
	$sql_sp = "SELECT id,hienthi FROM table_chinhanh where id='".$id_up."' ";
	$d->query($sql_sp);
	$cats= $d->result_array();
	$hienthi=$cats[0]['hienthi'];
	//echo "id:". $spdc1;
	if($hienthi==0)
	{
	$sqlUPDATE_ORDER = "UPDATE table_chinhanh SET hienthi =1 WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	else
	{
	$sqlUPDATE_ORDER = "UPDATE table_chinhanh SET hienthi =0  WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");

	}	
	}
	
	$sql = "select * from #_chinhanh ";
	if((int)$_REQUEST['id_cat']!='')
	{
	$sql.=" where  	id_cat=".$_REQUEST['id_cat']."";
	}
	$sql.=" order by stt desc, id asc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=chinhanh&act=man";
	$maxR=20;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_item(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=chinhanh&act=man");
	
	$sql = "select * from #_chinhanh where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=chinhanh&act=man");
	$item = $d->fetch_array();
}

function save_item(){
	global $d;
	$file_name=fns_Rand_digit(0,9,8);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=chinhanh&act=man");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
		$id =  themdau($_POST['id']);
		
		if($photo = upload_image("file", 'jpg|png|gif',_upload_tintuc,$file_name)){
			$data['photo'] = $photo;
			$data['thumb'] = create_thumb($data['photo'], 150,110, _upload_tintuc,$file_name);
			$d->setTable('chinhanh');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tintuc.$row['photo']);
				delete_file(_upload_tintuc.$row['thumb']);
			}
		}
		
		#VN-------------------	
		$data['title_vi'] = $_POST['title_vi'];
		$data['keywords_vi'] = $_POST['keywords_vi'];
		$data['description_vi'] = $_POST['description_vi'];
		$data['ten_vi'] = $_POST['ten_vi'];
		$data['mota_vi'] = $_POST['mota_vi'];
		$data['noidung_vi'] = addslashes($_POST['noidung_vi']);
		$data['diachi_vi'] = $_POST['diachi_vi'];
		
		#EN-------------------	
			
		$data['title_en'] = $_POST['title_en'];
		$data['keywords_en'] = $_POST['keywords_en'];
		$data['description_en'] = $_POST['description_en'];
		$data['ten_en'] = $_POST['ten_en'];
		$data['mota_en'] = $_POST['mota_en'];
		$data['noidung_en'] = addslashes($_POST['noidung_en']);
		$data['diachi_en'] = $_POST['diachi_en'];
		
		#TW-------------------	
		$data['title_ta'] = $_POST['title_ta'];
		$data['keywords_ta'] = $_POST['keywords_ta'];
		$data['description_ta'] = $_POST['description_ta'];
		$data['ten_ta'] = $_POST['ten_ta'];
		$data['mota_ta'] = $_POST['mota_ta'];
		$data['noidung_ta'] = addslashes($_POST['noidung_ta']);
				
		#JP-------------------	
		$data['title_ja'] = $_POST['title_ja'];
		$data['keywords_ja'] = $_POST['keywords_ja'];
		$data['description_ja'] = $_POST['description_ja'];
		$data['ten_ja'] = $_POST['ten_ja'];
		$data['mota_ja'] = $_POST['mota_ja'];
		$data['noidung_ja'] = addslashes($_POST['noidung_ja']);
		
		#Chung---------------------
		$data['toado'] = $_POST['toado'];
		$data['tenkhongdau'] = changeTitle($_POST['ten_vi']);
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaysua'] = time();
		
		$d->setTable('chinhanh');
		$d->setWhere('id', $id);
		if($d->update($data))
				redirect("index.php?com=chinhanh&act=man");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=chinhanh&act=man");
	}else{
		
		if($photo = upload_image("file", 'jpg|png|gif',_upload_tintuc,$file_name)){
			$data['photo'] = $photo;
			$data['thumb'] = create_thumb($data['photo'], 150,110, _upload_tintuc,$file_name);
		}
		
		#VN-------------------	
		$data['title_vi'] = $_POST['title_vi'];
		$data['keywords_vi'] = $_POST['keywords_vi'];
		$data['description_vi'] = $_POST['description_vi'];
		$data['ten_vi'] = $_POST['ten_vi'];
		$data['mota_vi'] = $_POST['mota_vi'];
		$data['noidung_vi'] = addslashes($_POST['noidung_vi']);
		$data['diachi_vi'] = $_POST['diachi_vi'];
		
		#EN-------------------	
			
		$data['title_en'] = $_POST['title_en'];
		$data['keywords_en'] = $_POST['keywords_en'];
		$data['description_en'] = $_POST['description_en'];
		$data['ten_en'] = $_POST['ten_en'];
		$data['mota_en'] = $_POST['mota_en'];
		$data['noidung_en'] = addslashes($_POST['noidung_en']);
		$data['diachi_en'] = $_POST['diachi_en'];
				
		#TW-------------------	
		$data['title_ta'] = $_POST['title_ta'];
		$data['keywords_ta'] = $_POST['keywords_ta'];
		$data['description_ta'] = $_POST['description_ta'];
		$data['ten_ta'] = $_POST['ten_ta'];
		$data['mota_ta'] = $_POST['mota_ta'];
		$data['noidung_ta'] = addslashes($_POST['noidung_ta']);
				
		#JP-------------------	
		$data['title_ja'] = $_POST['title_ja'];
		$data['keywords_ja'] = $_POST['keywords_ja'];
		$data['description_ja'] = $_POST['description_ja'];
		$data['ten_ja'] = $_POST['ten_ja'];
		$data['mota_ja'] = $_POST['mota_ja'];
		$data['noidung_ja'] = addslashes($_POST['noidung_ja']);
		
		#Chung------------------------
		
		$data['toado'] = $_POST['toado'];
		$data['tenkhongdau'] = changeTitle($_POST['ten_vi']);
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaytao'] = time();
		
		$d->setTable('chinhanh');
		if($d->insert($data))
			redirect("index.php?com=chinhanh&act=man");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=chinhanh&act=man");
	}
}

function delete_item(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		
		$d->reset();
		$sql = "select * from #_chinhanh where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_tintuc.$row['photo']);
				delete_file(_upload_tintuc.$row['thumb']);
			}
			$sql = "delete from #_chinhanh where id='".$id."'";
			$d->query($sql);
		}
		
		if($d->query($sql))
			redirect("index.php?com=chinhanh&act=man");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=chinhanh&act=man");
	}elseif(isset($_GET['listid'])){
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$d->reset();
			$sql = "delete from #_chinhanh where id='".$id."'";
			$d->query($sql);
		}
		redirect("index.php?com=chinhanh&act=man".$id_catt."");
	}
}

?>