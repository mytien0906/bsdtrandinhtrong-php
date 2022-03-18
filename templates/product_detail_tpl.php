<link href="plugins/magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="plugins/magiczoomplus/magiczoomplus.js" type="text/javascript"></script>

<div class="content clearfix">
    <?php
        $userdetail = getRows($row_detail['id_user'],'thanhvien', array('diachi','dienthoai','email','id','userid'));
        $citydetail = getRows($row_detail['id_city'],'place_city', array('ten','id','tenkhongdau'));
        $distdetail = getRows($row_detail['id_dist'],'place_dist', array('ten','id','tenkhongdau'));
        $provincedetail = getRows($row_detail['id_ward'],'place_ward', array('ten','id','tenkhongdau'));
        $listdetail = getRows($row_detail['id_list'],'baiviet_list', array('ten_'.$lang,'id','tenkhongdau','checkgia'));
    ?>
    <div class="desc">
        <div class="box-info-product w-100 bx-border">
            <div class="title-detail mb-10">
                <h1 class="t-left"><?=$row_detail['ten_'.$lang]?></h1>
            </div>
            <div class="detail-author mb-10">
                <p>Đăng <span class="cl-orange t-italic"><?=timeAgo($row_detail['ngaytao'])?></span> / Mã tin: <span class="cl-orange"><?=$row_detail['masp']?></span> / Lượt xem: <span class="cl-orange"><?=$row_detail['luotxem']?></span> / Tại: <span class="cursor-pointer cl-orange t-italic" onclick="window.location.href='khu-vuc/px-<?=$provincedetail['tenkhongdau']?>-<?=$provincedetail['id']?>'"><?=$provincedetail['ten']?>, </span><span class="cursor-pointer cl-orange t-italic" onclick="window.location.href='khu-vuc/qh-<?=$distdetail['tenkhongdau']?>-<?=$distdetail['id']?>'"><?=$distdetail['ten']?>, </span><span class="cursor-pointer cl-orange t-italic" onclick="window.location.href='khu-vuc/tt-<?=$citydetail['tenkhongdau']?>-<?=$citydetail['id']?>'"><?=$citydetail['ten']?></span></p>
            </div>
            <?php if($listdetail['checkgia']==0){ ?>
            <div class="product-price t-left">
              <p class="price-detail">
                <span>Giá bán: </span><span class="price"><?=($row_detail['giaban']!=0) ? getPriceBDS($row_detail['giachu'],$row_detail['donvi'],$row_detail['id_giatinh']) : 'Liên hệ' ?></span>
              </p>
              <p class="price-detail">
                <span>Diện tích: </span><span class="price"><?=$row_detail['dientich']?> m<sup>2</sup></span>
              </p>  
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="content mt-10 clearfix">
  <div class="title1">
    <h3>
      Thông tin mô tả
    </h3>
  </div>
  <div class="detail mb-10">
    <?php if($userdetail){ ?>
      <?= ($row_detail['noidung_'.$lang]!='') ? stripslashes(nl2br($row_detail['noidung_'.$lang])):'Nội dung bất động sản đang được cập nhật' ?>
    <?php }else{ ?>
      <?= ($row_detail['noidung_'.$lang]!='') ? stripslashes($row_detail['noidung_'.$lang]):'Nội dung bất động sản đang được cập nhật' ?>
    <?php } ?>
  </div>
  <?php if($row_detail['noithat_'.$lang]!=''){ ?>
  <div class="title1">
    <h3>
      Nội thất
    </h3>
  </div>
  <div class="detail mb-10">
    <?php if($userdetail){ ?>
      <?= ($row_detail['noithat_'.$lang]!='') ? stripslashes(nl2br($row_detail['noithat_'.$lang])):'Nội thất bất động sản đang được cập nhật' ?>
    <?php }else{ ?>
      <?= ($row_detail['noithat_'.$lang]!='') ? stripslashes($row_detail['noithat_'.$lang]):'Nội thất bất động sản đang được cập nhật' ?>
    <?php } ?>
  </div>
  <?php } ?>
  <?php /*
  <div class="title1">
    <h3>
      Thông tin bất động sản
    </h3>
  </div>
  <div class="detail mb-10">
    <div class="header">Đặc điểm bất động sản</div>
    <div class="table-detail">
      <?php if($row_detail['sotang']!=0){ ?>
      <div class="row">
        <div class="left">
          Số tầng:
        </div>
        <div class="right">
          <?=$row_detail['sotang']?> tầng
        </div>
      </div>
      <?php } ?>
      <?php if($row_detail['phongngu']!=0){ ?>
      <div class="row">
        <div class="left">
          Số phòng ngủ:
        </div>
        <div class="right">
          <?=$row_detail['phongngu']?> phòng
        </div>
      </div>
      <?php } ?>
      <?php if($row_detail['tolet']!=0){ ?>
      <div class="row">
        <div class="left">
          Số tolet:
        </div>
        <div class="right">
          <?=$row_detail['tolet']?> phòng
        </div>
      </div>
      <?php } ?>
      <div class="row">
        <div class="left">
          Hướng nhà:
        </div>
        <div class="right">
          <?=$config['dangtin']['huongnha'][$row_detail['id_huongnha']]?>
        </div>
      </div>
      <?php if($row_detail['mattien']!=0){ ?>
      <div class="row">
        <div class="left">
          Mặt tiền:
        </div>
        <div class="right">
          <?=$row_detail['mattien']?> m
        </div>
      </div>
      <?php } ?>
      <?php if($row_detail['duongvao']!=0){ ?>
      <div class="row">
        <div class="left">
          Đường vào:
        </div>
        <div class="right">
          <?=$row_detail['duongvao']?> m
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  */?>
  <div class="title1">
    <h3>
      Hình ảnh
    </h3>
  </div>
  <div class="detail mb-10 clearfix">
    <div class="box-gallery-detail">
      <div class="images_galley t-center">
        <div class="slider-for">
          <div>
            <img src="resize/870x500/2/<?= _upload_baiviet_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"/>
          </div>
           <?php for($i=0;$i<count($hinhanh_sp);$i++) { ?>
          <div>
              <img src="http://<?=$config_url?>/resize/870x500/2/<?=_upload_baiviet_l.$hinhanh_sp[$i]['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>">
          </div>
          <?php } ?>
        </div>
      </div>
      <?php if(count($hinhanh_sp)>0){ ?>
      <div class="images_list">
          <div class="slider-nav">
              <div>
                  <div class="img">
                    <img src="http://<?=$config_url?>/resize/105x80/1/<?=_upload_baiviet_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>">
                  </div>
              </div>
              <?php for($i=0;$i<count($hinhanh_sp);$i++) { ?>
              <div>
                  <div class="img"><img src="http://<?=$config_url?>/resize/105x80/1/<?=_upload_baiviet_l.$hinhanh_sp[$i]['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"></div>
              </div>
              <?php } ?>
          </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="detail mb-10 clearfix">
    <div class="socialmediaicons t-center">
      <a href="https://twitter.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-twitter"></a>
      <a href="https://www.facebook.com/sharer.php?u=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-facebook"></a>
      <a href="https://plus.google.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-google"></a>
      <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-linkedin"></a>
      <a href="mailto:?Subject=<?=$row_detail['email']?> <?=getCurrentPageURL()?>" rel="nofollow" class="fa fa-envelope"></a>
      <a href="javascript:;" onclick="window.print()" rel="nofollow" class="fa fa-print"></a>
    </div> 
  </div>
  <div class="detail mt-20">
    <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-width="100%" data-numposts="5"></div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 8,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      centerMode: false,
      arrows: false,
      autoplay: true,
      focusOnSelect: true
    });
  });
</script>
<?php /*
<div class="content clearfix">
    <div class="tab-box">
        <ul class="tabs-detail">
            <li class="tabs-click active">
                <span>Mô tả chi tiết</span>
            </li>
            <li class="tabs-click">
                <span>Hình ảnh</span>
            </li>
            <li class="tabs-click">
                <span>Bình luận</span>
            </li>
        </ul>
        <div class="tabs-content active" id="tabs1">
            <div class="detail">
                <?= ($row_detail['noidung_'.$lang]!='') ? stripslashes($row_detail['noidung_'.$lang]):'Nội dung sản phẩm đang được cập nhật' ?>
            </div>
            <div class="detail mt-20">
                <div class="socialmediaicons t-center">
                    <a href="https://twitter.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-twitter"></a>
                    <a href="https://www.facebook.com/sharer.php?u=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-facebook"></a>
                    <a href="https://plus.google.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-google"></a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-linkedin"></a>
                    <a href="mailto:?Subject=<?=$row_detail['email']?> <?=getCurrentPageURL()?>" rel="nofollow" class="fa fa-envelope"></a>
                    <a href="javascript:;" onclick="window.print()" rel="nofollow" class="fa fa-print"></a>
                </div> 
            </div>
        </div>
        
        <div class="tabs-content" id="tabs2">
          
        </div>

        <div class="tabs-content" id="tabs3">
            <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-width="100%" data-numposts="5"></div>
        </div>
       
    </div>
</div>
*/?>
<?php if(count($tintuc)>0){ ?>
<div class="title bx-border w-100 mt-20">
    <h4 class="t-uppercase ds-inline-block p-relative">
        <a href="">Có thể bạn quan tâm</a>
    </h4>
</div>
<div class="content w-100 pt-20 clearfix">
   <div class="show-product">
        <?php for($i=0;$i<count($tintuc);$i++){
          $city = getRows($tintuc[$i]['id_city'],'place_city', array('ten','id','tenkhongdau'));
          $dist = getRows($tintuc[$i]['id_dist'],'place_dist', array('ten','id','tenkhongdau'));
          $province = getRows($tintuc[$i]['id_ward'],'place_ward', array('ten','id','tenkhongdau'));
          $list = getRows($tintuc[$i]['id_list'],'baiviet_list', array('ten_'.$lang,'id','tenkhongdau','checkgia'));
          $userp = getRows($tintuc[$i]['id_user'],'thanhvien', array('hoten','id','userid'));
        ?>
        <div class="product-slide cl-1 bx-border product-hover">
            <div class="product w-100">
              <div class="product-img">
                  <a href="bat-dong-san/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
                      <img src="resize/440x324/1/<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
                  </a>
                  <div class="product-desc" onclick="window.location.href='bat-dong-san/<?=$tintuc[$i]['tenkhongdau']?>'">
                    <p>
                      <i class="fa fa-search"></i> Xem chi tiết
                    </p>
                  </div>
              </div>
              <div class="product-title">
                <h4 class="t-left "><a href="bat-dong-san/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
                  <?=$tintuc[$i]['ten_'.$lang]?>
                </a></h4>
                <p class="t-left">
                  <span class="price"><?=($tintuc[$i]['giaban']!=0) ? getPriceBDS($tintuc[$i]['giachu'],$tintuc[$i]['donvi'],$tintuc[$i]['id_giatinh']) : 'Liên hệ' ?></span>
                </p>
                <p>
                  <span class="fa fa-globe"></span> <?=($tintuc[$i]['dientich']==0) ? '300 m2':$tintuc[$i]['dientich'].' m2'?>
                </p>
                <p>
                  <span class="fa fa-building"></span>
                  <?php if($list){ ?>
                  <a href="<?=$list['tenkhongdau']?>"><?=$list['ten_'.$lang]?></a>
                  <?php } ?>
                </p>
                <p>
                  <span class="fa fa-map-marker"></span>
                  <?php if($dist){ ?>
                  <a href="khu-vuc/qh-<?=$dist['tenkhongdau']?>-<?=$dist['id']?>"><?=$dist['ten']?></a>,
                  <?php } ?>
                  <?php if($city){ ?>
                  <a href="khu-vuc/tt-<?=$city['tenkhongdau']?>-<?=$city['id']?>"><?=$city['ten']?></a>
                  <?php } ?>
                </p>
                <div class="user t-right">
                  <p class="ds-inline-block"><span class="fa fa-calendar"></span> <?=date('d/m/Y',$tintuc[$i]['ngaytao'])?></p>
                  <?php if($userp){ ?>
                  <p class="ds-inline-block"><span class="fa fa-user"></span> <span><?=$userp['hoten']?></span></p>
                  <?php }else{ ?>
                  <p class="ds-inline-block"><span class="fa fa-user"></span> <span><?=($tintuc[$i]['hoten']=='') ? 'Admin':$tintuc[$i]['hoten']?></span></p>
                  <?php } ?>
                </div>
              </div>
          </div>
        </div>
        <?php } ?>
      </div>
</div>
<?php if(count($tintuc) == $row_setting['page_sp']){ ?>
<div class="content w-100 mt-20 clearfix">
  <div class="show-product">
    <div class="w-100 bx-border pl-10 pr-10">
      <div class="pagination t-center"><?=$paging?></div>
    </div>
  </div>
</div>
<?php } ?>
<?php } ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#member-show').click(function(event) {
            if($(this).hasClass('active')){
                $('.box-member-detail').stop().slideUp();
                $(this).removeClass('active');
                $(this).text('Thông tin liên lạc [Xem]');
            }else{
                $('.box-member-detail').stop().slideDown();
                $(this).addClass('active');
                $(this).text('Thông tin liên lạc [Đóng]');
            }
        });
    });
</script>