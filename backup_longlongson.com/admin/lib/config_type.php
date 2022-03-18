<?php if(!defined('_lib')) die("Error");
	
	## Cac com chinh: product => dang san pham, tintuc=> dang tin tuc, baiviet=> dang 1 bai viet, page => noi dung cua trang (footer...)
	
	# Cau hinh banner
	$config['banner']['logo']=false;
	$config['banner']['photo']=true;
	$config['banner']['flash']=false;
	$config['banner']['mobile']=false;
	$config['banner']['background']=false;

	# Cau hinh background cua webiste
	$config['background']=false;

	# Cau hinh gioi thieu
	$config['type']['gioithieu']['name']='Quản lý giới thiệu';
	$config['type']['gioithieu']['com']='tintuc';
	$config['type']['gioithieu']['list']=false;
	$config['type']['gioithieu']['noibat'] = array();
	$config['type']['gioithieu']['level']=0;
	$config['type']['gioithieu']['photo']=true;
	$config['type']['gioithieu']['thumb']=true;
	$config['type']['gioithieu']['thumb_width']='180';
	$config['type']['gioithieu']['thumb_height']='130';
	$config['type']['gioithieu']['thumb_crop']='1';
	$config['type']['gioithieu']['photo_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';
	$config['type']['gioithieu']['photo_list']=false;
	$config['type']['gioithieu']['thumb_list']=false;
	$config['type']['gioithieu']['thumb_list_width']='180';
	$config['type']['gioithieu']['thumb_list_height']='130';
	$config['type']['gioithieu']['thumb_list_crop']='1';
	$config['type']['gioithieu']['photo_list_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';

	# Cau hinh du an
	$config['type']['sanpham']['name']='Quản lý sản phẩm';
	$config['type']['sanpham']['com']='tintuc';
	$config['type']['sanpham']['list']=true;
	$config['type']['sanpham']['noibat'] = array('moi' => 'Slide', 'noibat' => 'Nổi bật');
	$config['type']['sanpham']['level']=2;
	$config['type']['sanpham']['photo']=true;
	$config['type']['sanpham']['thumb']=true;
	$config['type']['sanpham']['thumb_width']='230';
	$config['type']['sanpham']['thumb_height']='150';
	$config['type']['sanpham']['thumb_crop']='1';
	$config['type']['sanpham']['photo_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';
	$config['type']['sanpham']['photo_list']=false;
	$config['type']['sanpham']['thumb_list']=false;
	$config['type']['sanpham']['thumb_list_width']='180';
	$config['type']['sanpham']['thumb_list_height']='120';
	$config['type']['sanpham']['thumb_list_crop']='1';
	$config['type']['sanpham']['photo_list_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';

	# Cau hinh du an
	$config['type']['dichvu']['name']='Quản lý dịch vụ';
	$config['type']['dichvu']['com']='tintuc';
	$config['type']['dichvu']['list']=true;
	$config['type']['dichvu']['noibat'] = array();
	$config['type']['dichvu']['level']=2;
	$config['type']['dichvu']['photo']=true;
	$config['type']['dichvu']['thumb']=true;
	$config['type']['dichvu']['thumb_width']='230';
	$config['type']['dichvu']['thumb_height']='150';
	$config['type']['dichvu']['thumb_crop']='1';
	$config['type']['dichvu']['photo_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';
	$config['type']['dichvu']['photo_list']=false;
	$config['type']['dichvu']['thumb_list']=false;
	$config['type']['dichvu']['thumb_list_width']='180';
	$config['type']['dichvu']['thumb_list_height']='120';
	$config['type']['dichvu']['thumb_list_crop']='1';
	$config['type']['dichvu']['photo_list_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';

	# Cau hinh tin tuc 
	$config['type']['tintuc']['name']='Quản lý tin tức';
	$config['type']['tintuc']['com']='tintuc';
	$config['type']['tintuc']['list']=true;
	$config['type']['tintuc']['noibat'] = array('noibat' => 'Nổi bật');
	$config['type']['tintuc']['level']=2;
	$config['type']['tintuc']['photo']=true;
	$config['type']['tintuc']['thumb']=true;
	$config['type']['tintuc']['thumb_width']='180';
	$config['type']['tintuc']['thumb_height']='130';
	$config['type']['tintuc']['thumb_crop']='1';
	$config['type']['tintuc']['photo_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';
	$config['type']['tintuc']['photo_list']=false;
	$config['type']['tintuc']['thumb_list']=false;
	$config['type']['tintuc']['thumb_list_width']='180';
	$config['type']['tintuc']['thumb_list_height']='130';
	$config['type']['tintuc']['thumb_list_crop']='1';
	$config['type']['tintuc']['photo_list_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';

	# Cau hinh tuyen dung
	$config['type']['tuyendung']['name']='Quản lý tuyển dụng';
	$config['type']['tuyendung']['com']='tintuc';
	$config['type']['tuyendung']['list']=false;
	$config['type']['tuyendung']['noibat'] = array('noibat' => 'Nổi bật');
	$config['type']['tuyendung']['level']=0;
	$config['type']['tuyendung']['photo']=true;
	$config['type']['tuyendung']['thumb']=true;
	$config['type']['tuyendung']['thumb_width']='180';
	$config['type']['tuyendung']['thumb_height']='130';
	$config['type']['tuyendung']['thumb_crop']='1';
	$config['type']['tuyendung']['photo_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';
	$config['type']['tuyendung']['photo_list']=false;
	$config['type']['tuyendung']['thumb_list']=false;
	$config['type']['tuyendung']['thumb_list_width']='180';
	$config['type']['tuyendung']['thumb_list_height']='130';
	$config['type']['tuyendung']['thumb_list_crop']='1';
	$config['type']['tuyendung']['photo_list_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';

	// ## Cau hinh hien thi bai viet va page tren menu
	$config['show']['baiviet']=true;
	$config['show']['page']=true;
	$config['show']['photo']=true;

	# Cau hinh lien he
	$config['type']['lienhe']['name']='Cập nhật thông tin liên hệ';
	$config['type']['lienhe']['com']='baiviet';

	# Cau hinh footer
	$config['type']['footer']['name']='Cập nhật footer';
	$config['type']['footer']['com']='page';

	# Cau hinh slider
	$config['type']['bannert']['name']='Quản lý banner top';
	$config['type']['bannert']['com']='photo';
	$config['type']['bannert']['link']=true;
	$config['type']['bannert']['ten']=true;
	$config['type']['bannert']['thumb_width']='1366';
	$config['type']['bannert']['thumb_height']='150';
	$config['type']['bannert']['thumb_crop']='1';
	$config['type']['bannert']['photo_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';

	# Cau hinh slider
	$config['type']['slider']['name']='Quản lý slider';
	$config['type']['slider']['com']='photo';
	$config['type']['slider']['link']=true;
	$config['type']['slider']['ten']=false;
	$config['type']['slider']['thumb_width']='1366';
	$config['type']['slider']['thumb_height']='580';
	$config['type']['slider']['thumb_crop']='1';
	$config['type']['slider']['photo_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';

	# Cau hinh mxh
	$config['type']['mxh']['name']='Quản lý mxh';
	$config['type']['mxh']['com']='photo';
	$config['type']['mxh']['link']=true;
	$config['type']['mxh']['ten']=false;
	$config['type']['mxh']['thumb_width']='26';
	$config['type']['mxh']['thumb_height']='26';
	$config['type']['mxh']['thumb_crop']='2';
	$config['type']['mxh']['photo_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';

	# Cau hinh mxh
	$config['type']['popup']['name']='Quản lý popup';
	$config['type']['popup']['com']='photo';
	$config['type']['popup']['link']=true;
	$config['type']['popup']['ten']=false;
	$config['type']['popup']['thumb_width']='600';
	$config['type']['popup']['thumb_height']='400';
	$config['type']['popup']['thumb_crop']='1';
	$config['type']['popup']['photo_extension']='jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';


?>