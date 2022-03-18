<div class="main-tit">
    <h2>
        Màu sắc
    </h2>
</div>
<div class="tab-mausac">
    <a href="mau-sac">
        Không gian phối màu
    </a>
    |
    <a href="javascript:void()" class="active">
        Mã màu Tony
    </a>
    |
    <a href="bang-mau-tony">
        Bảng màu Tony
    </a>
</div>
<div class="content center1">
    <div class="nhom-mau-tit"><?=$product[0]['ten']?></div>
    <div class="nhom-mau w-clear">
        <?php for ($i=0; $i < count($product); $i++) { ?>
            <div <?php if($i==0){echo 'class="active"';} ?>>
                <img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" />
            </div>
        <?php } ?>
    </div>
    <div>
        <?php for ($i=0; $i < count($product); $i++) { ?>
        <?php 
            # Lay tab san pham
            $d->reset();
            $sql="select ten_$lang as ten,thumb from #_product_tab where hienthi=1 and id_pro='".$product[$i]['id']."' order by stt,id desc";
            $d->query($sql);
            $product_tab=$d->result_array();

            $d->reset();
            $sql="select ten_$lang as ten,thumb from #_product_tab where hienthi=1 and id_pro='".$product[$i]['id']."' and noibat>0 order by stt,id desc";
            $d->query($sql);
            $product_tabnb=$d->result_array();
         ?>
        <div class="tab-mau">
            <?php if(count($product_tabnb)>0){ ?>
            <div class="box-maunb">
                <p>Màu phổ biến</p>
                <div class="w-clear">
                <?php for ($j=0; $j < count($product_tabnb); $j++) { ?>
                    <div class="item">
                        <img src="<?=_upload_product_l.$product_tabnb[$j]['thumb']?>" alt="<?=$product_tabnb[$j]['ten']?>" />
                        <div class="item-hv">
                            <h3>
                                <?=$product_tabnb[$j]['ten']?>
                            </h3>
                        </div>
                    </div>        
                <?php } ?>
                </div>
            </div>
            <?php } ?>
            <div class="box-mau w-clear">
                <?php for ($j=0; $j < count($product_tab); $j++) { ?>
                    <div class="item">
                        <img src="<?=_upload_product_l.$product_tab[$j]['thumb']?>" alt="<?=$product_tab[$j]['ten']?>" />
                        <div class="item-hv">
                            <h3>
                                <?=$product_tab[$j]['ten']?>
                            </h3>
                        </div>
                    </div>        
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        //Tab ma mau
        $('.nhom-mau div').click(function(event) {
            if(!$(this).hasClass('active'))
            {
                $('.nhom-mau-tit').html($(this).children('img').attr('alt'));
                $('.nhom-mau div').not($(this)).removeClass('active');
                $(this).addClass('active');
                var i =parseInt($(this).index())+1;
                $('.tab-mau').hide();
                $('.tab-mau:nth-child('+i+')').fadeIn();
            }
        });
    });
</script>