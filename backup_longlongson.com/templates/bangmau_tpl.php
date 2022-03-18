<div class="content">
    <div class="main-tit"><h2><?=$title_tcat?></h2></div>
    <?php if(count($product)>0){?>
    <div class="w-clear">
    	<?php for($i=0;$i<count($product);$i++){ ?>
        	<div class="box-sp box-bangmau" data-id="<?=$product[$i]['id']?>">    
                <div class="box-sp-img">
                    <a href="#"><img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" /></a>
                </div>
                <h3>
                    <a href="#">
                        <?=$product[$i]['ten']?>
                    </a>
                </h3>
            </div>
        <?php }?>
    </div>
    <div class="phantrang"><?=$paging['paging']?></div>
    <?php }else{echo _dangcapnhat;}?>
</div>
<script type="text/javascript" src="js/turn.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.box-bangmau').click(function(event) {
            $('#load').show();
            var id=$(this).attr('data-id');
            $.ajax({
                url: 'ajax/bangmau.php',
                type: 'POST',
                dataType: 'html',
                data: {id: id},
                success:function(res){
                    $('#popup').html(res);
                    $('#popup').fadeIn();
                    $('#load').hide();
                }
            })
            return false;
        });
    });
    function close_pop()
    {
        $('#popup').html('');
        $('#popup').hide();
    }
</script>