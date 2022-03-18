<div class="content">
    <div class="main-tit"><h2><?=$title_tcat?></h2></div>
    <?php if(count($product)>0){?>
    <div class="w-clear">
    	<?php for($i=0;$i<count($product);$i++){ ?>
        	<div class="box-sp">    
                <div class="box-sp-img">
                    <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>"><img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" /></a>
                </div>
                <h3>
                    <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>">
                        <?=$product[$i]['ten']?>
                    </a>
                </h3>
                <?php if($product[$i]['gia']>0 && $product[$i]['giakm']>0){ ?>
                <div class="box-sp-gia km">
                    <strong>
                        <?=number_format($product[$i]['giakm'],0,'','.')?>đ
                        <span class="box-sp-km">
                            -
                        <?php 
                            echo 100-($product[$i]['giakm']/$product[$i]['gia']*100);
                        ?>
                            %
                        </span>
                    </strong>
                    <div class="del">
                        <?=number_format($product[$i]['gia'],0,'','.')?>đ
                    </div>
                </div>
                <?php }else{ ?>
                <div class="box-sp-gia">
                    Giá: <span><?=($product[$i]['gia']>0)?number_format($product[$i]['gia'],0,'','.').'đ':'Liên hệ'?></span>
                </div>
                <?php } ?>
            </div>
        <?php }?>
    </div>
    <div class="phantrang"><?=$paging['paging']?></div>
    <?php }else{echo _dangcapnhat;}?>
</div>
