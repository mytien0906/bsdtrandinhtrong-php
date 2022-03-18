<?php  if(!defined('_source')) die("Error");
	if(!empty($_POST))
	{

		$reg=$_POST['reg'];
	
		$d->reset();
		$sql="select id from #_thanhvien where  username='".$reg['username']."'";
		$d->query($sql);
		$tmp=$d->fetch_array();

		if($tmp['id']!="")
		{
			transfer(_tendangnhapdaduocsudung, "");
		}
		else
		{
			$d->reset();
			$sql="select id from #_thanhvien where  email='".$reg['email']."'";
			$d->query($sql);
			$tmp=$d->fetch_array();
			
			if($tmp['id']!="")
			{
				transfer(_emaildaduocsudung, "");
			}
			else
			{
				## Them email vào bảng đăng ký nhận tin
				if($_POST['nhantin']!='')
				{
					$email_dk=$reg['email'];
					$d->reset();
			        $sql="select id from #_email_dk where email='$email_dk'";
			        $d->query($sql);
			        $chkemail_dk=$d->fetch_array();
			        if($chkemail_dk['id']=="")
			        {
			            $dtemail_dk['email']=$email_dk;
			            $d->reset();
			            $d->setTable('email_dk');
			            $d->insert($dtemail_dk);
			        }
				}

				$reg['password']=md5($reg['password']);
				$d->reset();
				$d->setTable('thanhvien');
				if($d->insert($reg))
				{			
					transfer(_dangkytaikhoanthanhcong, "");
				}
				else
					transfer(_hethongloi,'');
			}
		}
	}
?>