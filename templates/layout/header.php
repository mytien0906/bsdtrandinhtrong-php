<header id="header" class="header-top clearfix">
	<div class="container">
		<aside class="head-page-bottom w-100">
				<div class="banner">
					<div class="logo-left">
						<a href="" title="<?=$row_setting['title_'.$lang]?>"><img src="<?=_upload_hinhanh_l.$logo_top['photo']?>" alt="<?=$row_setting['title_'.$lang]?>"/></a>
					</div>
				</div>
				<div class="search" id="search">
					<div class="logo-right">
						<a href="" class="ds-block" title="<?=$row_setting['title_'.$lang]?>"><img class="ds-block" src="<?=_upload_hinhanh_l.$banner_top['photo']?>" alt="<?=$row_setting['title_'.$lang]?>"/></a>
					</div>
				</div>
				<div class="dangky">
					<p class="t-right">
						<?php if(!$_SESSION['logging']['id']){ ?>
						<a href="dang-ky.html" class="bg-green" title="Đăng ký"><i class="fa fa-user-plus"></i> Đăng ký thành viên</a>
						<a href="dang-nhap.html" class="bg-red" title="Đăng nhập"><i class="fa fa-sign-in"></i> Đăng nhập</a>
						<?php }else{ ?>
						<a href="thong-tin-ca-nhan.html" class="bg-green" title="Tài khoản"><i class="fa fa-user"></i> Thông tin tài khoản</a>
						<a href="quan-ly-tin-dang.html" class="bg-red" title="Tin đăng"><i class="fa fa-file-o"></i> Quản lý tin đăng</a>
						<?php } ?>

						<a href="dang-tin.html" class="btn-dtmp bg-green" title="Đăng tin miễn phí">Đăng tin miễn phí</a>
					</p>
				</div>
		</aside>
	</div>
</header><!-- /header -->
