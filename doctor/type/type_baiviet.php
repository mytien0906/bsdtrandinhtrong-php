<?php
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";
	switch ($com) {
		case "baiviet":
		  	switch ($type) {
		  		case 'san-pham':
				  	@define ('_title', "Sản phẩm");
				  	@define ('_title_dm', "Sản phẩm");

				  	$config_pr['title'] = 'Danh sách '._title_dm;
				  	$config_pr['full'] = false;
				  	$config_pr['img'] = true;
				  	$config_pr['img-width'] = 412;
				  	$config_pr['img-height'] = 525;
				  	$config_pr['img-ratio'] = 1;
				  	$config_pr['img-gallery'] = true;
				  	$config_pr['noibat'] = true;
				  	$config_pr['moinhat'] = true;
				  	$config_pr['mota'] = true;
				  	$config_pr['mota-ckeditor'] = false;
				  	$config_pr['noidung'] = true;
				  	$config_pr['noidung-ckeditor'] = true;
				  	$config_pr['seo'] = true;
				  	$config_pr['tag'] = false;
				  	$config_pr['gia'] = true;
				  	$config_pr['giacu'] = true;
				  	
				  	$cap1 = true;
					  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
					  	$config_cap1['full'] = true;
					  	$config_cap1['img'] = false;
					  	$config_cap1['img-width'] = 300;
					  	$config_cap1['img-height'] = 300;
					  	$config_cap1['img-ratio'] = 2;
					  	$config_cap1['mota'] = true;
					  	$config_cap1['seo'] = true;
					  	$config_cap1['img-qc'] = true;
					  	$config_cap1['img-qc-width'] = 1200;
					  	$config_cap1['img-qc-height'] = 300;
					  	$config_cap1['img-qc-ratio'] = 1;
					  	$config_cap1['noibat'] = true;
					  	$config_cap1['checkgia'] = true;

				  	$cap2 = true;
					  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
					  	$config_cap2['full'] = true;
					  	$config_cap2['img'] = false;
					  	$config_cap2['img-width'] = 300;
					  	$config_cap2['img-height'] = 300;
					  	$config_cap2['img-ratio'] = 2;
					  	$config_cap2['mota'] = false;
					  	$config_cap2['seo'] = true;
					  	$config_cap2['img-qc'] = false;

				  	$cap3 = true;
					  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
					  	$config_cap3['full'] = true;
					  	$config_cap3['img'] = false;
					  	$config_cap3['img-width'] = 300;
					  	$config_cap3['img-height'] = 300;
					  	$config_cap3['img-ratio'] = 2;
					  	$config_cap3['mota'] = false;
					  	$config_cap3['seo'] = true;
					  	$config_cap3['img-qc'] = false;

				  	break;
										
					case 'ky-gui':
					  	@define ('_title', "Ký gửi");
					  	@define ('_title_dm', "Ký gửi");

					  	$config_pr['title'] = 'Danh sách '._title_dm;
					  	$config_pr['full'] = false;
					  	$config_pr['img'] = true;
					  	$config_pr['img-width'] = 412;
					  	$config_pr['img-height'] = 525;
					  	$config_pr['img-ratio'] = 1;
					  	$config_pr['img-gallery'] = true;
					  	$config_pr['noibat'] = true;
					  	$config_pr['moinhat'] = false;
					  	$config_pr['mota'] = true;
					  	$config_pr['mota-ckeditor'] = false;
					  	$config_pr['noidung'] = true;
					  	$config_pr['noidung-ckeditor'] = true;
					  	$config_pr['seo'] = true;
					  	$config_pr['tag'] = false;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['gia'] = false;

					  	$cap1 = false;
						  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
						  	$config_cap1['full'] = true;
						  	$config_cap1['img'] = false;
						  	$config_cap1['img-width'] = 300;
						  	$config_cap1['img-height'] = 300;
						  	$config_cap1['img-ratio'] = 2;
						  	$config_cap1['mota'] = false;
						  	$config_cap1['seo'] = true;
						  	$config_cap1['img-qc'] = false;
						  	$config_cap1['img-qc-width'] = 300;
						  	$config_cap1['img-qc-height'] = 300;
						  	$config_cap1['img-qc-ratio'] = 2;
						  	$config_cap1['noibat'] = false;
						  	$config_cap1['checkgia'] = false;

					  	$cap2 = false;
						  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
						  	$config_cap2['full'] = true;
						  	$config_cap2['img'] = true;
						  	$config_cap2['img-width'] = 300;
						  	$config_cap2['img-height'] = 300;
						  	$config_cap2['img-ratio'] = 2;
						  	$config_cap2['mota'] = false;
						  	$config_cap2['seo'] = true;
						  	$config_cap2['img-qc'] = false;

					  	$cap3 = false;
						  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
						  	$config_cap3['full'] = true;
						  	$config_cap3['img'] = true;
						  	$config_cap3['img-width'] = 300;
						  	$config_cap3['img-height'] = 300;
						  	$config_cap3['img-ratio'] = 2;
						  	$config_cap3['mota'] = false;
						  	$config_cap3['seo'] = true;
						  	$config_cap3['img-qc'] = false;

					  	break;
					
			  		case 'tin-tuc':
					  	@define ('_title', "Tin tức - thời sự");
					  	@define ('_title_dm', "tin tức - thời sự");

					  	$config_pr['title'] = 'Danh sách '._title_dm;
					  	$config_pr['full'] = false;
					  	$config_pr['img'] = true;
					  	$config_pr['img-width'] = 300;
					  	$config_pr['img-height'] = 300;
					  	$config_pr['img-ratio'] = 1;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['noibat'] = true;
					  	$config_pr['moinhat'] = false;
					  	$config_pr['mota'] = true;
					  	$config_pr['mota-ckeditor'] = false;
					  	$config_pr['noidung'] = true;
					  	$config_pr['noidung-ckeditor'] = true;
					  	$config_pr['seo'] = true;
					  	$config_pr['tag'] = false;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['gia'] = false;

					  	$cap1 = false;
						  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
						  	$config_cap1['full'] = true;
						  	$config_cap1['img'] = false;
						  	$config_cap1['img-width'] = 300;
						  	$config_cap1['img-height'] = 300;
						  	$config_cap1['img-ratio'] = 2;
						  	$config_cap1['mota'] = false;
						  	$config_cap1['seo'] = true;
						  	$config_cap1['img-qc'] = false;
						  	$config_cap1['img-qc-width'] = 300;
						  	$config_cap1['img-qc-height'] = 300;
						  	$config_cap1['img-qc-ratio'] = 2;
						  	$config_cap1['noibat'] = true;
						  	$config_cap1['checkgia'] = false;

					  	$cap2 = false;
						  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
						  	$config_cap2['full'] = true;
						  	$config_cap2['img'] = true;
						  	$config_cap2['img-width'] = 300;
						  	$config_cap2['img-height'] = 300;
						  	$config_cap2['img-ratio'] = 2;
						  	$config_cap2['mota'] = false;
						  	$config_cap2['seo'] = true;
						  	$config_cap2['img-qc'] = false;

					  	$cap3 = false;
						  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
						  	$config_cap3['full'] = true;
						  	$config_cap3['img'] = true;
						  	$config_cap3['img-width'] = 300;
						  	$config_cap3['img-height'] = 300;
						  	$config_cap3['img-ratio'] = 2;
						  	$config_cap3['mota'] = false;
						  	$config_cap3['seo'] = true;
						  	$config_cap3['img-qc'] = false;

					  	break;

			  		default:
			  			@define ('_title', "Bài viết");
					  	@define ('_title_dm', "bài viết");

					  	$config_pr['title'] = 'Danh sách '._title_dm;
					  	$config_pr['full'] = false;
					  	$config_pr['img'] = true;
					  	$config_pr['img-width'] = 300;
					  	$config_pr['img-height'] = 300;
					  	$config_pr['img-ratio'] = 2;
					  	$config_pr['img-gallery'] = true;
					  	$config_pr['noibat'] = false;
					  	$config_pr['moinhat'] = false;
					  	$config_pr['mota'] = true;
					  	$config_pr['mota-ckeditor'] = true;
					  	$config_pr['noidung'] = true;
					  	$config_pr['noidung-ckeditor'] = true;
					  	$config_pr['seo'] = true;
					  	$config_pr['tag'] = false;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['gia'] = false;

					  	$cap1 = false;
						  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
						  	$config_cap1['full'] = true;
						  	$config_cap1['img'] = true;
						  	$config_cap1['img-width'] = 300;
						  	$config_cap1['img-height'] = 300;
						  	$config_cap1['img-ratio'] = 2;
						  	$config_cap1['mota'] = false;
						  	$config_cap1['seo'] = true;
						  	$config_cap1['img-qc'] = false;
						  	$config_cap1['img-qc-width'] = 300;
						  	$config_cap1['img-qc-height'] = 300;
						  	$config_cap1['img-qc-ratio'] = 2;
						  	$config_cap1['noibat'] = false;
						  	$config_cap1['checkgia'] = false;

					  	$cap2 = false;
						  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
						  	$config_cap2['full'] = true;
						  	$config_cap2['img'] = true;
						  	$config_cap2['img-width'] = 300;
						  	$config_cap2['img-height'] = 300;
						  	$config_cap2['img-ratio'] = 2;
						  	$config_cap2['mota'] = false;
						  	$config_cap2['seo'] = true;
						  	$config_cap2['img-qc'] = false;

					  	$cap3 = false;
						  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
						  	$config_cap3['full'] = true;
						  	$config_cap3['img'] = true;
						  	$config_cap3['img-width'] = 300;
						  	$config_cap3['img-height'] = 300;
						  	$config_cap3['img-ratio'] = 2;
						  	$config_cap3['mota'] = false;
						  	$config_cap3['seo'] = true;
						  	$config_cap3['img-qc'] = false;

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
