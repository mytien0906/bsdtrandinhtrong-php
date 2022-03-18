<div class="main-tit"><h2><?=$title_tcat?></h2></div>
<div class="content">
<?php if(count($tintuc)>0){?>
    <div class="w-clear">
    	<?php for($i=0;$i<count($tintuc);$i++) {?>
            <div class="box-dt">
                <a href="<?=$tintuc[$i]['link']?>">
                    <img src="<?=_upload_hinhanh_l.$tintuc[$i]['thumb']?>" alt="<?=_doitac?>" />
                </a>
            </div>
        <?php }?>
    </div>
    <div class="phantrang"><?=$paging['paging']?></div>
<?php }else{echo 'Nội dung đang được cập nhật!';}?>
</div>
