<div class="title bx-border pd-0 mg-0 bg-white w-100">
  <h1 class="t-uppercase ds-inline-block p-relative"><?=$title?></h1>
</div>
<div class="desc mt-20">
  <div class="detail">
    <?=$row_list['mota_'.$lang]?>
  </div>
</div>
<?php if(count($tintuc)>0){ ?>
<div class="content mt-20 w-100 clearfix">
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
<div class="content w-100 mt-20 clearfix">
  <div class="show-product">
    <div class="w-100 bx-border pl-10 pr-10">
      <div class="pagination t-center"><?=$paging?></div>
    </div>
  </div>
</div>
<?php }else{ ?>

<div class="content w-100 mt-20 clearfix">
  <div class="show-product">
    <div class="w-100 bx-border pl-10 pr-10">
      Không tìm thấy sản phẩm nào.
    </div>
  </div>
</div>

<?php } ?>