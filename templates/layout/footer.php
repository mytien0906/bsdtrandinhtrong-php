<footer id="footer-content" class="footer-content bg-content-top p-relative mt-20 pt-20 pb-20 clearfix">
  <div class="container">
    <div class="box-footer">
      <div class="item-footer bx-border">
        <div class="desc-footer">
          <?=$footer['noidung']?>
        </div>
      </div>
      <div class="item-footer bx-border">
        <div class="title-footer">
            <h6>Fanpage facebook</h6>
        </div>
        <div class="desc-footer">
          <div class="fb-page" data-href="<?=$row_setting['facebook']?>" data-width="300" data-height="180" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?=$row_setting['facebook']?>"><a href="<?=$row_setting['facebook']?>"><?=$row_setting['ten_'.$lang]?></a></blockquote></div></div>
        </div>
      </div>
      <div class="item-footer bx-border">
        <div class="title-footer">
            <h6>Thống kê truy cập</h6>
        </div>
        <div class="desc-footer">
          <div class="thongke">
            <p><?=_online?>: <?php $count = count_online(); echo $count['dangxem'];?></p>
            <p><?=_today?>: <?=$today_visitors?></p>
            <p><?=_month?>: <?=$month_visitors?></p>
            <p><?=_visited?>: <?=$all_visitors?></p>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</footer>
