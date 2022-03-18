<div class="content">
    <div class="main-tit"><h2><?=$title_tcat?></h2></div>
    <?php if(count($product)>0){?>
    <div class="w-clear">
    	<?php for($i=0;$i<count($product);$i++){ ?>
        	<div class="box-pt">    
                <div class="box-pt-img">
                    <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>">
                        <img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" /></a>
                </div>
                <h3>
                    <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>">
                        <?=$product[$i]['ten']?>
                    </a>
                </h3>
            </div>
        <?php }?>
    </div>
    <?php }?>
    <div class="box-tab-tit">
        <div class="active">
            Màu hợp tuổi mạng
        </div>
        <div class="tab-ptt-2">
            Màu kỵ tuổi màu
        </div>
    </div>
    <div>
        <div class="box-tab-con">
            <?php for ($i=0; $i < count($mauhop); $i++) { ?>
                <div class="w-clear" style="margin-bottom:15px;">
                    <div class="pt-l">
                        <h3>
                            <?=$mauhop[$i]['ten']?>
                        </h3>
                        <img src="<?=_upload_product_l.$mauhop[$i]['thumb']?>" alt="<?=$mauhop[$i]['ten']?>" />
                    </div>
                    <?php 
                        $d->reset();
                        $sql="select photo from #_product_hinhanh where hienthi =1 and id_pro='".$mauhop[$i]['id']."' order by stt,id desc";
                        $d->query($sql);
                        $mauhop_ha=$d->result_array();
                     ?>
                    <div class="pt-r">
                        <div class="slick-pt">
                            <?php for ($j=0; $j < count($mauhop_ha); $j++) { ?>
                                <div>
                                    <div style="padding:0px 5px;">
                                        <img src="<?=_upload_product_l.$mauhop_ha[$j]['photo']?>" alt="<?=$mauhop[$i]['ten']?>" />
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div>
                            <?=$mauhop[$i]['mota']?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="box-tab-con">
            <?php for ($i=0; $i < count($mauky); $i++) { ?>
                <div class="w-clear" style="margin-bottom:15px;">
                    <div class="pt-l">
                        <h3>
                            <?=$mauky[$i]['ten']?>
                        </h3>
                        <img src="<?=_upload_product_l.$mauky[$i]['thumb']?>" alt="<?=$mauky[$i]['ten']?>" />
                    </div>
                    <?php 
                        $d->reset();
                        $sql="select photo from #_product_hinhanh where hienthi =1 and id_pro='".$mauky[$i]['id']."' order by stt,id desc";
                        $d->query($sql);
                        $mauky_ha=$d->result_array();
                     ?>
                    <div class="pt-r">
                        <div class="slick-pt">
                            <?php for ($j=0; $j < count($mauky_ha); $j++) { ?>
                                <div>
                                    <div style="padding:0px 5px;">
                                        <img src="<?=_upload_product_l.$mauky_ha[$j]['photo']?>" alt="<?=$mauky[$i]['ten']?>" />
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div>
                            <?=$mauky[$i]['mota']?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.box-tab-tit div').click(function(event) {
            $('.box-tab-con').find('.slick-next').trigger('click');
        });
    });
</script>