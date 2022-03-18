<section class="sanphamall-top mt-20 clearfix">
	<div class="container">
		<div class="title bx-border w-100">
			<!-- <h4 class="t-uppercase ds-inline-block p-relative">
				<a href="bat-dong-san" title="BĐS nổi bật">BĐS nổi bật</a>
			</h4> -->
			<ul>
				<?php for ($i = 0; $i < count($sanpham_menu); $i++) { ?>
					<li class="w-100">
						<a href="<?= $sanpham_menu[$i]['tenkhongdau'] ?>" class="cursor-pointer border-bottom"><?= $sanpham_menu[$i]['ten'] ?></a>
					</li>

					<div class="content mt-20 w-100 clearfix">
						<div class="show-product">
							<?php $id_list = $sanpham_menu[$i]['id'] ?>
							<?php $product_menu = get_result_array("select id,ten_$lang as ten, 
							mota_$lang as mota,tenkhongdau,photo,thumb,type,giaban,giacu,id_city,
							id_dist,id_ward,id_list,id_user,ngaytao,hoten,donvi,dientich,giachu,id_giatinh 
							from #_baiviet where id_list = '" . $id_list . "' and hienthi=1 and type='san-pham' 
							order by stt asc,id desc limit 5");
							//  var_dump($product_menu);die();
							?>
							<?php foreach ($product_menu as $pro) {
								// var_dump($pro).die();
								$city = getRows($product_menu[$i]['id_city'], 'place_city', array('ten', 'id', 'tenkhongdau'));
								$dist = getRows($product_menu[$i]['id_dist'], 'place_dist', array('ten', 'id', 'tenkhongdau'));
								$list = getRows($product_menu[$i]['id_list'], 'baiviet_list', array('ten_' . $lang, 'id', 'tenkhongdau', 'checkgia'));
							?>
								<div class="product-slide cl-1 bx-border product-hover">
									<div class="product w-100">
										<div class="product-img">
											<a href="bat-dong-san/<?= $pro['tenkhongdau'] ?>" title="<?= $pro['ten'] ?>">
												<img src="resize/440x324/1/<?= _upload_baiviet_l . $pro['photo'] ?>" alt="<?= $pro['ten'] ?>">
											</a>
											<div class="product-desc" onclick="window.location.href='bat-dong-san/<?= $pro['tenkhongdau'] ?>'">
												<p>
													<i class="fa fa-search"></i> Xem chi tiết
												</p>
											</div>
										</div>
										<div class="product-title">
											<h4 class="t-left "><a href="bat-dong-san/<?= $pro['tenkhongdau'] ?>" title="<?= $pro['ten'] ?>">
													<?= $pro['ten'] ?>
												</a></h4>
											<p class="t-left">
												<span class="price"><?= ($pro['giaban'] != 0) ? getPriceBDS($pro['giachu'], $pro['donvi'], $pro['id_giatinh']) : 'Liên hệ' ?></span>
											</p>
											<p>
												<span class="fa fa-globe"></span> <?= ($pro['dientich'] == '') ? '300 m2' : $pro['dientich'] . ' m2' ?>
											</p>
											<!-- <p>
												<span class="fa fa-building"></span>
												<?php if ($list) { ?>
													<a href="<?= $list['tenkhongdau'] ?>"><?= $list['ten_' . $lang] ?></a>
												<?php } ?>
											</p> -->
											<p>
												<span class="fa fa-map-marker"></span>
												<?php
												if ($dist) { ?>
													<a href="khu-vuc/qh-<?= $dist['tenkhongdau'] ?>-<?= $dist['id'] ?>"><?= $dist['ten'] ?></a>,
												<?php } ?>
												<?php if ($city) { ?>
													<a href="khu-vuc/tt-<?= $city['tenkhongdau'] ?>-<?= $city['id'] ?>"><?= $city['ten'] ?></a>
												<?php } ?>
											</p>
											<!-- <div class="user t-right">
												<p class="ds-inline-block"><span class="fa fa-calendar"></span> <?= date('d/m/Y', $pro['ngaytao']) ?></p>
												<?php if ($userp) { ?>
													<p class="ds-inline-block"><span class="fa fa-user"></span> <span><?= $userp['hoten'] ?></span></p>
												<?php } else { ?>
													<p class="ds-inline-block"><span class="fa fa-user"></span> <span><?= ($pro['hoten'] == '') ? 'Admin' : $pro['hoten'] ?></span></p>
												<?php } ?>
											</div> -->
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="btn-load-block">

						<a class="load-more" href="<?= $sanpham_menu[$i]['tenkhongdau'] ?>" title="Xem thêm tin khác">Xem thêm tin khác</a>
					</div>
				<?php } ?>
			</ul>
		</div>

		<div class="content w-100 mt-20 clearfix text-center">
			<!-- <div class="show-product">
		    <div class="w-100 bx-border pl-10 pr-10">
		      <div class="pagination t-center"><?= $paging ?></div>
		    </div>
		  </div> -->

		</div>
	</div>
</section>