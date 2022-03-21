<footer id="footer-content" class="footer-content bg-content-top p-relative mt-20 pt-20 pb-20 clearfix">
  <div class="container">
    <div class="row box-footer">
      <div class="item-footer bx-border col-md-4 col-sm-4">
        <div class="desc-footer">
          <div class="title-footer">
            <h6>Thông tin liên hệ</h6>
            <div class="test">
              <?=
              // var_dump($capnhat);die();
              // var_dump($row_setting) . die();
              $row_setting['ten_vi'] ?>
            </div>
          </div>
        </div>
      </div>
      <div class="item-footer bx-border col-md-4 col-sm-4">
        <div class="desc-footer">
          <div class="title-footer">
            <h6>Trụ sở</h6>
          </div>
          <ul>
            <li>
              <span>Địa chỉ: </span>
              <?= $row_setting['diachi_vi'] ?>
            </li>
            <li>
              <?= $row_setting['diachi_en'] ?>

            </li>
          </ul>
        </div>
      </div>
      <div class="item-footer bx-border col-md-4 col-sm-4">
        <div class="desc-footer">
          <div class="title-footer">
            <h6>Hỗ trợ khách hàng</h6>
          </div>
          <ul>
            <li><a href="">Hotline: <span><?= $row_setting['dienthoai'] ?></span></a></li>
            <li><a href="">Website: <span><?= $row_setting['lienketweb'] ?></span></a></li>
            <li>
              <p><?= $row_setting['slogan_vi'] ?></p>
            </li>
          </ul>
        </div>
      </div>
      <div class="item-footer bx-border col-md-4 col-sm-4">
        <div class="title-footer">
          <h6>Fanpage facebook</h6>
        </div>
        <div class="desc-footer">
          <div class="fb-page" data-href="<?= $row_setting['facebook'] ?>" data-width="300" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
            <div class="fb-xfbml-parse-ignore">
              <blockquote cite="<?= $row_setting['facebook'] ?>"><a href="<?= $row_setting['facebook'] ?>"><?= $row_setting['ten_' . $lang] ?></a></blockquote>
            </div>
          </div>
        </div>
      </div>
      <div class="item-footer bx-border col-md-4 col-sm-4">
        <div class="title-footer">
          <h6>Bản đồ</h6>
        </div>
        <div class="desc-footer">
          <?= $row_setting['toado'] ?>
        </div>
      </div>
      <!-- <div class="item-footer bx-border col-md-4 col-sm-4">
        <div class="title-footer">
          <h6>Thống kê truy cập</h6>
        </div>
        <div class="desc-footer">
          <div class="thongke">
            <p><?= _online ?>: <?php $count = count_online();
                                echo $count['dangxem']; ?></p>
            <p><?= _today ?>: <?= $today_visitors ?></p>
            <p><?= _month ?>: <?= $month_visitors ?></p>
            <p><?= _visited ?>: <?= $all_visitors ?></p>
          </div>
        </div>
      </div> -->

    </div>
  </div>
</footer>