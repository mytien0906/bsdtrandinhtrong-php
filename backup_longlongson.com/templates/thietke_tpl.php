<div class="main-tit"><h2><?=$title_tcat?></h2></div>
<div class="content w-clear">
    <?php for ($i=0; $i < count($list_photo); $i++) { ?>
        <div class="box-tk">
            <a href="<?=_upload_product_l.$list_photo[$i]['photo']?>" class="fancybox" rel="thietke">
                <img src="<?=_upload_product_l.$list_photo[$i]['thumb']?>" alt="<?=$product_detail['ten']?>" class="thumb"/>
            </a>    
        </div>
    <?php } ?>
</div>
