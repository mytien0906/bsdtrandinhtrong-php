<div class="content mb-20 clearfix">
  <div class="other-news">
    <div class="detail" id="div_print">
      <div class="detail mb-10">
        <div class="author">
         <h1 class="mg-0"><?=$title?></h1>
        </div>
        <div class="author">
          <p>Đăng bởi: <strong><?=getAuthor($row_detail['adminup'])?></strong>, ngày <?=date('d/m/Y H:i A', $row_detail['ngaytao'])?></p>
        </div>
      </div>
      <div class="detail" >
        <?=stripcslashes($row_detail['noidung_'.$lang])?>
      </div>
    </div>
    <div class="detail mt-20">
      <div class="socialmediaicons">
          <!-- Twitter -->
          <a href="https://twitter.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-twitter"></a>
          <a href="https://www.facebook.com/sharer.php?u=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-facebook"></a>
          <a href="https://plus.google.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-google"></a>
          <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-linkedin"></a>
          <a href="mailto:?Subject=<?=$row_detail['email']?> <?=getCurrentPageURL()?>" rel="nofollow" class="fa fa-envelope"></a>
          <a href="javascript:;" onclick="printdiv('div_print');" rel="nofollow" class="fa fa-print"></a>
      </div>
    </div>
  </div>
</div>
<?php if($row_detail['type']=='thiet-ke' || $row_detail['type']=='thi-cong'){ ?>
<div class="title bg-transparent bx-border w-100 mt-20">
  <h4 class="t-uppercase ds-inline-block p-relative "> <a href="" class="p-relative">Các dự án khác</a> </h4>
</div>
<div class="content0 mt-20 clearfix">
  <div class="show-product">
   <?php for($i=0;$i<count($tintuc);$i++){ ?>
    <div class="product-slide bg-white cl-3 bx-border product-hover f-left pd-10">
      <div class="product w-100">
        <div class="product-img clearfix w-100">
            <a href="<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
                <img src="resize/500x360/1/<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
            </a>
            <div class="product-desc cursor-pointer" onclick="window.location.href='<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>'">
              <p><?=nl2br($tintuc[$i]['mota_'.$lang])?></p>
            </div>
        </div>
        <div class="product-title p-relative w-100 mt-10">
          <h4 class="t-left t-uppercase"><a href="<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
            <?=$tintuc[$i]['ten_'.$lang]?>
          </a></h4>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<div class="tintuc-desc pt-20 f-left">
  <div class="w-100 bx-border pl-15 pr-15">
    <div class="pagination t-center"><?=$paging?></div>
  </div>
</div>
<?php }else{ ?>
<div class="title bx-border w-100 mt-20">
  <h4 class="t-uppercase ds-inline-block p-relative"> <a href="" class="p-relative">Có thể bạn quan tâm</a> </h4>
</div>
<div class="content mt-20 clearfix">
  <div class="other-news">
     <ul>
       <?php for($i=0;$i<count($tintuc);$i++){ ?>
         <li>
           <a href="<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>"><?=$tintuc[$i]['ten_'.$lang]?></a>
         </li>
       <?php } ?>
     </ul>
  </div>
</div>
<?php if(count($tintuc) == $row_setting['page_sp']){ ?>
<div class="tintuc-desc pt-20 f-left">
  <div class="w-100 bx-border pl-15 pr-15">
    <div class="pagination t-center"><?=$paging?></div>
  </div>
</div>
<?php } ?>
<?php } ?>