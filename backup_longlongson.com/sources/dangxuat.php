<?php  if(!defined('_source')) die("Error");
	unset($_SESSION['logging']);
	transfer('Đăng xuất thành công!','http://'.$config_url.'/');
?>