<?php
	if(isset($_POST['coupon']))
	{
		$thongbaoma='';
		$maok=false;
		$cp=$_POST['coupon'];
		$d->reset();
		$sql="select * from #_coupon where ma='$cp'";
		$d->query($sql);
		$rcp=$d->fetch_array();
		if($rcp['tinhtrang']==0 && time() >= $rcp['batdau'] && time() <= $rcp['ketthuc'])
		{
			$_SESSION['giam']['gia']=$rcp['phantram'];
			$_SESSION['giam']['loai']=$rcp['loai'];

			## Cap nhat tinh trang cua ma giam gia
			$d->reset();
			$sql="update #_coupon set tinhtrang=1 where ma='$cp'";
			$d->query($sql);

			$maok=true;
		}
		else
		{
			$thongbaoma='Mã không tồn tại hoặc đã hết hạn';
		}
	}

	if(!empty($_POST))
	{
		$_SESSION['info']=array();
		$_SESSION['info']=$_POST['ci'];
	}

	$d->reset();
	$sql="select id,ten_$lang as ten from #_diachi_list where hienthi=1 order by stt desc,id asc";
	$d->query($sql);
	$tinh=$d->result_array();
?>