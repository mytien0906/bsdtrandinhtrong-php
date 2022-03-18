<?php
if(!isset($_SESSION['logging'])){transfer("Bạn chưa đăng nhập vào tài khoản của mình", "http://$config_url/dang-nhap.html");}

$d->reset();
$sql_user = "select * from #_thanhvien where id='".$_SESSION['logging']['id']."'";
$d->query($sql_user);
$user = $d->fetch_array();

switch ($com) {
	case 'thong-tin-ca-nhan':
		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
		info();
		break;
	case 'dang-tin':
		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
		post();
		break;
	case 'quan-ly-tin-dang':
		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
		list_post();
		break;
	case 'sua-tin-dang':
		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
		edit_post();
		break;
	case 'xoa-tin-dang':
		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
		delete_post();
		break;
		
	case 'kiem-tra-don-hang':
		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
		order();
		break;
	case 'doi-mat-khau':
		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
		update();
		break;
	default:
		break;
}
function list_post(){
	global $d,$tindang,$status,$message;
	if(!empty($_POST)){
		$d->reset();
		$sql_user = "select * from #_baiviet where id_user='".$_SESSION['logging']['id']."' and masp='".(string)$_POST['tindang']."' or ten_vi like '%".(string)$_POST['tindang']."%'";
		$d->query($sql_user);
		$tindang = $d->result_array();
		if(count($tindang)>0){
			$status = 0;
			$message = "Tìm thấy tin đăng có từ khóa: ". $_POST['tindang'];
		}else{
			$status = 1;
			$message = "Không tìm thấy tin đăng có từ khóa: ". $_POST['tindang'];
		}
	}else{
		$d->reset();
		$sql_user = "select * from #_baiviet where id_user='".$_SESSION['logging']['id']."' order by id desc";
		$d->query($sql_user);
		$tindang = $d->result_array();
	}
}
function delete_post(){
	global $d;
	$id =  themdau($_GET['id']);

	$d->reset();
	$sql_user = "select * from #_baiviet where id_user='".$_SESSION['logging']['id']."' and id='".$id."' order by id desc";
	$d->query($sql_user);
	$tindang = $d->result_array();

	if(count($tindang)>0){
		$d->reset();
		$sql = "select id,photo,thumb from #_baiviet_photo where id_baiviet='".$id."'";
		$d->query($sql);
		$photo_lq = $d->result_array();
		if(count($photo_lq)>0){
			for($i=0;$i<count($photo_lq);$i++){
				delete_file(_upload_baiviet_l.$photo_lq[$i]['photo']);
				delete_file(_upload_baiviet_l.$photo_lq[$i]['thumb']);
			}
		}
		$sql = "delete from #_baiviet_photo where id_baiviet='".$id."'";
		$d->query($sql);
		$d->reset();
		$sql = "select id,photo,thumb from #_baiviet where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_baiviet_l.$row['photo']);
				delete_file(_upload_baiviet_l.$row['thumb']);
			}
			$sql = "delete from #_baiviet where id='".$id."'";
			$d->query($sql);
		}
		if($d->query($sql)){
			$message = "Bạn đã xóa tin thành công.";
			transfer($message,'quan-ly-tin-dang.html');
		}else{
			$message = "Bạn đã xóa thất bại.";
			transfer($message,'quan-ly-tin-dang.html');
		}
	}else{
		$message = "Bạn không có quyền để xóa tin đăng này.";
		transfer($message,'quan-ly-tin-dang.html');
	}

	
}
function edit_post(){
	global $d,$user,$message,$status,$tindang_detail,$tindang_photo;
	$id = (int)$_GET['id'];
	if(empty($_POST)){
		$d->reset();
		$sql_user = "select * from #_baiviet where id_user='".$_SESSION['logging']['id']."' and id='".$id."' order by id desc";
		$d->query($sql_user);
		$tindang_detail = $d->fetch_array();

		$d->reset();
		$sql_photo = "select * from #_baiviet_photo where hienthi=1 and id_baiviet='".$id."' order by id desc";
		$d->query($sql_photo);
		$tindang_photo = $d->result_array();
	}else{
		$form = $_POST['data'];
		
		// if($_FILES['files']['name'][0]!=''){
		// 	$file['name'] = $_FILES['files']['name'][0];
		// 	$file['type'] = $_FILES['files']['type'][0];
		// 	$file['tmp_name'] = $_FILES['files']['tmp_name'][0];
		// 	$file['error'] = $_FILES['files']['error'][0];
		// 	$file['size'] = $_FILES['files']['size'][0];
		//     $file_name = images_name($_FILES['files']['name'][0]);
		// 	$photo = upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', _upload_baiviet_l,$file_name);
		// 	$data['photo'] = $photo;
		// 	$data['thumb'] = create_thumb($data['photo'], 400, 400,_upload_baiviet_l,$file_name,1);
		// }
		$data['id_list'] = (int)$form['id_list'];
		$data['id_cat'] = (int)$form['id_cat'];
		$data['id_item'] = (int)$form['id_item'];
		$data['id_type'] = (int)$form['id_type'];
		$data['id_status'] = (int)$form['id_status'];
		$data['id_city'] = (int)$form['id_city'];
		$data['id_dist'] = (int)$form['id_dist'];
		$data['id_ward'] = (int)$form['id_ward'];
		$data['id_street'] = (int)$form['id_street'];
			
		$data['ten_vi'] = $form['ten_vi'];
		$data['noidung_vi'] = magic_quote($form['noidung_vi']);
		$data['tenkhongdau'] = changeTitle($form['ten_vi']);
		$data['text_search'] = changeSearch($form['ten_vi']);
		$data['giaban'] = str_replace(',','',$form['giaban']);
		$data['id_user'] = $_SESSION['logging']['id'];
		$data['type'] = (string)$form['type'];
		$data['title'] = (string)$form['ten_vi'];
		$data['keywords'] = (string)$form['noidung_vi'];
		$data['description'] = (string)$form['noidung_vi'];
		$data['hoten'] = (string)$form['hoten'];
		$data['dienthoai'] = (string)$form['dienthoai'];
		$data['duongpho'] = magic_quote($form['duongpho']);
		$data['email'] = (string)mb_convert_case($form['email'], MB_CASE_LOWER, "UTF-8");
		$data['ngaysua'] = time();
		$d->setTable('baiviet');
		$d->setWhere('id', $id);
		if($d->update($data)){
			if (isset($_FILES['files'])) {
	            for($i=0;$i<count($_FILES['files']['name']);$i++){
	            	if($_FILES['files']['name'][$i]!=''){
						$file['name'] = $_FILES['files']['name'][$i];
						$file['type'] = $_FILES['files']['type'][$i];
						$file['tmp_name'] = $_FILES['files']['tmp_name'][$i];
						$file['error'] = $_FILES['files']['error'][$i];
						$file['size'] = $_FILES['files']['size'][$i];
					    $file_name = images_name($_FILES['files']['name'][$i]);
						$photo = upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', _upload_baiviet_l,$file_name);
						$data1['photo'] = $photo;
						$data1['thumb'] = create_thumb($data1['photo'], 400, 400,_upload_baiviet_l,$file_name,1);
						$data1['stt'] = (int)$_POST['stthinh'][$i];
						$data1['type'] = (string)$form['type'];
						$data1['id_baiviet'] = $id;
						$data1['hienthi'] = 1;
						$d->setTable('baiviet_photo');
						$d->insert($data1);
					}
				}
	        }
	        $status = 0;
			$message = "Bạn đã cập nhật tin thành công.";
			transfer($message,'quan-ly-tin-dang.html');
		}else{
			$status = 1;
			$message = "Cập nhật tin thất bại, vui lòng kiểm tra lại thông tin cập nhật.";
			transfer($message,'sua-tin-dang.html&id='.$id);
		}
	}
}
function post(){
	global $d,$user,$message,$status;
	$id = $user['id'];
	if(!empty($_POST)){
		$form = $_POST['data'];
		if(count($_FILES)==0){
			$status = 1;
			$message = "Bạn chưa chọn tối thiểu 1 hình ảnh đăng tin.";
		}else{
			if($_FILES['files']['name'][0]!=''){
				$file['name'] = $_FILES['files']['name'][0];
				$file['type'] = $_FILES['files']['type'][0];
				$file['tmp_name'] = $_FILES['files']['tmp_name'][0];
				$file['error'] = $_FILES['files']['error'][0];
				$file['size'] = $_FILES['files']['size'][0];
			    $file_name = images_name($_FILES['files']['name'][0]);
				$photo = upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', _upload_baiviet_l,$file_name);
				$data['photo'] = $photo;
				$data['thumb'] = create_thumb($data['photo'], 400, 400,_upload_baiviet_l,$file_name,1);
			}
			$data['id_list'] = (int)$form['id_list'];
			$data['id_cat'] = (int)$form['id_cat'];
			$data['id_item'] = (int)$form['id_item'];
			// $data['id_type'] = (int)$form['id_type'];
			// $data['id_status'] = (int)$form['id_status'];
			$data['id_city'] = (int)$form['id_city'];
			$data['id_dist'] = (int)$form['id_dist'];
			$data['id_ward'] = (int)$form['id_ward'];
			$data['id_street'] = (int)$form['id_street'];
			

			$data['giachu'] = $form['giaban'];
			
			$etc_price = explode('_', $form['donvi']);
			$data['giaban'] = $form['giaban']*$etc_price[0];
			$data['donvi'] = $etc_price[1];

			// $chuyendoigia = explode('_', $form['giatinh']);
			$chuyendoigia = explode('_', "1_Tổng diện tích");

			$data['id_giatinh'] = (int)$chuyendoigia[0];
			$data['giatinhchu'] = $chuyendoigia[1];


			$data['id_phaply'] = (int)$form['id_phaply'];
			$data['id_huongnha'] = (int)$form['id_huongnha'];
			$data['mattien'] = (int)$form['mattien'];
			$data['duongvao'] = (int)$form['duongvao'];
			$data['dientich'] = (int)$form['dientich'];	
			$data['sotang'] = (int)$form['sotang'];
			$data['phongngu'] = (int)$form['phongngu'];
			$data['tolet'] = (int)$form['tolet'];
			$data['noithat_vi'] = magic_quote($form['noithat_vi']);
			$data['duongpho'] = magic_quote($form['duongpho']);




			$data['ten_vi'] = $form['ten_vi'];
			$data['noidung_vi'] = magic_quote($form['noidung_vi']);
			$data['tenkhongdau'] = changeTitle($form['ten_vi']);
			$data['text_search'] = changeSearch($form['ten_vi']);
			
			$data['id_user'] = $_SESSION['logging']['id'];
			$data['type'] = (string)$form['type'];
			$data['title'] = (string)$form['ten_vi'];
			$data['keywords'] = (string)$form['ten_vi'];
			$data['description'] = (string)$form['ten_vi'];
			$data['hoten'] = (string)$form['hoten'];
			$data['dienthoai'] = (string)$form['dienthoai'];
			$data['email'] = (string)mb_convert_case($form['email'], MB_CASE_LOWER, "UTF-8");
			$data['hienthi'] = 0;
			$data['ngaytao'] = time();
			
			$d->setTable('baiviet');
			if($d->insert($data))
			{

				$id = mysql_insert_id();
				$post_id = 'MT'.$_SESSION['logging']['id'].'-'.str_pad($id,6, '0', STR_PAD_LEFT);
				mysql_query("update table_baiviet set masp='".$post_id."' WHERE id=$id");

				if (isset($_FILES['files'])) {
		            for($i=0;$i<count($_FILES['files']['name']);$i++){
		            	if($_FILES['files']['name'][$i]!=''){

							$file['name'] = $_FILES['files']['name'][$i];
							$file['type'] = $_FILES['files']['type'][$i];
							$file['tmp_name'] = $_FILES['files']['tmp_name'][$i];
							$file['error'] = $_FILES['files']['error'][$i];
							$file['size'] = $_FILES['files']['size'][$i];
						    $file_name = images_name($_FILES['files']['name'][$i]);
							$photo = upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', _upload_baiviet_l,$file_name);
							$data1['photo'] = $photo;
							$data1['thumb'] = create_thumb($data1['photo'], 400, 400,_upload_baiviet_l,$file_name,1);
							$data1['stt'] = (int)$_POST['stthinh'][$i];
							$data1['type'] = (string)$form['type'];
							$data1['id_baiviet'] = $id;
							$data1['hienthi'] = 1;
							$d->setTable('baiviet_photo');
							$d->insert($data1);
						}
					}
		        }
		        $status = 0;
				$message = "Bạn đã đăng tin thành công, tin của bạn đang chờ xét duyệt.";
				transfer($message,'quan-ly-tin-dang.html');
			}else{
				$status = 1;
				$message = "Đăng tin thất bại, vui lòng kiểm tra lại thông tin đăng.";
			}
		}
	}
}

function info(){
	global $d,$user,$message,$status;
	$id = $user['id'];
	if(!empty($_POST)){
		$form = $_POST['data'];
		$size = 1*MB;
		$file_size = $_FILES['file']['size'];
		if($file_size>$size){
			$status = 1;
			$message = "Dung lượng ảnh vượt quá giới hạn cho phép.";
			return false;
		}
		
		$name = $_FILES['file']['name'];
		$name = explode('.',$name);
		$name = changeTitle($name[0]);
		if($photo = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_avatar_l,$name."_".time())){
			$data['photo'] = $photo;
			$d->setTable('thanhvien');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_avatar_l.$row['photo']);
			}
		}
		$data['hoten'] = check_dt($form['hoten']);
		$data['dienthoai'] = check_dt($form['dienthoai']);
		$data['ngaysinh'] = $form['ngay']."/".$form['thang']."/".$form['nam'];
		$d->setTable('thanhvien');
		$d->setWhere('id', $id);
		if($d->update($data)){
			$_SESSION['logging']['hoten'] = $data['hoten'];
			$_SESSION['logging']['ngaysinh'] = $data['ngaysinh'];
			$_SESSION['logging']['dienthoai'] = $data['dienthoai'];
			$_SESSION['logging']['photo'] = $data['photo'];
			$status = 0;
			$message = "Thông tin tài khoản của bạn đã được cập nhật.";
		}else{
			$status = 1;
			$message = "Thông tin tài khoản của bạn không được cập nhật.";
		}
	}
}
function update(){
	global $d,$user,$message,$status;
	$id = $user['id'];
	$password = $user['password'];
	if(!empty($_POST)){
		$form = $_POST['data'];
		if($password==md5($form['password'])){
			if($form['password'] != $form['password-old'] ){
				$data['password'] = md5(check_dt($form['password']));
				$d->setTable('thanhvien');
				$d->setWhere('id', $id);
				if($d->update($data)){
					$status = 0;
					$message = "Đã thay đổi mật khẩu thành công.";
				}else{
					$status = 1;
					$message = "Thông tin mật khẩu chưa được thay đổi.";
				}
			}else{
				$status = 1;
				$message = "Mật khẩu cũ và mật khẩu mới không được trùng.";
			}
		}else{
			$status = 1;
			$message = "Mật khẩu cũ không trùng khớp.";
		}
	}
}
function order(){
	global $d,$order,$status,$message;
	if(!empty($_POST)){
		$d->reset();
		$sql_user = "select * from #_order where id_user='".$_SESSION['logging']['id']."' and madonhang='".(string)$_POST['order']."'";
		$d->query($sql_user);
		$order = $d->result_array();
		if(count($order)>0){
			$status = 0;
			$message = "Tìm thấy mã đơn hàng: ". $_POST['order'];
		}else{
			$status = 1;
			$message = "Không tìm thấy đơn hàng của bạn";
		}
	}else{
		$d->reset();
		$sql_user = "select * from #_order where id_user='".$_SESSION['logging']['id']."' order by id desc";
		$d->query($sql_user);
		$order = $d->result_array();
	}
}
?>