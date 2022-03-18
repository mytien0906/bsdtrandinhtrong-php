<div class="center w-clear">
	<a href="http://<?=$config_url?>/" title="<?=($tit_c!="")?$tit_c:$title_bar.$row_setting['title_'.$lang]?>">
	    <img src="<?=_upload_hinhanh_l.$banner['photo']?>" alt="<?=($tit_c!="")?$tit_c:$title_bar.$row_setting['title_'.$lang]?>" class="logo" />
	</a>

	<div class="mxh w-clear">
		Hotline: <span><?=$row_setting['hotline']?></span>
    </div>

    <div id="menu" class="w-clear">
        <?php include _template."layout/menu.php"; ?>
    </div>
</div>