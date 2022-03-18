<header id="header" class="header-top clearfix">
	<div class="container">
		<aside class="head-page-bottom w-100">
			<div class="banner">
				<div class="logo-left">
					<a href="" title="<?= $row_setting['title_' . $lang] ?>"><img src="<?= _upload_hinhanh_l . $logo_top['photo'] ?>" alt="<?= $row_setting['title_' . $lang] ?>" /></a>
				</div>
			</div>
			<div class="search" id="search">
				<div class="logo-right">
					<a href="" class="ds-block" title="<?= $row_setting['title_' . $lang] ?>"><img class="ds-block" src="<?= _upload_hinhanh_l . $banner_top['photo'] ?>" alt="<?= $row_setting['title_' . $lang] ?>" /></a>
				</div>
			</div>
				<!-- <p class="t-right">
					<?php if (!$_SESSION['logging']['id']) { ?>
						<a href="dang-ky.html" class="bg-green" title="Đăng ký"><i class="fa fa-user-plus"></i> Đăng ký thành viên</a>
						<a href="dang-nhap.html" class="bg-red" title="Đăng nhập"><i class="fa fa-sign-in"></i> Đăng nhập</a>
					<?php } else { ?>
						<a href="thong-tin-ca-nhan.html" class="bg-green" title="Tài khoản"><i class="fa fa-user"></i> Thông tin tài khoản</a>
						<a href="quan-ly-tin-dang.html" class="bg-red" title="Tin đăng"><i class="fa fa-file-o"></i> Quản lý tin đăng</a>
					<?php } ?>

					<a href="dang-tin.html" class="btn-dtmp bg-green" title="Đăng tin miễn phí">Đăng tin miễn phí</a>
				</p> -->
				<div class="headtop">
				<ul>
					<li>
						<a href="" title="">Trang chủ</a>
						<a href="chinh-sach">Chính sách</a>
						<a href="tuyen-dung">Tuyển dụng</a></li>
					</li>
				</ul>
			</div>
		</aside>
		<div class="search-wrap">
			<div class="slider-left" id="searchid">
				<div class="head-search">
					<h4>Công cụ tìm kiếm</h4>
				</div>
				<div class="tab-search">
					<span class="active" data-id="65">Nhà đất bán</span>
					<span data-id="60">Nhà đất cho thuê</span>
				</div>
				<div class="box-searchnc">
					<form name="box-search" id="box-search" method="get" action="index.php">
						<input type="hidden" name="com" value="search">
						<input type="text" name="keyword" id="keyword" class="text-search input-control f-left bx-border" value="<?= $_GET['keyword'] ?>" placeholder="<?= _search ?>">
						<?php /* <select name="id_list" id="id_list">
                            <option value="0">Danh mục cấp 1</option>
                            <?php foreach ($sanpham_menu as $k => $v) { ?>
                            <option value="<?=$v['id']?>" <?=($_GET['id_list']==$v['id']) ? 'selected':''?>><?=$v['ten']?></option>
                            <?php } ?>
                        </select>*/ ?>
						<?php
						if (!empty($_GET['id_cat'])) {
							$sanpham_catsearch = get_result_array("select tenkhongdau,id,ten_$lang as ten,type,checkgia from #_baiviet_cat where hienthi=1 and id_list='" . (int)$_GET['id_list'] . "' and type='san-pham' order by stt asc,id desc");
						}
						?>
						<select name="id_cat" id="id_cat">
							<option value="0">Khoảng giá</option>
							<?php if (!empty($_GET['id_cat'])) {
								foreach ($sanpham_catsearch as $k => $v) { ?>
									<option value="<?= $v['id'] ?>" <?= ($_GET['id_cat'] == $v['id']) ? 'selected' : '' ?>><?= $v['ten'] ?></option>
							<?php }
							} ?>
						</select>
						<select name="id_area" id="id_area">
							<?php foreach ($config['dangtin']['dientich'] as $k => $v) { ?>
								<option value="<?= $k ?>" <?= ($_GET['id_area'] == $k) ? 'selected' : '' ?>><?= $v ?></option>
							<?php } ?>
						</select>
						<?php /*<?php
                            if(!empty($_GET['id_item'])){
                                $sanpham_itemsearch = get_result_array("select tenkhongdau,id,ten_$lang as ten,type,checkgia from #_baiviet_item where hienthi=1 and id_cat='".(int)$_GET['id_cat']."' and type='san-pham' order by stt asc,id desc");
                            }
                        ?>
                        <select name="id_item" id="id_item">
                            <option value="0">Danh mục cấp 3</option>
                            <?php if(!empty($_GET['id_item'])){ foreach ($sanpham_itemsearch as $k => $v) { ?>
                            <option value="<?=$v['id']?>" <?=($_GET['id_item']==$v['id']) ? 'selected':''?>><?=$v['ten']?></option>
                            <?php } } ?>
                        </select>*/ ?>
						<select name="id_city" id="id_city">
							<option value="0">Địa điểm</option>
							<?php foreach ($tinh_binhdinh as $k => $v) { ?>
								<option value="<?= $v['id'] ?>" <?= ($_GET['id_city'] == $v['id'] || $v['id'] == 14) ? 'selected' : '' ?>><?= $v['ten'] ?></option>
							<?php } ?>
						</select>
						<!-- <select name="id_dist" id="id_dist">
							<option value="0">Quận / huyện</option>
							<?php
							if (!empty($_GET['id_city'])) {
								$sanpham_dist = get_result_array("select tenkhongdau,id,ten from #_place_dist where hienthi=1 and id_city='" . (int)$_GET['id_city'] . "' order by id desc");
							} else {
								$sanpham_dist = get_result_array("select tenkhongdau,id,ten from #_place_dist where hienthi=1 and id_city='14' order by id desc");
							}
							foreach ($sanpham_dist as $k => $v) { ?>
								<option value="<?= $v['id'] ?>" <?= ($_GET['id_dist'] == $v['id'] || $v['id'] == 168) ? 'selected' : '' ?>><?= $v['ten'] ?></option>
							<?php } ?>
						</select> -->
						<select name="id_huongnha" id="id_huongnha">
							<option value="0">Chọn hướng nhà</option>
							<?php foreach ($config['dangtin']['huongnha'] as $k => $v) { ?>
								<option value="<?= $k ?>" <?= ($_GET['id_huongnha'] == $k) ? 'selected' : '' ?>><?= $v ?></option>
							<?php } ?>
						</select>
						
						<div class="row-search">
							<button type="submit" class="btn-searchnc f-right"><i class="fa fa-search"></i></button>
						</div>
						<!-- <div class="row-search">
							<p class="t-center">Có <span class="cl-red"><?= number_format($count_tin['dem'], 0, ',', '.') ?></span> tin đăng đã được duyệt</p>
						</div> -->
					</form>
				</div>
			</div>
		</div>
	</div>
</header><!-- /header -->