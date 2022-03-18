<div class="w-duan">
	<div class="center">
		<div class="main-tit">
			<h2><?=_duan?></h2>
		</div>
	</div>
	<div class="w-clear">
		<?php for($i=0;$i<count($duan);$i++) {?>
	        <div class="box-duan w-clear">
	        	<a href="du-an/<?=$duan[$i]['tenkhongdau']?>">
                    <img src="<?=_upload_product_l.$duan[$i]['thumb']?>" alt="<?=$duan[$i]['ten']?>" />
                </a>
	            <h3>
	                <a href="du-an/<?=$duan[$i]['tenkhongdau']?>">
	                    <?=$duan[$i]['ten']?>
	                </a>
	            </h3>
	        </div>
	    <?php }?>
	</div>
</div>


<div class="bong"></div>