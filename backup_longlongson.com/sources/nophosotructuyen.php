<?php if(!defined('_source')) die("Error");
	if(!empty($_POST)){

		function fns_Rand_digit($min,$max,$num)
		{
			$result='';
			for($i=0;$i<$num;$i++){
				$result.=rand($min,$max);
			}
			return $result;	
		}

		$file_name=$_POST['dienthoai'].time();

		if($photo = upload_image("file", 'rar|zip|pdf|xls|xlsx|doc|docx|ppt|pptx', _upload_tintuc_l,$file_name)){
			$data['photo'] = $photo;
		}	

		$data['ten'] = $_POST['ten'];
		$data['diachi'] = $_POST['diachi'];
		$data['dienthoai'] = $_POST['dienthoai'];
		$data['email'] = $_POST['email'];
		$data['vitriungtuyen'] = $_POST['vitriungtuyen'];
		$data['congviechientai'] = $_POST['congviechientai'];
		$data['noidung'] = $_POST['noidung'];
		$ngaydangky = time();
		
		$sql = "INSERT INTO  table_nhantin (ten,diachi,dienthoai,email,vitriungtuyen,congviechientai,noidung,photo,type,ngaytao,hienthi ) 
				  VALUES ('".$data['ten']."','".$data['diachi']."','".$data['dienthoai']."','".$data['email']."','".$data['vitriungtuyen']."','".$data['congviechientai']."','".$data['noidung']."','".$data['photo']."','tuyendung','$ngaydangky',0)";
		if(mysql_query($sql))
		{	
				transfer("Gửi đơn thành công!<br/>", "http://".$config_url."/");	
		}
		else
		{
				transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "http://".$config_url."/");
		}
	}
	
?>