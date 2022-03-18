<div class="center w-clear">
    <?php for($i=0;$i<count($tintucnb);$i++) {?>
        <div class="box-newssp w-clear">
            <?php if($i==0){ ?>
            <div class="box-newssp-cat">
                Sự kiện
            </div>
            <?php } ?>
            <?php if($i==1){ ?>
            <div class="box-newssp-cat">
                Cộng đồng
            </div>
            <?php } ?>
            <?php if($i==2){ ?>
            <div class="box-newssp-cat">
                Đối tác
            </div>
            <?php } ?>
            <div class="box-newssp-img">
                <div class="box-newssp-date">
                    <?=date('M',$tintucnb[$i]['ngaytao'])?>
                    <span>
                        <?=date('d',$tintucnb[$i]['ngaytao'])?>
                    </span>
                    <?=date('Y',$tintucnb[$i]['ngaytao'])?>
                </div>
                <a href="tin-tuc/<?=$tintucnb[$i]['tenkhongdau']?>">
                    <img src="<?=_upload_tintuc_l.$tintucnb[$i]['thumb']?>" alt="<?=$tintucnb[$i]['ten']?>" />
                </a>
            </div>
            <h3>
                <a href="tin-tuc/<?=$tintucnb[$i]['tenkhongdau']?>">
                    <?=$tintucnb[$i]['ten']?>
                </a>
            </h3>
            <div>
                <?=limitWord($tintucnb[$i]['mota'],40)?>
            </div>
        </div>
    <?php }?>
</div>