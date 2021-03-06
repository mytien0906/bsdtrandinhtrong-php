<div class="title  bg-transparent bx-border pd-0 mg-0 bg-white w-100">
  <h1 class="t-uppercase ds-inline-block p-relative pd-0"><?=$title?></h1>
</div>
<div class="content mb-20 mt-20 clearfix">
  <!-- <input data-toggle="datepicker"> -->
  <?php
    if($_GET['hoten']!=''){
      require _lib.'phongthuy.php';
      if($_GET['amduong']==1){
        $arr_date = explode('-', $_GET['ngaysinh']);
        $result = SunClass::getArrayDateInfo( $arr_date[0], $arr_date[1], $arr_date[2], $_GET['gioitinh']);
        $getNgayAm = explode('-', $result['output_am']);

        $data['hoten'] = $_GET['hoten'];
        $data['ngayduong'] = $_GET['ngaysinh'];
        $data['ngayam'] = $getNgayAm[2].'-'.$getNgayAm[1].'-'.$getNgayAm[0];
        $data['canchinam'] = $result['can_chi_nam'];
        $data['canchimenhnam'] = $result['can_chi_menh_nam'];
        $data['saochieumenh'] = $result['sao_chieu_menh'];
        $data['menhnguhanh'] = $result['menh_ngu_hanh'];
        $data['mautuongsinh'] = $result['mau_tuong_sinh'];
        $data['mauhoahop'] = $result['mau_hoa_hop'];
        $data['mauchekhac'] = $result['mau_che_khac'];
        $data['maubikhac'] = $result['mau_bi_khac'];
      }
      if($_GET['amduong']==0){
        $arr_date = explode('-', $_GET['ngaysinh']);
        $getClass = new SunClass();
        $arr_date_am = $getClass->convertLunar2Solar($arr_date[0], $arr_date[1], $arr_date[2]);
        $result = SunClass::getArrayDateInfo( $arr_date_am[0], $arr_date_am[1], $arr_date_am[2], $_GET['gioitinh']);
        $getNgayDuong = explode('-', $result['input_duong']);
        
        $data['hoten'] = $_GET['hoten'];
        $data['ngayduong'] = $getNgayDuong[2].'-'.$getNgayDuong[1].'-'.$getNgayDuong[0];
        $data['ngayam'] = $_GET['ngaysinh'];
        $data['canchinam'] = $result['can_chi_nam'];
        $data['canchimenhnam'] = $result['can_chi_menh_nam'];
        $data['saochieumenh'] = $result['sao_chieu_menh'];
        $data['menhnguhanh'] = $result['menh_ngu_hanh'];
        $data['mautuongsinh'] = $result['mau_tuong_sinh'];
        $data['mauhoahop'] = $result['mau_hoa_hop'];
        $data['mauchekhac'] = $result['mau_che_khac'];
        $data['maubikhac'] = $result['mau_bi_khac'];
      }
    }
  ?>
  <div class="form-tracuu">
    <div class="row-tracuu">
      <input type="text" class="input-text" name="hoten" id="hoten" value="<?=$_GET['hoten']?>" placeholder="H??? t??n...">
    </div>
    <div class="row-tracuu">
      <input type="text" class="input-text" id="ngaysinh" data-toggle="datepicker" name="ngaysinh" value="<?=$_GET['ngaysinh']?>" placeholder="Ng??y - th??ng - n??m sinh...">
    </div>
    <div class="row-tracuu">
      <select name="gioitinh" id="gioitinh" class="select-text">
        <option value="1" <?=($_GET['gioitinh']==1) ? 'selected':''?>>Nam</option>
        <option value="0" <?=($_GET['gioitinh']==0) ? 'selected':''?>>N???</option>
      </select>
    </div>
    <div class="row-tracuu">
      <select name="amduong" id="amduong" class="select-text">
        <option value="1" <?=($_GET['amduong']==1) ? 'selected':''?>>D????ng</option>
        <option value="0" <?=($_GET['amduong']==0) ? 'selected':''?>>??m</option>
      </select>
    </div>
    <div class="row-tracuu t-center">
      <input type="button" class="btn-submit" id="btn-submit-menh" name="btn-submit" value="Tra c???u">
    </div>
  </div>
</div>
<?php if(!empty($data)){ ?>
<div class="content mb-20 mt-20 clearfix">
  <div class="result-menh">
    <h5><?=$data['hoten']?></h5>
    <ul>
        <li><p>Ng??y sinh d????ng l???ch: <?=$data['ngayduong']?></p></li>
        <li><p>Ng??y sinh ??m l???ch: <?=$data['ngayam']?></p></li>
        <li><p>Can chi n??m: <?=$data['canchinam']?></p></li>
        <li><p>M???nh cung sinh: <?=$data['menhnguhanh']?></p></li>
        <li><p>M???nh cung phi: <?=$data['canchimenhnam']?></p></li>
        <li><p>Sao chi???u m???nh: <?=$data['saochieumenh']?></p></li>
        <li><p>M??u t????ng sinh: <?=$data['mautuongsinh']?></p></li>
        <li><p>M??u h??a h???p: <?=$data['mauhoahop']?></p></li>
        <li><p>M??u ch??? kh???c: <?=$data['mauchekhac']?></p></li>
        <li><p>M??u b??? kh???c (k???): <?=$data['maubikhac']?></p></li>
    </ul>
  </div>  
</div>
<?php } ?>


<div class="content mt-20">
  <div class="other-news">
    <div class="detail" id="div_print">
      <?=stripcslashes($row_detail['noidung_'.$lang])?>
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
