<div class="rtit w-clear">
	Đơn hàng (<?=count($_SESSION['cart'])?> sản phẩm)
	<a href="gio-hang">
		Thay đổi
	</a>
</div>
<div class="r-info">
	<?php 
        $max=count($_SESSION['cart']);
        for($i=0;$i<$max;$i++){
            $pid=$_SESSION['cart'][$i]['productid'];
            $q=$_SESSION['cart'][$i]['qty'];
            $ppro=get_product($pid);
    ?>
    <div class="box-spr w-clear">
    	<div class="box-spr-img">
    		<a href="san-pham/<?=$ppro['tenkhongdau']?>" target="_blank">
                <img src="<?=_upload_product_l.$ppro['thumb']?>" alt="<?=$ppro['ten']?>" />
            </a>
    	</div>
    	<h3>
    		<a href="san-pham/<?=$ppro['tenkhongdau']?>" target="_blank" class="gh-name">
                <?=$ppro['ten']?>
            </a>
    	</h3>
    	<div class="box-spr-gia">
    		<div>
    			<?=number_format($ppro['gia'],0,'','.').'đ'?>
    		</div>
    		<div class="box-spr-x">
    			x<?=$q?>
    		</div>
    		<div>
    			<?=number_format($ppro['gia']*$q,0, '', '.')?>đ
    		</div>
    	</div>
    </div>
    <?php } ?>
    <div class="w-clear">
    	<div class="r-info-l">
    		Tổng tiền
    	</div>
    	<div class="r-info-r">
    		<?=number_format(get_order_total(),0, ',', '.')?>đ
    	</div>
    </div>
</div>