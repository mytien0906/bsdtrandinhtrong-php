<?php  if(!defined('_source')) die("Error");
	@$idl =  addslashes($_GET['idl']);
	switch ($idl) {
		case 'gioi-thieu':
			$bread = 'Giới thiệu';
			$type_x = 'gioi-thieu';
			break;
		case 'huong-dan-dang-tin':
			$bread = 'Hướng dẫn đăng tin';
			$type_x = 'huong-dan-dang-tin';
			break;
		case 'dieu-khoan-su-dung':
			$bread = 'Điều khoản sử dụng';
			$type_x = 'dieu-khoan-su-dung';
			break;
		case 'chinh-sach-bao-mat':
			$bread = 'Chính sách bảo mật';
			$type_x = 'chinh-sach-bao-mat';
			break;
		default:
			$bread = 'Bài viết';
			break;
	}
	
	$d->reset();
	$sql = "select ten_$lang,noidung_$lang,title,keywords,description,ngaytao from #_info where type='$type_com' ";
	$d->query($sql);
	$row_detail = $d->fetch_array();

	$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$type_x.'">'.$bread.'</a></li>
              </ul>';

	$title_bar .= $row_detail['title'];
	$keyword_bar .= $row_detail['keywords'];
	$description_bar .= $row_detail['description'];

	if($row_detail["noidung_$lang"]=="") $title_cat="Nội Dung Đang Cập Nhật...";
?>
