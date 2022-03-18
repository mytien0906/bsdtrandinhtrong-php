<?php
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$d = new database($config['database']);

	$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
	if ($page <= 0) $page = 1;

	$d->reset();
	$sql_setting = "select * from #_setting limit 0,1";
	$d->query($sql_setting);
	$row_setting= $d->fetch_array();
	switch($com){
		case 'all':
			$idl =  addslashes($_GET['idl']);
			switch ($idl) {
				case 'lien-he':
					$title_cat = 'Liên hệ với chúng tôi';
					$title = 'Liên hệ với chúng tôi';
					$bread = 'Liên hệ với chúng tôi';
					$source = "contact";
					$template = "contact";
					break;
				case 'gioi-thieu':
					$title_cat = 'Giới thiệu chung';
					$title = 'Giới thiệu chung';
					$bread = 'Giới thiệu chung';
					$type_com = 'gioi-thieu';
					$source = "baiviet";
					$template = "baiviet";
					break;
				case 'huong-dan-dang-tin':
					$title_cat = 'Hướng dẫn đăng tin';
					$title = 'Hướng dẫn đăng tin';
					$bread = 'Hướng dẫn đăng tin';
					$type_com = 'huong-dan-dang-tin';
					$source = "baiviet";
					$template = "baiviet";
					break;
				case 'dieu-khoan-su-dung':
					$title_cat = 'Điều khoản sử dụng';
					$title = 'Điều khoản sử dụng';
					$bread = 'Điều khoản sử dụng';
					$type_com = 'dieu-khoan-su-dung';
					$source = "baiviet";
					$template = "baiviet";
					break;
				case 'chinh-sach-bao-mat':
					$title_cat = 'Chính sách bảo mật';
					$title = 'Chính sách bảo mật';
					$bread = 'Chính sách bảo mật';
					$type_com = 'chinh-sach-bao-mat';
					$source = "baiviet";
					$template = "baiviet";
					break;
				case 'bat-dong=san':
					$title_cat = 'Bất động sản';
					$title = 'Bất động sản';
					$bread = 'Bất động sản';
					$type_com = 'san-pham';
					$source = "newsall";
					$template =isset($_GET['id']) ? "product_detail" : "product";
					break;
				case 'tin-tuc':
					$title_cat = 'Tin tức';
					$title = 'Tin tức';
					$bread = 'Tin tức';
					$type_com = 'tin-tuc';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'chinh-sach':
					$title_cat = 'Chính sách';
					$title = 'Chính sách';
					$bread = 'Chính sách';
					$type_com = 'chinh-sach';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'tuyen-dung':
					$title_cat = 'Tuyển dụng';
					$title = 'Tuyển dụng';
					$bread = 'Tuyển dụng';
					$type_com = 'tuyen-dung';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'ky-gui':
					$title_cat = 'Ký gửi';
					$title = 'Ký gửi';
					$bread = 'Ký gửi';
					$type_com = 'ky-gui';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'hoi-dap':
					$title_cat = 'Hỏi đáp';
					$title = 'Hỏi đáp';
					$bread = 'Hỏi đáp';
					$type_com = 'hoi-dap';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
			
				case 'tra-cuu-cung-menh':
					$title_cat = 'Tra cứu cung mệnh';
					$title = 'Tra cứu cung mệnh';
					$bread = 'Tra cứu cung mệnh';
					$type_com = 'tra-cuu-cung-menh';
					$source = "baiviet";
					$template = "tracuucungmenh";
					break;
				default:
					$title_cat = 'Bài viết';
					$title = 'Bài viết';
					$bread = 'Bài viết';
					$type_com = 'san-pham';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
			}
			break;
		case 'cua-hang':
			$title_cat = 'Cửa hàng';
			$title = 'Cửa hàng';
			$bread = 'Cửa hàng';
			$type_com = 'cua-hang';
			$source = "cuahang";
			$template = "product";
			break;
		case 'khu-vuc':
			$title_cat = 'Khu vực';
			$title = 'Khu vực';
			$bread = 'Khu vực';
			$type_com = 'khu-vuc';
			$source = "khuvuc";
			$template = "product";
			break;
		case 'gio-hang':
			$title_cat = 'Giỏ hàng';
			$title = 'Giỏ hàng';
			$bread = 'Giỏ hàng';
			$source = "giohang";
			$template = "giohang";
			break;
		case 'thanh-toan':
			$title_cat = 'Thanh toán đơn hàng';
			$title = 'Thanh toán đơn hàng';
			$bread = 'Thanh toán đơn hàng';
			$source = "orders";
			$template = "orders";
			break;

		case 'khoi-nganh':
			$title_cat = 'Khối ngành cơ sở';
			$title = 'Khối ngành cơ sở';
			$bread = 'Khối ngành cơ sở';
			$type_com = 'khoi-nganh';
			$source = "newsall";
			$template =isset($_GET['id']) ? "news_detail" : "news";
			break;

	



		case 'chi-duong':
			$template = "chiduong";
			break;
		case 'mobile':
			$source = "mobile";
			break;
		case 'desktop':
			$source = "desktop";
			break;


		case 'activation':
			$source = "activation";
			break;

		case 'thu-vien-anh':
			$source = "thuvienanh";
			$template =isset($_GET['id']) ? "thuvienanh_detail" : "thuvienanh";
			break;

		case 'dang-ky':
			$title_cat = 'Đăng ký thành viên';
			$title = 'Đăng ký thành viên';
			$bread = 'Đăng ký thành viên';
			$source = "register";
			$template = "register";
			break;
		case 'dang-nhap':
			$title_cat = 'Đăng nhập';
			$title = 'Đăng nhập';
			$bread = 'Đăng nhập';
			$source = "login";
			$template = "login";
			break;

		case 'quen-mat-khau':
			$title_cat = 'Quên mật khẩu';
			$title = 'Quên mật khẩu';
			$bread = 'Quên mật khẩu';
			$source = "forgot_password";
			$template = "user/forgot_password";
			break;
		case 'thong-tin-ca-nhan':
			$title_cat = 'Thông tin cá nhân';
			$title = 'Thông tin cá nhân';
			$bread = 'Thông tin cá nhân';
			$source = "user";
			$template = "user/profile";
			break;
		case 'kiem-tra-don-hang':
			$title_cat = 'Kiểm tra đơn hàng';
			$title = 'Kiểm tra đơn hàng';
			$bread = 'Kiểm tra đơn hàng';
			$source = "user";
			$template = "user/order";
			break;
		case 'dang-tin':
			$title_cat = 'Đăng tin';
			$title = 'Đăng tin';
			$bread = 'Đăng tin';
			$source = "user";
			$template = "user/post";
			break;
		case 'quan-ly-tin-dang':
			$title_cat = 'Quản lý tin đăng';
			$title = 'Quản lý tin đăng';
			$bread = 'Quản lý tin đăng';
			$source = "user";
			$template = "user/list_post";
			break;

		case 'sua-tin-dang':
			$title_cat = 'Thay đổi tin đăng';
			$title = 'Thay đổi tin đăng';
			$bread = 'Thay đổi tin đăng';
			$source = "user";
			$template = "user/edit_post";
			break;	
		case 'xoa-tin-dang':
			$title_cat = 'Xóa tin đăng';
			$title = 'Xóa tin đăng';
			$bread = 'Xóa tin đăng';
			$source = "user";
			break;	

		case 'doi-mat-khau':
			$title_cat = 'Đổi mật khẩu';
			$title = 'Đổi mật khẩu';
			$bread = 'Đổi mật khẩu';
			$source = "user";
			$template = "user/reset_password";
			break;
		case 'dang-xuat':
			$source = "logout";
			break;
		case 'search':
			$source = "search";
			$template = "search";
			break;
		case 'tag':
			$source = "search";
			$template = "product";
			break;

		case 'ngon-ngu':
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
					default:
						$_SESSION['lang'] = 'vi';
						break;
					}
			}
			else{
				$_SESSION['lang'] = 'vi';
			}
			//redirect("http://$config_url");
			redirect($_SERVER['HTTP_REFERER']);
			break;
		default:
			$source = "index";
			$template = "index";
			break;
	}

	if($source!="") include _source.$source.".php";


	

?>
