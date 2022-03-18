<script language="javascript" src="admin/media/scripts/my_script.js"></script>
<script language="javascript">
function js_submit(){
	
	if(isEmpty(document.getElementById('ten'), "<?=_xinnhaphoten?>")){
		document.getElementById('ten').focus();
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
<div class="center w-clear">
	<div class="lienhe-tit">
		<h2><?=_lienhe?></h2>
	</div>
	<form method="post" name="frm" action="lien-he" enctype="multipart/form-data">
		<div class="lienhe-l w-clear">
			<input name="ten" type="text" id="ten" class="ipct input" placeHolder="<?=_hoten?>" />
			<input name="email" type="text" class="ipct input" placeHolder="Email" />
			<input name="dienthoai" type="text" id="dienthoai" class="ipct input" placeHolder="<?=_dienthoai?>"/>
			<input type="reset" class="button" value="<?=_xoa?>" />
		</div>
		<div class="lienhe-r w-clear">
			<textarea name="noidung" cols="52" rows="7" id="noidung" class="tact" placeHolder="<?=_noidung?>"></textarea>
			<input type="button" class="button" value="<?=_gui?>" onclick="js_submit()" />
		</div>
	</form>
</div>