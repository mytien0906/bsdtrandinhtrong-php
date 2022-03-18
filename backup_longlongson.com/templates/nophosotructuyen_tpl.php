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
	
	if(!check_email(document.frm.email.value)){
		alert("<?=_emailkhonghople?>");
		document.frm.email.focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('noidung'), "<?=_xinnhapnoidung?>")){
		document.getElementById('noidung').focus();
		return false;
	}
	
	document.frm.submit();
}
</script>
<div class="content">
	<div class="main-tit"><h2>Nộp hồ sơ trực tuyến</h2></div>

	<div class="lh-r">
	<form method="post" name="frm" action="" enctype="multipart/form-data">
	    <div class="lh-con-l"><?=_hovaten?></div>
	    <div class="lh-con-r"><input name="ten" type="text" id="ten" class="ipct input" /></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l"><?=_diachi?> liên hệ</div>
	    <div class="lh-con-r"><input name="diachi" type="text" id="diachi" class="ipct input"/></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l"><?=_dienthoai?></div>
	    <div class="lh-con-r"><input name="dienthoai" type="text" id="dienthoai" class="ipct input"/></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l">Email</div>
	    <div class="lh-con-r"><input name="email" type="text" class="ipct input" /></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l">Vị trí ứng tuyển</div>
	    <div class="lh-con-r"><input name="vitriungtuyen" type="text" id="vitriungtuyen" class="ipct input"/></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l">Công việc hiện tại</div>
	    <div class="lh-con-r"><input name="congviechientai" type="text" id="congviechientai" class="ipct input"/></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l" style="margin-top: 5px;">Upload CV</div>
	    <div class="lh-con-r" style="margin-top: 5px;">
	    	<input type="file" name="file" style="padding: 0px;" />
			<p style="margin: 0px;"><i>Địng dạng file gửi: zip, rar, File dưới 2M</i></p>
	    </div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l"><?=_noidung?></div>
	    <div class="lh-con-r"><textarea name="noidung" cols="52" rows="7" id="noidung" class="tact"></textarea></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-r"><input type="button" value="<?=_gui?>" onclick="js_submit();" class="btnct button"/>
	    <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" class="btnct button" /></div>
	    <div class="clear"></div>
	</form>
	</div>
	<div class="clear"></div>
</div>