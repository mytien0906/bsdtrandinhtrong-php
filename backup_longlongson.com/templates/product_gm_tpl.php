<div class="content">
    <div class="main-tit"><h2><?=$title_tcat?></h2></div>
    <?php if(count($product)>0){?>
    <div class="w-clear">
    	<?php for($i=0;$i<count($product);$i++){ ?>
        	<div class="box-sp">    
                <div class="box-sp-img">
                    <a href="<?=$product[$i]['link']?>">
                        <img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" />
                    </a>
                </div>
                <h3>
                    <a href="<?=$product[$i]['link']?>">
                        <?=$product[$i]['ten']?>
                    </a>
                </h3>
            </div>
        <?php }?>
    </div>
    <div class="phantrang"><?=$paging['paging']?></div>
    <?php }else{echo _dangcapnhat;}?>
</div>
