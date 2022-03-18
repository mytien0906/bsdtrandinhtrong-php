<?php
	if(!isset($_SESSION['logging']))
	{
		redirect("http://".$config_url."/404");	
	}
	if(!empty($_POST))
	{
		$u=$_POST['u'];
		if(md5($_POST['opassword'])!=$_SESSION['logging']['password'])
		{
			alert('Nhập mật khẩu hiện tại không chính xác!');
		}
		else
		{
			$u['password']=md5($u['password']);
			$d->reset();
			$d->setTable('thanhvien');
			$d->setWhere('id', $_SESSION['logging']['id']);
			if($d->update($u))
			{
				alert('Cập nhật thông tin tài khoản thành công!');
				$_SESSION['logging']=get_info($_SESSION['logging']['id'],'thanhvien');
			}
			else
			{
				alert('Có lỗi trong quá trình lưu dữ liệu. Vui lòng thử lại sau!');
			}
		}
	}
?>