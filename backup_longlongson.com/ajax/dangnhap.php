<?php
	@define ( '_source' , '../sources/');
	
	$lang=$_GET['lang'];
	require_once _source."lang_$lang.php";
?>
<form name="dangnhap" action="" method="post" class="w-dn">
    <div class="main-tit"><h2><?=_dangnhap?></h2></div>
    <div><?=_tendangnhap?> <span>(*)</span></div>
    <div><input type="text" name="username" class="input" placeholder="<?=_tendangnhap?>" required="required"/></div>
    <div><?=_matkhau?> <span>(*)</span></div>
    <div><input type="password" name="password" class="input" placeholder="<?=_matkhau?>" required="required"/></div>
    <input type="hidden" name="dangnhap"/>
    <div><input type="submit" class="button" value="<?=_dangnhap?>"/></div>
</form>