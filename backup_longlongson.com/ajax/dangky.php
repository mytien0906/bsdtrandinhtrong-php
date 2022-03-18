<?php
	@define ( '_source' , '../sources/');
	
	$lang=$_GET['lang'];
	require_once _source."lang_$lang.php";
?>
<form name="dangnhap" action="" method="post">
    <div class="main-tit"><h2>Đăng ký thành viên</h2></div>
    <div class="ctsp-tit">Thông tin tài khoản</div>
    <div class="w-dn-l"><?=_tendangnhap?> <span>(*)</span></div>
    <div class="w-dn-r"><input type="text" name="reg[username]" class="input" placeholder="<?=_tendangnhap?>" required="required"/></div>
    <div class="clear"></div>
    <div class="w-dn-l"><?=_matkhau?> <span>(*)</span></div>
    <div class="w-dn-r"><input type="password" name="reg[password]" class="input" placeholder="<?=_matkhau?>" required="required"/></div>
    <div class="w-dn-l">Email <span>(*)</span></div>
    <div class="w-dn-r"><input type="email" name="reg[email]" class="input" placeholder="Email" required="required"/></div>
    <div class="clear"></div>
    <div class="clear"></div>
    <div class="ctsp-tit">Thông tin cá nhân</div>
    <div class="w-dn-l"><?=_ten?></div>
    <div class="w-dn-r"><input type="text" name="reg[ten]" class="input" placeholder="<?=_ten?>"/></div>
    <div class="clear"></div>
    <div class="w-dn-l"><?=_dienthoai?></div>
    <div class="w-dn-r"><input type="text" name="reg[dienthoai]" class="input" placeholder="<?=_dienthoai?>"/></div>
    <div class="clear"></div>
    <div class="w-dn-l"><?=_diachi?></div>
    <div class="w-dn-r"><input type="text" name="reg[diachi]" class="input" placeholder="<?=_diachi?>"/></div>
    <div class="w-dn-l w-dn-lvh" >Thanh Tâm</div>
    <div class="w-dn-r-r"><input type="submit" class="button" value="<?=_dangky?>"/></div>
    <div class="clear"></div>
</form>      