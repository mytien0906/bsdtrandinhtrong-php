<?php
	session_start();
	$session=session_id();
	date_default_timezone_set('Asia/Saigon');
	@define ( '_template' , '../templates/'); //định nghĩa đường dẫn tắt, chèn biến vào thay thế
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../admin/lib/');
	@define ( _upload_folder , './media/upload/' );

	$lang='vi';

	require_once _source."lang_$lang.php";
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";

	$id=$_POST['id'];
	$d->reset();
	$sql="select phi from #_diachi_list where id='$id'";
	$d->query($sql);
	$res=$d->fetch_array();
	
	if(get_total()>2)
	{
		$phi=number_format(0,0,'','.').'đ';	
		$rphi=0;
	}
	else
	{
		$phi=number_format($res['phi'],0,'','.').'đ';	
		$rphi=$res['phi'];
	}
	
?>
<?php if($_SESSION['logging']['vip']==1 && $_SESSION['giam']['gia']>0){?>
    
<?php }elseif($_SESSION['logging']['vip']==1){?>
    <?=number_format(get_order_total()*(100-$row_settingdh['vipdiscount'])/100,0, ',', '.')?><sup>đ</sup>
<?php }elseif($_SESSION['giam']['gia']>0){?>
    <?php if($_SESSION['giam']['loai']==1){ $tp_cart=get_order_total()-$_SESSION['giam']['gia'];}else{ $tp_cart=get_order_total()*((100-$_SESSION['giam']['gia'])/100);} $tonggia= number_format($tp_cart+$res['phi'],0, ',', '.').'<sup>đ</sup>';?>
<?php }else{?>
    <?php $tonggia=number_format(get_order_total()+$res['phi'],0, ',', '.').'<sup>đ</sup>';?>
<?php }?>
<?php 
	$arr = array('phi' => $phi, 'tonggia' => $tonggia, 'rphi' => $rphi);
	echo json_encode($arr);
?>
