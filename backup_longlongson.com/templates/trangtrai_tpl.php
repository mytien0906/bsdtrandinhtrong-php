<div class="content">
    <div class="main-tit"><h2><?=$title_tcat?></h2></div>
    <?php 
        if($type=='trangtrai')
        {
            $d->reset();
            $sql="select noidung_$lang as noidung from #_page where type='ndtrangtrai'";
            $d->query($sql);
            $trangtrai=$d->fetch_array();
            echo $trangtrai['noidung'];
        }
    ?>
    <?php if(count($product)>0){?>
    <div class="w-clear">
    	<?php for($i=0;$i<count($product);$i++){ ?>
        	<div class="box-spi">    
                <div class="box-sp-img">
                    <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>"><img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" /></a>
                </div>
                <h3>
                    <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>">
                        <?=$product[$i]['ten']?>
                    </a>
                </h3>
                <div class="box-sp-gia">
                    <?=($product[$i]['gia']>0)?number_format($product[$i]['gia'],0,'','.').'đ':'Liên hệ'?>
                </div>
            </div>
        <?php }?>
    </div>
    <div class="phantrang"><?=$paging['paging']?></div>
    <?php }else{echo _dangcapnhat;}?>
</div>
