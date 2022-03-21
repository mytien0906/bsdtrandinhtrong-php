<section id="tuvan" class="tuvan-top mt-20 w-100 clearfix">
  <div class="container">
    <div class="title bg-transparent t-left w-100">
      <h4 class="ds-inline-block p-relative"><a href="tin-tuc" class="p-relative border-bottom">Tin tức và sự kiện</a></h4>
    </div>
    <div class="content w-100 mt-20 clearfix o-hidden">
      <div class="tintuc-right">
        <div class="box-tintuc">
          <div class="content mt-20 w-100 clearfix">
            <div class="show-product">
          <?php for ($i = 1; $i < count($tintuc_noibat); $i++) {
            // var_dump($tintuc_noibat).die();
          ?>

                <div class="product-slide cl-1 bx-border product-hover">
                  <div class="product w-100">
                    <div class="product-img">
                      <a href="tin-tuc/<?= $tintuc_noibat[$i]['tenkhongdau'] ?>.html" title="<?= $tintuc_noibat[$i]['ten_' . $lang] ?>">
                        <img src="resize/185x145/1/<?= _upload_baiviet_l . $tintuc_noibat[$i]['photo'] ?>" alt="<?= $tintuc_noibat[$i]['ten_' . $lang] ?>">
                      </a>
                      <div class="product-desc" onclick="window.location.href='tin-tuc/<?= $tintuc_noibat['tenkhongdau'] ?>'">
                        <p>
                          <i class="fa fa-search"></i> Xem chi tiết
                        </p>
                      </div>
                    </div>
                    <div class="product-title">
                      <h5><a href="tin-tuc/<?= $tintuc_noibat[$i]['tenkhongdau'] ?>.html" title="<?= $tintuc_noibat[$i]['ten_' . $lang] ?>">
                          <?= $tintuc_noibat[$i]['ten_' . $lang] ?>

                        </a></h5>
                      <p>
                        <?= catchuoi(strip_tags($tintuc_noibat[$i]['mota_' . $lang]), 100) ?>
                      </p>
                    </div>
                  </div>
                </div>
                <?php } ?>
                <div class="btn-load-block">
                  <a class="load-more" href="<?= $sanpham_menu[$i]['tenkhongdau'] ?>" title="Xem thêm tin khác">Xem thêm tin khác</a>
                </div>
                
                              </div>
                            </div>
        </div>
      </div>
    </div>
  </div>
</section>