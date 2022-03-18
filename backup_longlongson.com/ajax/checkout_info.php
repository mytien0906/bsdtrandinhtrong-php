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
	
?>

<div class="w-ajdh">
    <div class="main-tit" style="margin-top:20px;"><h2>Thông tin đặt hàng</h2></div>
    <div class="dh-tt">
        <form method="post" name="frm" action="gio-hang" enctype="multipart/form-data">
            <div class="lh-con-l"><?=_hovaten?> (<span>*</span>)</div>
            <div class="lh-con-r"><input name="ci[ten]" type="text" id="ten" class="ipct input" /></div>
            <div class="clear"></div>
            
            <div class="lh-con-l"><?=_diachi?> (<span>*</span>)</div>
            <div class="lh-con-r"><input name="ci[diachi]" type="text" id="diachi" class="ipct input"/></div>
            <div class="clear"></div>
            
            <div class="lh-con-l"><?=_dienthoai?> (<span>*</span>)</div>
            <div class="lh-con-r"><input name="ci[dienthoai]" type="text" id="dienthoai" class="ipct input"/></div>
            <div class="clear"></div>
            
            <div class="lh-con-l">Email (<span>*</span>)</div>
            <div class="lh-con-r"><input name="ci[email]" id="email" type="text" class="ipct input" /></div>
            <div class="clear"></div>
            
            <div class="lh-con-l"><?=_noidung?> (<span>*</span>)</div>
            <div class="lh-con-r"><textarea name="ci[noidung]" cols="52" rows="7" id="noidung" class="tact"></textarea></div>
            <div class="clear"></div>
            <input type="hidden" name="nosend" value="1" />
            <div class="lh-con-l lh-con-lvh">a</div>
            <div class="lh-con-r"><input type="button" value="Tiếp tục" onclick="js_submit();" class="btnct button"/>
            <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" class="btnct button" /></div>
            <div class="clear"></div>
        </form>
    </div>
</div>

<script language="javascript" src="admin/media/scripts/my_script.js"></script>
<script language="javascript">
function js_submit(){
	
	if(isEmpty(document.getElementById('ten'), "<?=_xinnhaphoten?>")){
		document.getElementById('ten').focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('diachi'), "<?=_xinnhapdiachi?>")){
		document.getElementById('diachi').focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('dienthoai'), "<?=_xinnhapdt?>")){
		document.getElementById('dienthoai').focus();
		return false;
	}
	
	if(!isNumber(document.getElementById('dienthoai'), "<?=_dtkhonghople?>")){
		document.getElementById('dienthoai').focus();
		return false;
	}
	
	if(!check_email(document.getElementById('email').value)){
		alert("<?=_emailkhonghople?>");
		document.getElementById('email').focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('noidung'), "<?=_xinnhapnoidung?>")){
		document.getElementById('noidung').focus();
		return false;
	}
	
	document.frm.submit();
}
</script>
