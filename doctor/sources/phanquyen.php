<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

switch($act){
	case "man":
		get_items();
		$template = "phanquyen/items";
		break;
	case "add":
		$template = "phanquyen/item_add";
		break;
	case "edit":
		get_item();
		$template = "phanquyen/item_add";
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

function get_items(){
	global $d, $items, $paging,$page;
	
	if($_REQUEST['vip']!='')
	{
	$id_up = $_REQUEST['vip'];
	$spdc=time();
	$sql_sp = "SELECT id,vip FROM table_phanquyen where id='".$id_up."' ";
	$d->query($sql_sp);
	$cats= $d->result_array();
	$spdc1=$cats[0]['vip'];
	if($spdc1==0)
	{
	$sqlUPDATE_ORDER = "UPDATE table_phanquyen SET vip ='".$spdc."' WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	else
	{
	$sqlUPDATE_ORDER = "UPDATE table_phanquyen SET vip =0  WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");

	}	
	}
	
	//------------------Kich Hoat-----------------------------------
	if(@$_REQUEST['hienthi']!='')
	{
	$id_up = @$_REQUEST['hienthi'];
	$sql_sp = "SELECT id,hienthi FROM table_phanquyen where id='".$id_up."' ";
	$d->query($sql_sp);
	$cats= $d->result_array();
	$hienthi=$cats[0]['hienthi'];
	//echo "id:". $spdc1;
	if($hienthi==0)
	{
	$sqlUPDATE_ORDER = "UPDATE table_phanquyen SET hienthi =1 WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	else
	{
	$sqlUPDATE_ORDER = "UPDATE table_phanquyen SET hienthi =0  WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}	
	}
	//-------------------End---------------------
	
	$per_page = 10; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;
	
	$where = " #_phanquyen order by stt ";

	$sql = "select * from $where $limit";
	$d->query($sql);
	$items = $d->result_array();

	$url = "index.php?com=phanquyen&act=man";
	$paging = pagination($where,$per_page,$page,$url);

}

function get_item(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Kh??ng nh???n ???????c d??? li???u", "index.php?com=phanquyen&act=man");
	
	$sql = "select * from #_phanquyen where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("D??? li???u kh??ng c?? th???c", "index.php?com=phanquyen&act=man");
	$item = $d->fetch_array();
}

function save_item(){
	global $d;
	
	if(empty($_POST)) transfer("Kh??ng nh???n ???????c d??? li???u", "index.php?com=phanquyen&act=man");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
		
		$data['ten'] = $_POST['ten'];
		$data['soluong'] = $_POST['soluong'];
		$data['mausac'] = $_POST['mausac'];
		if($_POST['id_list']!=''){
			$data['id_list'] = json_encode($_POST['id_list']);
		} else {
			$data['id_list'] = '';
		}
		if($_POST['id_cat']!=''){ 
			$data['id_cat'] = json_encode($_POST['id_cat']);
		} else {
			$data['id_cat'] = '';
		}
		if($_POST['id_item']!=''){
			$data['id_item'] = json_encode($_POST['id_item']);
		} else {
			$data['id_item'] = '';
		}
		
		if($_POST['xem']!=''){
		$data['xem'] = json_encode($_POST['xem']);
		} else {
			$data['xem'] = '';
		}
		if($_POST['xoa']!=''){
		$data['xoa'] = json_encode($_POST['xoa']);
		} else {
			$data['xoa'] = '';
		}
		if($_POST['sua']!=''){
		$data['sua'] = json_encode($_POST['sua']);
		} else {
			$data['sua'] = '';
		}
		if($_POST['them']!=''){
		$data['them'] = json_encode($_POST['them']);
		} else {
			$data['them'] = '';
		}
		
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaysua'] = time();
		
		$d->setTable('phanquyen');
		$d->setWhere('id', $id);
		if($d->update($data))
			transfer("D??? li???u ???? ???????c c???p nh???t", "index.php?com=phanquyen&act=man");
		else
			transfer("C???p nh???t d??? li???u b??? l???i", "index.php?com=phanquyen&act=man");
	}else{
		$data['ten'] = $_POST['ten'];
		$data['soluong'] = $_POST['soluong'];
		$data['mausac'] = $_POST['mausac'];
		if($_POST['id_list']!=''){
			$data['id_list'] = json_encode($_POST['id_list']);
		} else {
			$data['id_list'] = '';
		}
		if($_POST['id_cat']!=''){ 
			$data['id_cat'] = json_encode($_POST['id_cat']);
		} else {
			$data['id_cat'] = '';
		}
		if($_POST['id_item']!=''){
			$data['id_item'] = json_encode($_POST['id_item']);
		} else {
			$data['id_item'] = '';
		}
		
		if($_POST['xem']!=''){
		$data['xem'] = json_encode($_POST['xem']);
		} else {
			$data['xem'] = '';
		}
		if($_POST['xoa']!=''){
		$data['xoa'] = json_encode($_POST['xoa']);
		} else {
			$data['xoa'] = '';
		}
		if($_POST['sua']!=''){
		$data['sua'] = json_encode($_POST['sua']);
		} else {
			$data['sua'] = '';
		}
		if($_POST['them']!=''){
		$data['them'] = json_encode($_POST['them']);
		} else {
			$data['them'] = '';
		}
		
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaytao'] = time();
		
		$d->setTable('phanquyen');
		if($d->insert($data))
			transfer("D??? li???u ???? ???????c l??u", "index.php?com=phanquyen&act=man");
		else
			transfer("L??u d??? li???u b??? l???i", "index.php?com=phanquyen&act=man");
	}
}

function delete_item(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$sql = "delete from #_phanquyen where id='".$id."'";
		if($d->query($sql))
			transfer("D??? li???u ???? ???????c x??a", "index.php?com=phanquyen&act=man");
		else
			transfer("X??a d??? li???u b??? l???i", "index.php?com=phanquyen&act=man");
	}else transfer("Kh??ng nh???n ???????c d??? li???u", "index.php?com=phanquyen&act=man");
}


?>