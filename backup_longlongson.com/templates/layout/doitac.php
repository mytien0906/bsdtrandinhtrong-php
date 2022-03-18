<div class="slick-doitac">
    <?php for ($i=0; $i < count($doitac); $i++) { ?>
        <div>
            <div class="box-dt">
                <a href="<?=$doitac[$i]['link']?>" target="_blank">
                    <img src="<?=_upload_hinhanh_l.$doitac[$i]['photo']?>" alt="Đối tác" />
                </a>
            </div>
        </div>
    <?php } ?>
</div>