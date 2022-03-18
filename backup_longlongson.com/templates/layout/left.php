<?php if($com=='san-pham'){ ?>
<div class="left-box">
	<div class="left-tit">
		Sản phẩm
	</div>
	<ul class="uleft">
		<?php for ($i=0; $i < count($msanpham); $i++) { ?>
        <li>
            <a href="san-pham/<?=$msanpham[$i]['tenkhongdau']?>.l">
                <?=$msanpham[$i]['ten']?>
            </a>
        </li>
        <?php }?>
	</ul>
</div>
<?php } ?>

<?php if($com=='dich-vu'){ ?>
<div class="left-box">
	<div class="left-tit">
		Dịch vụ
	</div>
	<ul class="uleft">
		<?php for ($i=0; $i < count($mdichvu); $i++) { ?>
        <li>
            <a href="dich-vu/<?=$mdichvu[$i]['tenkhongdau']?>.l">
                <?=$mdichvu[$i]['ten']?>
            </a>
        </li>
        <?php }?>
	</ul>
</div>
<?php } ?>

<?php if($com=='tin-tuc'){ ?>
<div class="left-box">
	<div class="left-tit">
		Tin tức
	</div>
	<ul class="uleft">
		<?php for ($i=0; $i < count($mtintuc); $i++) { ?>
        <li>
            <a href="tin-tuc/<?=$mtintuc[$i]['tenkhongdau']?>.l">
                <?=$mtintuc[$i]['ten']?>
            </a>
        </li>
        <?php }?>
	</ul>
</div>
<?php } ?>


<?php if($com=='tuyen-dung'){ ?>
<div class="left-box">
	<div class="left-tit">
		Tuyển dụng
	</div>
	<ul class="uleft">
		<?php for ($i=0; $i < count($mtuyendung); $i++) { ?>
        <li>
            <a href="tuyen-dung/<?=$mtuyendung[$i]['tenkhongdau']?>">
                <?=$mtuyendung[$i]['ten']?>
            </a>
        </li>
        <?php }?>
        <li>
            <a href="nop-ho-so-truc-tuyen">
                Nộp hồ sơ trực tuyến
            </a>
        </li>
	</ul>
</div>
<?php } ?>

<div class="left-box ttnb">
	<div class="ttnb-tit">
		Tin tức mới nhất
	</div>
	<ul>
		<?php for ($i=0; $i < count($newsnb); $i++) { ?>
			<li>
				<div class="box-newsnb w-clear">
					<a href="tin-tuc/<?=$newsnb[$i]['tenkhongdau']?>">
						<img src="timthumb.php?src=<?=_upload_tintuc_l.$newsnb[$i]['photo']?>&w=39&h=39&zc=1&q=100" alt="<?=$newsnb[$i]['ten']?>" />
					</a>
					<h3>
						<a href="tin-tuc/<?=$newsnb[$i]['tenkhongdau']?>">
							<?=$newsnb[$i]['ten']?>
						</a>
					</h3>
				</div>
			</li>
		<?php } ?>
	</ul>
</div>
