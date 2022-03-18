<div class="center">
    <div class="sp-tit">
        <?=_sanpham?>
    </div>
    <div class="sp-loichao">
        <?=_loichaosanphambanchay?>
    </div>
    <div class="box-tab-tit">
        <?php $ck=0; for ($i=0; $i < count($mproduct); $i++) { ?>
            <?php 
                $d->reset();
                $sql="select 1 from #_product where hienthi=1 and type='product' and id_lv0='".$mproduct[$i]['id']."' and noibat>0 order by stt,id desc";
                $d->query($sql);
                $tmp=$d->result_array();
                if(count($tmp)>0)
                {
            ?>
            <div <?php if($ck==0){echo 'class="active"'; $ck++;} ?>>
                <?=$mproduct[$i]['ten']?>
            </div>
            <?php } ?>
        <?php } ?>
    </div>
    <div>
        <?php for ($j=0; $j < count($mproduct); $j++) { ?>
            <?php 
                $d->reset();
                $sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,thumb,gia from #_product where hienthi=1 and type='product' and id_lv0='".$mproduct[$j]['id']."' and noibat>0 order by stt,id desc";
                $d->query($sql);
                $product=$d->result_array();
                if(count($product)>0)
                {
            ?>
            <div class="box-tab-con">
                <?php if(count($product)>8){ ?>
                <div class="slick-sanpham">
                    <div>
                        <div style="padding:10px;">
                            <?php for ($i=0; $i < count($product) ; $i++) { ?>
                            <div class="box-sps">    
                                <div class="box-sp-img">
                                    <a href="san-pham/<?=$product[$i]['tenkhongdau']?>"><img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" /></a>
                                </div>
                                <h3>
                                    <a href="san-pham/<?=$product[$i]['tenkhongdau']?>">
                                        <?=$product[$i]['ten']?>
                                    </a>
                                </h3>
                                <div class="box-sp-gia">
                                    <?=($product[$i]['gia']>0)?number_format($product[$i]['gia'],0,'','.').'đ':'Liên hệ'?>
                                </div>
                            </div>
                            <?php if(($i+1)%2==0 && ($i+1)<count($product)){echo '</div></div><div><div style="padding:10px;">';} ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php }else{ ?>
                <div class="w-clear">
                    <?php for ($i=0; $i < count($product) ; $i++) { ?>
                        <div class="box-spi">    
                            <div class="box-sp-img">
                                <a href="san-pham/<?=$product[$i]['tenkhongdau']?>"><img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" /></a>
                            </div>
                            <h3>
                                <a href="san-pham/<?=$product[$i]['tenkhongdau']?>">
                                    <?=$product[$i]['ten']?>
                                </a>
                            </h3>
                            <div class="box-sp-gia">
                                <?=($product[$i]['gia']>0)?number_format($product[$i]['gia'],0,'','.').'đ':'Liên hệ'?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>