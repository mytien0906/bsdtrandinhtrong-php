<?php  if(!defined('_source')) die("Error");
	
	function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}

	if(!isset($_SESSION['logging']))
	{
		redirect('http://'.$config_url.'/');
	}

	$id =  addslashes($_GET['id']);
	if (get_magic_quotes_gpc()==false) {
		$id = mysql_real_escape_string($id);
	}	

	switch($id){
		case 'doi-mat-khau':
			doimatkhau();
			$title_tcat="Đổi mật khẩu";
			$template_member ="member/doimatkhau";
		break;	

		case 'kiem-tra-don-hang':
			kiemtradonhang();
			$title_tcat="Kiểm tra đơn hàng";
			$template_member ="member/kiemtradonhang";
		break;	
		
		default: 
			thongtintaikhoan();
			$title_tcat="Thông tin tài khoản";
			$template_member = "member/thongtintaikhoan";
			break;
	}
	
	function doimatkhau()
	{
		global $d,$thongbao;
		if(!empty($_POST))
		{
			$curpass=$_POST['curpass'];
			$newpass=md5($_POST['newpass']);

			if(md5($curpass)!=$_SESSION['logging']['password'])
			{
				$thongbao='Mật khẩu hiện tại không chính xác!';
			}
			else
			{
				$d->reset();
				$sql="update #_thanhvien set password='$newpass' where id='".$_SESSION['logging']['id']."'";
				$d->query($sql);
				$_SESSION['logging']['password']=$newpass;
				$thongbao='Đổi mật khẩu thành công!';
			}
		}
	}

	function thongtintaikhoan()
	{
		 global $d,$thongbao;
		if(!empty($_POST))
		{
			$reg=$_POST['reg'];

			$d->setTable('thanhvien');
			$d->setWhere('id', $_SESSION['logging']['id']);
			if($d->update($reg))
			{
				$d->reset();
				$sql="select * from #_thanhvien where hienthi=1 and id='".$_SESSION['logging']['id']."' ";
				$d->query($sql);
				$tmp=$d->fetch_array();
				if($tmp['id']!="")
				{
					$_SESSION['logging']=array();
					$_SESSION['logging']=$tmp;
					$_SESSION['logging']['vip']=0;
				}
				$thongbao='Cập nhật thông tin thành công!';
			}
			else
				$thongbao='Hệ thống bận. Vui lòng thử lại sau!';
		}
	}

	function kiemtradonhang()
	{
		global $d,$thongbao,$tintuc;
		if(!empty($_POST))
		{
			$madonhang=$_POST['madonhang'];

			$d->reset();
			$sql="select * from #_donhang where id_tv='".$_SESSION['logging']['id']."' and madonhang='$madonhang' order by id asc";
			$d->query($sql);
			$tintuc=$d->result_array();

			if(count($tintuc)==0)
			{
				$thongbao="Mã đơn hàng không tồn tại!";
			}
		}
		else
		{
			$d->reset();
			$sql="select * from #_donhang where id_tv='".$_SESSION['logging']['id']."' order by id asc";
			$d->query($sql);
			$tintuc=$d->result_array();

			#Phân trang
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=10;
			$maxP=7;
			$paging=paging_home($tintuc, $url, $curPage, $maxR, $maxP);
			$tintuc=$paging['source'];
		}
	}
	
?>