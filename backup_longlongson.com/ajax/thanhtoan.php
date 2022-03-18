<?php
	session_start();
	$session=session_id();
	date_default_timezone_set('Asia/Saigon');
	@define ( '_template' , '../templates/'); //định nghĩa đường dẫn tắt, chèn biến vào thay thế
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../admin/lib/');
	@define ( _upload_folder , './media/upload/' );

	$lang=$_SESSION['lang'];

	require_once _source."lang_$lang.php";
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	
?>
<div style="width:700px; padding:10px;">
<div class="main-tit"><h2><?=_thongtinthanhtoan?></h2></div>
<form name="frm" method="post" action="">
    <div class="lh-con-l"><?=_hovaten?> (<span>*</span>)</div>
    <div class="lh-con-r"><input name="ten" type="text" id="ten" class="ipct input" value="<?=$_SESSION['logging']['ten']?>" /></div>
    <div class="clear"></div>
    
    <div class="lh-con-l"><?=_diachi?> (<span>*</span>)</div>
    <div class="lh-con-r"><input name="diachi" type="text" id="diachi" class="ipct input" value="<?=$_SESSION['logging']['diachi']?>"/></div>
    <div class="clear"></div>
    
    <div class="lh-con-l"><?=_dienthoai?> (<span>*</span>)</div>
    <div class="lh-con-r"><input name="dienthoai" type="text" id="dienthoai" class="ipct input" value="<?=$_SESSION['logging']['dienthoai']?>"/></div>
    <div class="clear"></div>
    
    <div class="lh-con-l">Email (<span>*</span>)</div>
    <div class="lh-con-r"><input name="email" type="text" class="ipct input" value="<?=$_SESSION['logging']['email']?>"/></div>
    <div class="clear"></div>
    
    <div class="lh-con-l"><?=_noidung?> (<span>*</span>)</div>
    <div class="lh-con-r"><textarea name="noidung" cols="52" rows="7" id="noidung" class="tact"></textarea></div>
    <div class="clear"></div>
    
    <?php if(isset($_SESSION['logging'])){?>
    <div class="lh-con-l"><?=_magiamgia?></div>
    <div class="lh-con-r"><input name="coupon" type="text" class="ipct input" style="width:100px;"/></div>
    <div class="clear"></div>
    <?php }?>
    
    <div class="lh-con-l" style="visibility:hidden;">a</div>
    <div class="lh-con-r"><input type="button" value="<?=_gui?>" onclick="js_submit();" class="btnct button"/>
    <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" class="btnct button" /></div>
    <div class="clear"></div>
</form>
</div>