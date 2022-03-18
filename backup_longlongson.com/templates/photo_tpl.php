<div class="main-tit"><h2><?=$title_tcat?></h2></div>
<div class="content">
<?php if(count($tintuc)>0){?>
    <div class="w-clear">
    	<?php for($i=0;$i<count($tintuc);$i++) {?>
            <div class="box-news w-clear">
                <div class="box-news-img">
                    <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>"><img src="<?=_upload_tintuc_l.$tintuc[$i]['thumb']?>" alt="<?=$tintuc[$i]['ten']?>" /></a>
                </div>
                <h3><a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>"><?=$tintuc[$i]['ten']?></a></h3>
                <p><?=limitWord($tintuc[$i]['mota'],40)?></p>
            </div>
        <?php }?>
    </div>
    <div class="phantrang"><?=$paging['paging']?></div>
<?php }else{echo 'Nội dung đang được cập nhật!';}?>
</div>
