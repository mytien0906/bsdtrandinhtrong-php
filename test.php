<?php
echo (md5('$choquynhon@'.'admin'.'1!@#6hg%&89'));
?>
<section id="tuvan" class="tuvan-top mt-20 w-100 clearfix">
  <div class="container">
    <div class="title bg-transparent t-left w-100">
      <h4 class="ds-inline-block p-relative"><a href="tin-tuc" class="p-relative border-bottom">Tin tức và sự kiện</a></h4>
    </div>
    <div class="content w-100 mt-20 clearfix o-hidden">
      <div class="tintuc-left">
        <div class="box-don-item">
          <div class="img">
            <a href="tin-tuc/<?=$tintuc_noibat[0]['tenkhongdau']?>.html" title="<?=$tintuc_noibat[0]['ten_'.$lang]?>">
              <img src="resize/400x388/1/<?=_upload_baiviet_l.$tintuc_noibat[0]['photo']?>" alt="<?=$tintuc_noibat[0]['ten_'.$lang]?>">
            </a>
          </div>
          <div class="desc t-left">
            <h5>
              <a href="tin-tuc/<?=$tintuc_noibat[0]['tenkhongdau']?>.html" title="<?=$tintuc_noibat[0]['ten_'.$lang]?>">
                <?=$tintuc_noibat[0]['ten_'.$lang]?>
              </a>
            </h5>
            <p>
              <?=catchuoi($tintuc_noibat[0]['mota_'.$lang],150)?>
            </p>
            <p>
              <a href="tin-tuc/<?=$tintuc_noibat[0]['tenkhongdau']?>.html" title="Xem thêm">
                Xem thêm
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="tintuc-right">
        <div class="box-tintuc slickTinTuc">
          <?php for($i=1;$i<count($tintuc_noibat);$i++){ ?>
          <div>
            <div class="box-tintuc-item">
              <div class="img">
                <a href="tin-tuc/<?=$tintuc_noibat[$i]['tenkhongdau']?>.html" title="<?=$tintuc_noibat[$i]['ten_'.$lang]?>">
                  <img src="resize/185x145/1/<?=_upload_baiviet_l.$tintuc_noibat[$i]['photo']?>" alt="<?=$tintuc_noibat[$i]['ten_'.$lang]?>">
                </a>
              </div>
              <div class="desc t-left">
                <h5><a href="tin-tuc/<?=$tintuc_noibat[$i]['tenkhongdau']?>.html" title="<?=$tintuc_noibat[$i]['ten_'.$lang]?>">
                  <?=$tintuc_noibat[$i]['ten_'.$lang]?>

                </a></h5>
                <p>
                  <?=catchuoi(strip_tags($tintuc_noibat[$i]['mota_'.$lang]),120)?>
                </p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
