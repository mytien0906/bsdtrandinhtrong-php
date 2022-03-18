<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

switch($act){
	case "man":
		get_items();
		$template = "coupon/items";
		break;
	case "add":
		$template = "coupon/item_add";
		break;
	case "edit":		
		get_item();		
		$template = "coupon/item_add";
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
			$result.=mt_rand($min,$max);
		}
		return $result;	
	}


function get_items(){
	global $d, $items, $paging;
	
	if(@$_REQUEST['tinhtrang']!='')
	{
	$id_up = @$_REQUEST['tinhtrang'];
	$sql_sp = "SELECT id,tinhtrang FROM table_coupon where id='".$id_up."' ";
	$d->query($sql_sp);
	$cats= $d->result_array();
	$hienthi=$cats[0]['tinhtrang'];
	if($hienthi==0)
	{
	$sqlUPDATE_ORDER = "UPDATE table_coupon SET tinhtrang =1 WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	else
	{
	$sqlUPDATE_ORDER = "UPDATE table_coupon SET tinhtrang =0  WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");

	}	
	}
	
	$sql = "select * from #_coupon ";
	$sql.=" order by id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=coupon&act=man";
	$maxR=20;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_item(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=coupon&act=man");
	
	$sql = "select * from #_coupon where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=coupon&act=man");
	$item = $d->fetch_array();
}

function save_item(){
	global $d;
	$file_name=fns_Rand_digit(0,9,8);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=coupon&act=man");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
		$id =  themdau($_POST['id']);
		
		$data['phantram'] = (int)$_POST['phantram'];
		$data['loai'] = (int)$_POST['loai'];
		
		$d->setTable('coupon');
		$d->setWhere('id', $id);
		if($d->update($data))
				redirect("index.php?com=coupon&act=man");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=coupon&act=man");
	}else{
		$nm=(int)$_REQUEST['nm'];
		for($i=0;$i<$nm;$i++)
		{
			if((int)$_POST['phantram']>0)
			{
				$data['phantram'] = (int)$_POST['phantram'];		
				$data['loai'] = (int)$_POST['loai'];
				$data['batdau'] = strtotime($_POST['batdau']);
				$data['ketthuc'] = strtotime($_POST['ketthuc']);
				$data['ma'] = $_POST['ma'.$i];
				$data['tinhtrang'] = 0;
				$d->setTable('coupon');
				$d->insert($data);
			}
		}
		redirect("index.php?com=coupon&act=man");
	}
}

function delete_item(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		
		$d->reset();
		$sql = "delete from #_coupon where id='".$id."'";
		
		if($d->query($sql))
			redirect("index.php?com=coupon&act=man");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=coupon&act=man");
	}elseif(isset($_GET['listid'])){
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$d->reset();
			$sql = "delete from #_coupon where id='".$id."'";
			$d->query($sql);
		}
		redirect("index.php?com=coupon&act=man".$id_catt."");
	}
}
?>