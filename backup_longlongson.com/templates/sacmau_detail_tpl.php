<!-- CSS Vs JS MagicZoom -->
<link href="magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="magiczoomplus/magiczoomplus.js" type="text/javascript"></script>

<!-- Style CSS MagicZoom Plus -->
<link href="magiczoomplus/magiczoomplus-style.css" rel="stylesheet" type="text/css" media="screen"/>

<div class="main-tit">
    <h2>
        <?=$product_detail['ten']?>
    </h2>
</div>
<div class="content">
	<?php if(count($product_tab)>0){ ?>
    <div class="w-clear">
        <div class="mn-l">
            <?php for ($i=0; $i < count($product_tab); $i++) { ?>
            	<img src="<?=_upload_product_l.$product_tab[$i]['photo1']?>" alt="<?=$product_detail['ten']?>" <?php if($i==0){echo 'class="active"';} ?> />
            <?php } ?>
        </div>
        <div class="mn-r sm-r w-clear">
            <?php for ($i=0; $i < count($product_tab); $i++) { ?>
            <div <?php if($i==0){echo 'class="active"';} ?>>
            	<img src="<?=_upload_product_l.$product_tab[$i]['thumb']?>" alt="<?=$product_detail['ten']?>" />
            </div>
            <?php } ?>
        </div>
    </div>        
    <?php }else{ ?>
	<p>Nội dung đang cập nhật!</p>
    <?php } ?>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.mn-r div').click(function(event) {
            if(!$(this).hasClass('active'))
            {
                var i=parseInt($(this).index())+1;
                $('.mn-l img').removeClass('active');
                $('.mn-l img:nth-child('+i+')').addClass('active');
                $('.mn-r div').removeClass('active');
                $(this).addClass('active');
            }
			
		});
	});
</script>