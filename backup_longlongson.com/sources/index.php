<?php  if(!defined('_source')) die("Error");
	
	$a = rand(10000,99999);

	if(!empty($_POST)){
		
		$data['ten'] = $_POST['hoten_dk'];
		$data['email'] = $_POST['email_dk'];
		$data['dienthoai'] = $_POST['sodienthoai_dk'];
		$data['chude'] = $_POST['chude_dk'];
		$data['hienthi'] = 0;
		$data['ngaytao'] = time();

		if($_POST['maxacnhan_dk']!=$_POST['capcha_dk1']){
			transfer( "Mã xác nhận không trùng khớp!","http://".$config_url."/");
		}
		else{
			$d->setTable('email_dk');
			if($d->insert($data))
			{			
				transfer("Bãn đã đăng ký thành công!", "http://".$config_url."/");
			}
			else
			{
				transfer("Có lỗi xảy ra! Vui lòng quay lại sau!", "http://".$config_url."/");
			}
		}
	}

	## Slider
	$d->reset();
	$sql="select thumb,link from #_photo where hienthi=1 and type='slider' order by stt,id desc";
	$d->query($sql);
	$slide=$d->result_array();

	$d->reset();
	$sql="select link, ten_$lang as ten, id, ngaytao from #_video where hienthi=1 order by stt,id desc";
	$d->query($sql);
	$video=$d->result_array();

	$d->reset();
	$sql="select ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,id from #_tintuc where hienthi=1 and type='duan' order by stt,id desc";
	$d->query($sql);
	$iduan=$d->result_array();
?>