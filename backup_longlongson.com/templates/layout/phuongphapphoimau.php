<div class="center w-clear">
    <div class="col-1">
        <div class="pp-tit">
            Phương pháp phối màu khác
        </div>
        <div class="pp-mau w-clear">
            <?php for ($i=0; $i < count($pp_tab); $i++) { ?>
                <img src="<?=_upload_product_l.$pp_tab[$i]['thumb']?>" alt="Phương pháp phối màu khác" />
            <?php } ?>
        </div>
        <div>
            <img src="img/i-nhommau.png" alt="Nhóm màu" />
        </div>
    </div>
    <div class="col-2">
        <?php for ($i=0; $i < count($pp_tab); $i++) { ?>
            <img src="<?=_upload_product_l.$pp_tab[$i]['photo1']?>" alt="Phương pháp phối màu khác" <?php if($i==0){echo 'class="active"';} ?>/>
        <?php } ?>
    </div>
    <div class="col-3">
        <?php for ($i=0; $i < count($pp); $i++) { ?>
            <div class="item" data-id="<?=$pp[$i]['id']?>">
                <img src="<?=_upload_product_l.$pp[$i]['thumb']?>" alt="<?=$pp[$i]['ten']?>" />
                <h3>
                    <?=$pp[$i]['ten']?>
                </h3>
            </div>
        <?php } ?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.pp-mau img').click(function(event) {
            if(!$(this).hasClass('active'))
            {
                var i=parseInt($(this).index())+1;
                $('.col-2 img').removeClass('active');
                $('.col-2 img:nth-child('+i+')').addClass('active');
            }
            
        });

        $('.col-3 .item').click(function(event) {
            var id=$(this).attr('data-id');
            $.ajax({
                url: 'ajax/phuongphapphoimau.php',
                type: 'POST',
                dataType: 'json',
                data: {id: id},
                beforeSend:function()
                {
                    $('#phuongphapphoimau .col-2').html('<img src="img/loading.gif" class="active" style="display: block;margin: auto;";/>');
                },
                success:function(res)
                {
                    $('.pp-mau').html(res.a);
                    $('#phuongphapphoimau .col-2').html(res.b);
                    $('.pp-mau img').click(function(event) {
                        if(!$(this).hasClass('active'))
                        {
                            var i=parseInt($(this).index())+1;
                            $('.col-2 img').removeClass('active');
                            $('.col-2 img:nth-child('+i+')').addClass('active');
                        }
                        
                    });
                }
            })
        });
    });
</script>