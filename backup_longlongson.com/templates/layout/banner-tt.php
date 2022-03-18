<div class="center">
	<a href="http://<?=$config_url?>/">
	    <img src="<?=_upload_hinhanh_l.$banner['photo']?>" alt="Banner" class="logo" />
	</a>
	<div class="banner-ab w-clear">
		<div class="banner-ab-log">
		<?php if(isset($_SESSION['logging'])){ ?>
			<a href="thong-tin-tai-khoan">
				Chào <?=$_SESSION['logging']['username']?>.
			</a>
		<?php }else{ ?>
			<a data-toggle="modal" data-target="#logModal" href="">
				Đăng nhập
				<span>Thanh toán thuận tiện hơn</span>
			</a>
		<?php } ?>
		</div>
		<div class="banner-ab-gh">
			<a href="gio-hang">
				<img src="img/i-gh.png" alt="Giỏ hàng" />
				<span><?=count($_SESSION['cart'])?></span>
			</a>
		</div>
	</div>
</div>