<?php
	@define ( '_source' , '../sources/');
	
	$lang=$_GET['lang'];
	require_once _source."lang_$lang.php";
?>
<div class="w-dn">
    <form name="guicauhoi" action="" method="post">
        <div class="dn-tit"><?=_guicauhoi?></div>
        <div class="w-dn-r-l"><?=_ten?> <span>(*)</span></div>
        <div class="w-dn-r-r"><input type="text" name="hd[hoten]" class="input" placeholder="<?=_ten?>"/></div>
        <div class="clear"></div>
        <div class="w-dn-r-l">Email <span>(*)</span></div>
        <div class="w-dn-r-r"><input type="email" name="hd[email]" class="input" placeholder="Email" required="required"/></div>
        <div class="clear"></div>
        <div class="w-dn-r-l"><?=_dienthoai?></div>
        <div class="w-dn-r-r"><input type="text" name="hd[dienthoai]" class="input" placeholder="<?=_dienthoai?>"/></div>
        <div class="clear"></div>
        <div class="w-dn-r-l"><?=_diachi?></div>
        <div class="w-dn-r-r"><input type="text" name="hd[diachi]" class="input" placeholder="<?=_diachi?>"/></div>
        <div class="clear"></div>
        
        <div class="w-dn-r-l"><?=_cauhoi?> <span>(*)</span></div>
        <div class="w-dn-r-r"><textarea name="hd[ten_<?=$lang?>]" class="input" required="required" placeholder="<?=_cauhoi?>" rows="5"></textarea></div>
        <div class="clear"></div>
        
        <div class="w-dn-r-l" style="visibility:hidden;">Thanh Tâm</div>
        <div class="w-dn-r-r"><input type="submit" class="button" value="<?=_gui?>"/></div>
    </form>        
</div>
