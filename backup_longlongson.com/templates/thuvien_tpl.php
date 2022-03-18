<div class="main-tit"><h2><?=$title_tcat?></h2></div>
<div class="content">
<?php if(count($tintuc)>0){?>
    <div class="w-clear">
    	<?php for($i=0;$i<count($tintuc);$i++) {?>
            <div class="box-thuvien w-clear">
                <div class="box-thuvien-img">
                    <a class="fancybox" rel="thuvien" title="<?=$tintuc[$i]['ten']?>" href="<?=_upload_hinhanh_l.$tintuc[$i]['photo']?>">
                        <img src="<?=_upload_hinhanh_l.$tintuc[$i]['thumb']?>" alt="<?=$tintuc[$i]['ten']?>" />
                    </a>
                </div>
                <h3>
                    <a class="fancybox" title="<?=$tintuc[$i]['ten']?>" rel="thuvien" href="<?=_upload_hinhanh_l.$tintuc[$i]['photo']?>">
                        <?=$tintuc[$i]['ten']?>
                    </a>
                </h3>
            </div>
        <?php }?>
    </div>
    <div class="phantrang"><?=$paging['paging']?></div>
<?php }else{echo 'Nội dung đang được cập nhật!';}?>
</div>
