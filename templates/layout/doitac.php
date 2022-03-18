<section id="doitac" class="doitac-top w-100  mt-40  mb-40 clearfix">
  <div class="container o-hidden">
    <div class="content w-100 mt-10 mb-10 clearfix">
	    <?php if(count($doitac)>0){ ?>
		<div class="box-doitac slickDoiTac">
			<?php for($i=0;$i<count($doitac);$i++){ ?>
			<div>
				<div class="box-doitac-item">
					<a href="<?=$doitac[$i]['link']?>" title="<?=$doitac[$i]['ten_'.$lang]?>">
						<img src="resize/186x90/2/<?=_upload_hinhanh_l.$doitac[$i]['photo_vi']?>" onerror="if (this.src != 'resize/285x160/2/images/no-image.png') this.src = 'resize/285x160/2/images/no-image.png';" alt="<?=$doitac[$i]['link']?>"  />
					</a>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
  </div>
</section>
