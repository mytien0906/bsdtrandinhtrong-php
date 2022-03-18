<div class="tab-mausac">
    <a href="mau-sac" class="active">
        Không gian phối màu
    </a>
    |
    <a href="javascript:void()">
        Mã màu Tony
    </a>
    |
    <a href="bang-mau-tony">
        Bảng màu Tony
    </a>
</div>
<div class="content">
    <div class="main-tit"><h2><?=$title_tcat?></h2></div>
    <?php if($idl==''){ ?>
        <?php if(count($product)>0){?>
        <div class="w-clear">
            <?php for($i=0;$i<count($product);$i++){ ?>
                <div class="box-sm <?php if($i==0){echo ' active';} ?>" style="z-index: <?=$i+1?>;width:calc( (100% - 615px) / <?=count($product)-1?>);">    
                    <div class="box-sm-img">
                        <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>.l">
                            <img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" />
                        </a>
                    </div>
                    <h3>
                        <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>.l">
                            <?=$product[$i]['ten']?>
                        </a>
                    </h3>
                </div>
            <?php }?>
        </div>
        <?php }else{echo _dangcapnhat;}?>
    <?php }else{ ?>
        <?php if(count($product)>0){?>
        <div class="w-clear">
            <?php for($i=0;$i<count($product);$i++){ ?>
                <div class="box-sm <?php if($i==0){echo ' active';} ?>" style="z-index: <?=$i+1?>;width:calc( (100% - 615px) / <?=count($product)-1?>);">    
                    <div class="box-sm-img">
                        <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>">
                            <img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" />
                        </a>
                    </div>
                    <h3>
                        <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>">
                            <?=$product[$i]['ten']?>
                        </a>
                    </h3>
                </div>
            <?php }?>
        </div>
        <?php }else{echo _dangcapnhat;}?>
    <?php } ?>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.box-sm').mouseover(function(event) {
            if(!$(this).hasClass('active'))
            {
                $('.box-sm').not($(this)).removeClass('active');
                $(this).addClass('active');
            }
        });
    });
</script>