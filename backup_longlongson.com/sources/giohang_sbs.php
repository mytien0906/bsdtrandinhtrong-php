<?php
	$id=addslashes($_GET['id']);
	if($id=='buoc-1')
	{
		if(isset($_SESSION['logging']) || isset($_SESSION['info']))
		{
			## Da dang nhap chuyen sang buoc 2
			redirect("http://".$config_url."/gio-hang/buoc-2");
		}

		if(isset($_POST['khongdangnhap']))
		{
			$_SESSION['info']['email']=$_POST['email'];
			redirect("http://".$config_url."/gio-hang/buoc-2");
		}
	}
	elseif($id=='buoc-2')
	{
		if(isset($_POST['sdiachi']))
		{
			$_SESSION['info']['ten']=$_POST['ten'];
			$_SESSION['info']['diachi']=$_POST['diachi'];
			$_SESSION['info']['dienthoai']=$_POST['dienthoai'];
			$_SESSION['info']['noidung']=$_POST['noidung'];
			redirect("http://".$config_url."/gio-hang/buoc-3");	
		}
	}
	elseif($id=='buoc-3')
	{

	}

	if(isset($_SESSION['info']))
	{
		$info=$_SESSION['info'];
	}
	elseif(isset($_SESSION['logging']))
	{
		$info=$_SESSION['logging'];
	}
?>