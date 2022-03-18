<div class="r-tit">
    Sản phẩm bán chạy
</div>
<div class="r-box">
    <ul id="spbc">
        <?php for ($i=0; $i < count($spbc); $i++) { ?>
            <li>
                <div class="box-spbc">
                    <div class="box-spbc-img">
                        <a href="san-pham/<?=$spbc[$i]['tenkhongdau']?>">
                            <img src="<?=_upload_product_l.$spbc[$i]['thumb']?>" alt="<?=$spbc[$i]['ten']?>" />
                        </a>
                    </div>
                    <h3>
                        <a href="san-pham/<?=$spbc[$i]['tenkhongdau']?>">
                            <?=$spbc[$i]['ten']?>
                        </a>
                    </h3>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="r-tit">
    Tin tức - Sự kiện
</div>
<div class="r-box">
    <ul id="ttsk">
        <?php for ($i=0; $i < count($rtintuc); $i++) { ?>
            <li>
                <div class="box-rnews">
                    <div class="box-rnews-img">
                        <a href="tin-tuc/<?=$rtintuc[$i]['tenkhongdau']?>">
                            <img src="<?=_upload_tintuc_l.$rtintuc[$i]['thumb']?>" alt="<?=$rtintuc[$i]['ten']?>" />
                        </a>
                    </div>
                    <h3>
                        <a href="tin-tuc/<?=$rtintuc[$i]['tenkhongdau']?>">
                            <?=limitWord($rtintuc[$i]['ten'],15)?>
                        </a>
                    </h3>
                    <div>
                        <?=limitWord($rtintuc[$i]['mota'],20)?>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
    Quảng cáo phải
</div>