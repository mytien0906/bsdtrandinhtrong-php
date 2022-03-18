<section id="duan" class="duan-top w-100 clearfix">
	<div class="container">
		<div class="title bx-border brt-none pd-10 pb-5 w-100 clearfix">
			<h3 class="t-uppercase t-center pb-10 p-relative">Dự án mới</h3>
		</div>
		<div class="content bg-white w-100 mt-20 clearfix">
			<div class="box-duan slickDuan">
				<?php for($i=0;$i<count($duan);$i++){ ?>
				<div class="box-duan-item w-100">
					<div class="img">
						<a href="du-an/<?=$duan[$i]['tenkhongdau']?>.html" title="<?=$duan[$i]['ten_'.$lang]?>">
							<img src="resize/380x240/1/<?=_upload_baiviet_l.$duan[$i]['photo']?>" alt="<?=$duan[$i]['ten_'.$lang]?>">
						</a>
					</div>
					<div class="desc t-left">
						<h5>
							<a href="du-an/<?=$duan[$i]['tenkhongdau']?>.html" title="<?=$duan[$i]['ten_'.$lang]?>">
								<?=$duan[$i]['ten_'.$lang]?>
							</a>
						</h5>
						<p>
							<?=$duan[$i]['mota_'.$lang]?>
						</p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php /*
		<div class="content w-100 mt-20 t-center clearfix">
			<a href="du-an.html" class="readmore">
				Xem thêm &#10141;
			</a>
		</div>
		*/?>
	</div>
</section>