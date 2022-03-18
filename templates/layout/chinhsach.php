<section id="chinhsach" class="chinhsach-top mt-20 mb-20 clearfix">
	<div class="container o-hidden">
		<div class="chinhsach-title">
			<h4>Vì sao chọn chúng tôi</h4>
		</div>
		<ul class="chinhsach mt-20 clearfix">
			<?php for($i=0;$i<count($visao);$i++){ ?>
			<li class="bx-border pd-10 f-left">
				<a href="chinh-sach/<?=$visao[$i]['tenkhongdau']?>.html" title="<?=$visao[$i]['ten_'.$lang]?>">
					<div>
						<p>
							<span><img src="<?=_upload_baiviet_l.$visao[$i]['photo']?>" alt="<?=$visao[$i]['ten_'.$lang]?>"></span>
						</p>
						<div>
							<h5><?=$visao[$i]['ten_'.$lang]?></h5>
						</div>
					</div>
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
</section>