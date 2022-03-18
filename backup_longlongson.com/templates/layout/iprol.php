<?php for ($i=0; $i < count($mproduct); $i++) { ?>
    <div class="item">
        <div class="item-img">
            <a href="san-pham/<?=$mproduct[$i]['tenkhongdau']?>.l">
                <img src="<?=_upload_product_l.$mproduct[$i]['thumb']?>" alt="<?=$mproduct[$i]['ten']?>" />
            </a>
        </div>
        <h3>
            <a href="san-pham/<?=$mproduct[$i]['tenkhongdau']?>.l">
                <?=$mproduct[$i]['ten']?>
            </a>
        </h3>
    </div>
<?php } ?>