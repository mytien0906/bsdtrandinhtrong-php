<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$urldanhmuc ="";

$id=$_REQUEST['id'];
switch($act){

	case "man":
		get_items();
		$template = "thanhvien/items";
		break;
	case "add":		
		$template = "thanhvien/item_add";
		break;
	case "edit":		
		get_item();
		$template = "thanhvien/item_add";
		break;
	case "save":
		save_item();
		break;
	case "delete":
		delete_item();
		break;
	
	## Danh sach nguoi da gioi thieu
	case "gioithieu":
		get_dsgioithieu();
		$template = "thanhvien/gioithieu";
		break;
	
	#============================================================
	default:
		$template = "index";
}

#====================================
function check_user($id,$user)
{
	global $d;
	$d->reset();
	$sql="select id from #_thanhvien where username='$user'";	
	$d->query($sql);
	$result=$d->fetch_array();
	if($result['id']!="" && $result['id']!=$id)
	{
		return 1;	
	}
	return 0;
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
	global $d, $items, $paging,$urldanhmuc;
	
	#----------------------------------------------------------------------------------------
	if($_REQUEST['hienthi']!='')
	{
	$id_up = $_REQUEST['hienthi'];
	$sql_sp = "SELECT id,hienthi FROM table_thanhvien where id='".$id_up."' ";
	$d->query($sql_sp);
	$cats= $d->result_array();
	$hienthi=$cats[0]['hienthi'];
	if($hienthi==0)
	{
	$sqlUPDATE_ORDER = "UPDATE table_thanhvien SET hienthi =1 WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	else
	{
	$sqlUPDATE_ORDER = "UPDATE table_thanhvien SET hienthi =0  WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}	
	}
	
	#----------------------------------------------------------------------------------------
	if($_REQUEST['vip']!='')
	{
	$id_up = $_REQUEST['vip'];
	$sql_sp = "SELECT id,vip FROM table_thanhvien where id='".$id_up."' ";
	$d->query($sql_sp);
	$cats= $d->result_array();
	$hienthi=$cats[0]['vip'];
	if($hienthi==0)
	{
	$sqlUPDATE_ORDER = "UPDATE table_thanhvien SET vip =1 WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	else
	{
	$sqlUPDATE_ORDER = "UPDATE table_thanhvien SET vip =0  WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}	
	}
	
	#-------------------------------------------------------------------------------
	$sql = "select * from #_thanhvien where username!=''";	
	
	if($_REQUEST['type']!='')
	{
		$type=(int)$_REQUEST['type'];
		if($type==0)
		{
			$sql.=" and type=0";	
		}
		else
		{
			$sql.=" and type=1";	
		}
		
	}
	
	if($_REQUEST['keyword']!='')
	{
	$keyword=addslashes($_REQUEST['keyword']);
	$sql.=" and ten LIKE '%$keyword%'";
	}
	$sql.=" order by id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=thanhvien&act=man".$urldanhmuc;
	$maxR=20;
	$maxP=20;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_dsgioithieu(){
	global $d, $items, $paging,$urldanhmuc;
	
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=thanhvien&act=man");	
	
	$sql = "select * from #_thanhvien where username!='' and id_gioithieu=$id order by id desc";	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=thanhvien&act=man".$urldanhmuc;
	$maxR=20;
	$maxP=20;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}


function get_item(){
	global $d, $item,$ds_tags;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=thanhvien&act=man");	
	$sql = "select * from #_thanhvien where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=thanhvien&act=man");
	$item = $d->fetch_array();	
}

function save_item(){
	global $d;
	$file_name=changeTitle($_POST['ten']).'-'.$_POST['mssv'];
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=thanhvien&act=man");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
		$id =  themdau($_POST['id']);
		if(check_user($id,$_POST['username'])==1)
		{
			transfer("Tên đăng nhập đã tồn tại. Vui lòng chọn tên đăng nhập khác!", "index.php?com=thanhvien&act=add");		
		}
		
		$data['username'] = $_POST['username'];	
		if($_POST['password']!="")
		{
			$data['password'] = md5($_POST['password']);	
		}
		
		$data['ten'] = $_POST['ten'];	
		$data['email'] = $_POST['email'];	
		$data['linhvuc'] = $_POST['linhvuc'];
		$data['diachi'] = $_POST['diachi'];	
		$data['dienthoai'] = $_POST['dienthoai'];	
		$data['type'] = $_POST['type'];	
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$d->setTable('thanhvien');
		$d->setWhere('id', $id);
		if($d->update($data))
		{
			redirect("index.php?com=thanhvien&act=man&curPage=".$_REQUEST['curPage']."");
		}
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=thanhvien&act=man");
	}else{
		
		if(check_user("",$_POST['username'])==1)
		{
			transfer("Tên đăng nhập đã tồn tại. Vui lòng chọn tên đăng nhập khác!", "index.php?com=thanhvien&act=add");		
		}
		
		$data['username'] = $_POST['username'];	
		$data['password'] = md5($_POST['password']);	
		$data['ten'] = $_POST['ten'];	
		$data['email'] = $_POST['email'];	
		$data['linhvuc'] = $_POST['linhvuc'];
		$data['diachi'] = $_POST['diachi'];	
		$data['dienthoai'] = $_POST['dienthoai'];	
		$data['type'] = $_POST['type'];	
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$d->setTable('thanhvien');
		if($d->insert($data))
		{	
			redirect("index.php?com=thanhvien&act=man");
		}
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=thanhvien&act=man");
	}
}

function delete_item(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "delete from #_thanhvien where id='".$id."'";
		$d->query($sql);
		if($d->query($sql))
			redirect("index.php?com=thanhvien&act=man".$id_catt."");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=thanhvien&act=man");
	}elseif (isset($_GET['listid'])==true){
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);	
			$d->reset();
			$sql = "delete from #_thanhvien where id='".$id."'";
			$d->query($sql);
			
		} redirect("index.php?com=thanhvien&act=man");} 
		else transfer("Không nhận được dữ liệu", "index.php?com=thanhvien&act=man");
}
?>