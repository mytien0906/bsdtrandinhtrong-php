<!-- CSS Vs JS MagicZoom -->
<link href="magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="magiczoomplus/magiczoomplus.js" type="text/javascript"></script>

<!-- Style CSS MagicZoom Plus -->
<link href="magiczoomplus/magiczoomplus-style.css" rel="stylesheet" type="text/css" media="screen"/>

<div class="content">
    <div class="w-clear">
        <div class="ct-l">
            <div class="ct-img">
                <a id="Zoom-1" class="MagicZoom" href="<?=_upload_product_l.$product_detail['photo']?>" title="<?=$product_detail['ten']?>">
                    <img src="<?=_upload_product_l.$product_detail['photo']?>" alt="<?=$product_detail['ten']?>">
                </a>
            </div>
            <?php if(count($list_photo)>0){ ?>
            <div class="ct-img-list">
            <!-- Thumb list zoom -->
                <div class="slick-img-thumb">
                    <?php for ($i=0; $i < count($list_photo); $i++) { ?>
                        <div>
                            <div style="padding:0px 5px;">
                                <a data-zoom-id="Zoom-1" href="<?=_upload_product_l.$list_photo[$i]['photo']?>" title="<?=$product_detail['ten']?>" data-image="<?=_upload_product_l.$list_photo[$i]['photo']?>">
                                    <img src="<?=_upload_product_l.$list_photo[$i]['thumb']?>" alt="<?=$product_detail['ten']?>" class="thumb"/>
                                </a>    
                            </div>
                        </div>
                    <?php } ?>
                        <div>
                            <div style="padding:0px 5px;">
                                <a data-zoom-id="Zoom-1" href="<?=_upload_product_l.$product_detail['photo']?>" title="<?=$product_detail['ten']?>" data-image="<?=_upload_product_l.$product_detail['photo']?>">
                                    <img src="<?=_upload_product_l.$product_detail['thumb']?>" alt="<?=$product_detail['ten']?>" class="thumb" />
                                </a>    
                            </div>
                        </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="ct-r">
            <div class="ct-tit"><h2><?=$product_detail['ten']?></h2></div>
            <div class="ct-sp">
                <?=_masp?>: <?=$product_detail['masp']?>
            </div>
            <?php if($product_detail['gia']>0 && $product_detail['giakm']>0){ ?>
            <div class="ct-sp ct-sp-gia del">
                <?=_gia?>: <span><?=number_format($product_detail['gia'],0,'','.')?>đ</span>
            </div>
            <div class="ct-sp ct-sp-gia">
                Giá khuyến mãi: <span><?=number_format($product_detail['giakm'],0,'','.')?>đ</span>
            </div>
            <?php }else{ ?>
            <div class="ct-sp ct-sp-gia">
                <?=_gia?>: <span><?=($product_detail['gia']>0)?number_format($product_detail['gia'],0,'','.').'đ':_lienhe?></span>
            </div>
            <?php } ?>
            
            <div class="ct-sp">
                <?=_luotxem?>: <?=$product_detail['luotxem']?>
            </div>
            <div class="ct-sp ct-sp-btn">
                <input type="number" id="quality" class="input" style="width:50px;text-align:center;padding: 5px 5px 3px;" value="1" min="1" max="99">
                <button type="button" class="ajax_cart" data-id="<?=$product_detail['id']?>">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Cho vào giỏ hàng
                </button>
            </div>
            <div class="addthis_native_toolbox"></div>
        </div>
    </div>

    <div class="main-tit" style="margin-top:20px;">
        <h2>
            <?=_thongtinchitiet?>
        </h2>
    </div>
    <div>
        <?=$product_detail['noidung']?>
    </div>

    <?php if(count($product)>0){?>
    <div class="main-tit" style="margin-top:20px;">
        <h2>
            <?=_sanphamcungloai?>
        </h2>
    </div>
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
                    <?=($product[$i]['gia']>0)?number_format($product[$i]['gia'],0,'','.').'đ':'Liên hệ'?>
                </div>
                <?php } ?>
            </div>
        <?php }?>
    </div>
    <?php }?>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.sc-tab-tit').click(function(event) {
            $(this).next('.sc-tab').stop(true, true).slideToggle();
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ajax_cart').click(function(event) {
            /* Xu ly gio hang*/
            var id=$(this).attr('data-id');
            var sl=$('#quality').val();
            $.ajax({
                url: 'ajax/giohang.php',
                type: 'POST',
                dataType: 'json',
                data: {id: id,sl:sl},
                beforeSend:function(){
                    $('.ajax_cart').html('<img src="img/load.gif" width="25"/> Vui lòng đợi');
                },
                success:function(res){
                    $('.ajax_cart').html('<i class="fa fa-shopping-cart" aria-hidden="true"></i> Cho vào giỏ hàng');
                    $('.banner-ab-gh span,.giohang-tit span').html(res.soluong);
                    $('.giohang-thanhtien span').html(res.tongtien);
                    $('.tbl-giohang').html(res.giohang);
                    $('#giohang').addClass('active');
                }
            })
        });
    });
</script>