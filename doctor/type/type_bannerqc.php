<?php
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";
	switch ($com) {
		case "bannerqc":
		  	switch ($type) {
		  		case 'logo':
				  	@define ('_title', "Logo");
				  	@define ('_title_dm', "logo");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 190;
				  	$config_info['img-height'] = 165;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = false;
				  	break;
				case 'bg_visao':
				  	@define ('_title', "Ảnh vì sao chọn chúng tôi");
				  	@define ('_title_dm', "Ảnh vì sao chọn chúng tôi");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 326;
				  	$config_info['img-height'] = 254;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = false;
				  	break;
				case 'bg_mail':
				  	@define ('_title', "Background nhận tin");
				  	@define ('_title_dm', "Background nhận tin");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 1920;
				  	$config_info['img-height'] = 354;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = false;
				  	break;
				case 'bg_footer':
				  	@define ('_title', "Background footer");
				  	@define ('_title_dm', "Background footer");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 1920;
				  	$config_info['img-height'] = 354;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = false;
				  	break;
				case 'quangcao_left':
				  	@define ('_title', "Quảng cáo trái");
				  	@define ('_title_dm', "quảng cáo trái");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 600;
				  	$config_info['img-height'] = 250;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = true;
				  	break;

				case 'quangcao_right':
				  	@define ('_title', "Quảng cáo phải");
				  	@define ('_title_dm', "quảng cáo phải");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 600;
				  	$config_info['img-height'] = 250;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = true;
				  	break;
				case 'popup':
				  	@define ('_title', "Popup");
				  	@define ('_title_dm', "popup");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 600;
				  	$config_info['img-height'] = 450;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = true;
				  	break;

				case 'top_page':
				  	@define ('_title', "Top page");
				  	@define ('_title_dm', "Top page");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 1366;
				  	$config_info['img-height'] = 170;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = false;
				  	break;

				case 'logo_footer':
				  	@define ('_title', "Logo footer");
				  	@define ('_title_dm', "logo footer");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 300;
				  	$config_info['img-height'] = 300;
				  	$config_info['img-ratio'] = 2;
				  	$config_info['link'] = true;
				  	break;
				case 'bôcngthuong':
				  	@define ('_title', "Bộ công thương");
				  	@define ('_title_dm', "Bộ công thương");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 512;
				  	$config_info['img-height'] = 120;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = true;
				  	break;

				case 'hinhdaidien':
				  	@define ('_title', "Hình share link");
				  	@define ('_title_dm', "hình share link");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 300;
				  	$config_info['img-height'] = 300;
				  	$config_info['img-ratio'] = 2;
				  	$config_info['link'] = false;
				  	break;

		  		default:
		  			@define ('_title', "Hình ảnh");
				  	@define ('_title_dm', "hình ảnh");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 300;
				  	$config_info['img-height'] = 300;
				  	$config_info['img-ratio'] = 2;
				  	$config_info['link'] = true;
		  			break;
		  	}
		  	break;

		default:
		 	@define ('_width_thumb', 100);
		  	@define ('_height_thumb', 100);
		  	@define ('_title', "Cập nhật hình ảnh");
		  	break;
	}

?>
