<div class="main-tit"><h2><?=$title_tcat?></h2></div>
<div class="content">
<?php if(count($tintuc)>0){?>
    <div class="w-clear">
    	<?php for($i=0;$i<count($tintuc);$i++) {?>
            <div class="box-newssp w-clear">
                <?php if($type!='gioithieu'){ ?>
                <div class="box-newssp-img">
                    <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>">
                        <img src="<?=_upload_tintuc_l.$tintuc[$i]['thumb']?>" alt="<?=$tintuc[$i]['ten']?>" />
                    </a>
                </div>
                <?php } ?>
                <h3>
                    <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>">
                        <?=$tintuc[$i]['ten']?>
                    </a>
                </h3>
                <div>
                    <?=limitWord($tintuc[$i]['mota'],60)?>
                </div>
            </div>
        <?php }?>
    </div>
    <div class="phantrang"><?=$paging['paging']?></div>
<?php }else{echo 'Nội dung đang được cập nhật!';}?>
</div>
