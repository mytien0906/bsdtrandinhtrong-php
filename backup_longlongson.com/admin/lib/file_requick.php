<?php
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$d = new database($config['database']);
	
	$d->reset();
	$sql_setting = "select * from #_setting limit 0,1";
	$d->query($sql_setting);
	$row_setting= $d->fetch_array();
	switch($com){
		case 'thong-tin-tai-khoan':
			$source = "thongtintaikhoan";
			$template ="thongtintaikhoan";
		break;	

		case 'dang-xuat':
			$source = "dangxuat";
		break;	

		case 'gioi-thieu':
			$source = "tintuc";
			$template =isset($_GET['id']) ? "tintuc_detail" : "tintuc";
			$type='gioithieu';
			$title_tcat='Giới thiệu';
		break;	

		case 'tin-tuc':
			$source = "tintuc";
			$template =isset($_GET['id']) ? "tintuc_detail" : "tintuc";
			$type='tintuc';
			$title_tcat='Tin tức';
		break;	

		case 'san-pham':
			$source = "tintuc";
			$template =isset($_GET['id']) ? "tintuc_detail" : "tintuc";
			$type='sanpham';
			$title_tcat='Sản phẩm';
		break;	

		case 'dich-vu':
			$source = "tintuc";
			$template =isset($_GET['id']) ? "tintuc_detail" : "tintuc";
			$type='dichvu';
			$title_tcat='Dịch vụ';
		break;	

		case 'tuyen-dung':
			$source = "tintuc";
			$template =isset($_GET['id']) ? "tintuc_detail" : "tintuc";
			$type='tuyendung';
			$title_tcat='Tuyển dụng';
		break;	

		case 'san-pham':
			$source = "product";
			$template =isset($_GET['id']) ? "product_detail" : "product";
			$type='product';
			$title_tcat='Sản phẩm';
		break;	

		case 'san-pham-moi':
			$source = "sanpham";
			$template ="product";
			$type='product';
			$noibat='moi';
			$com='san-pham';
			$title_tcat='Sản phẩm mới';
		break;	

		case 'san-pham-khuyen-mai':
			$source = "sanpham";
			$template ="product";
			$type='product';
			$noibat='khuyenmai';
			$com='san-pham';
			$title_tcat='Sản phẩm khuyến mãi';
		break;	

		case 'lien-he':
			$source = "contact";
			$template ="contact";
		break;	

		case 'nop-ho-so-truc-tuyen':
			$source = "nophosotructuyen";
			$template ="nophosotructuyen";
		break;	

		case 'thanh-toan':
			$source = "thanhtoan_tt";
			$template ="thanhtoan_tt";
		break;	

		case 'gio-hang':
			$template ="giohang_tt";
		break;	

		case 'tim-kiem':
			$source = "search";
			$template ="search";
		break;	
		
		case 'ngonngu':
			if(isset($_GET['lang']))
			{
				switch($_GET['lang'])
					{
					case 'vi':
						$_SESSION['lang'] = 'vi';
						break;
					case 'en':
						$_SESSION['lang'] = 'en';
						break;
					case 'ta':
						$_SESSION['lang'] = 'ta';
						break;
					default: 
						$_SESSION['lang'] = 'vi';
						break;
					}
			}
			else{
				$_SESSION['lang'] = 'vi';
			}
			header('Location:'.$_SERVER['HTTP_REFERER']);
			break;
		
		case '':
			$source = "index";
			$template ="index";				
		break;	
		
		case 'index':
			$source = "index";
			$template ="index";				
		break;	
			
		default: 
			$template = "404";
			break;
	}
	
	if($source!="") include _source.$source.".php";
	
	if($_REQUEST['com']=='logout')
	{
	session_unregister($login_name);
	header("Location:index.php");
	}		
?>