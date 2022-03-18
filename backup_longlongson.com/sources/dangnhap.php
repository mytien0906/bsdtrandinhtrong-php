<?php  if(!defined('_source')) die("Error");

	if(!empty($_POST))
	{
		$user=addslashes($_POST['username']);
		$pass=addslashes($_POST['password']);

		if (get_magic_quotes_gpc()==false) {
			$user = mysql_real_escape_string($user);
			$pass = mysql_real_escape_string($pass);
		}
		$d->reset();
		$sql="select * from #_thanhvien where hienthi=1 and username='".$user."' and password='".md5($pass)."'";
		$d->query($sql);
		$tmp=$d->fetch_array();
		if($tmp['id']!="")
		{
			$_SESSION['logging']=array();
			$_SESSION['logging']=$tmp;
			$_SESSION['logging']['vip']=0;
			alert(_dangnhapthanhcong);	
			if($com=='thanh-toan')
			{
				echo '<script type="text/javascript">window.location.reload();</script>';
			}
		}
		else
		{
			alert(_tendangnhapvamatkhaukhongchinhxac);	
		}	
	}
	
?>