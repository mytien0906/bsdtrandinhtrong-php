<!DOCTYPE html>
<html lang="vi">
<head>
<base href="http://<?=$config_url?>/">
<link rel="canonical" href="<?=getCurrentPageURL_CANO()?>" />
<link rel="alternate" href="<?=getCurrentPageURL_CANO()?>" hreflang="vi-vn" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="theme-color" content="#FFD400" />
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#FFD400" />
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<link id="favicon" rel="shortcut icon" href="<?=_upload_hinhanh_l.$row_setting['bgtop']?>" type="image/x-icon" />
<title><?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?></title>
<meta name="description" content="<?php if($description_bar!='') echo $description_bar; else echo $row_setting['description']; ?>">
<meta name="keywords" content="<?php if($keyword_bar!='') echo $keyword_bar; else echo $row_setting['keywords']; ?>">
<meta name="robots" content="noodp,index,follow" />
<meta name="google" content="notranslate" />
<meta name='revisit-after' content='1 days' />
<meta name="geo.placename" content="<?=$row_setting['diachi_'.$lang]?>">
<meta name="author" content="<?=$row_setting['ten_'.$lang]?>">
<?=$row_setting['analytics']?>
<?=$share_facebook?>
<?php if($config['facebook-id']!=''){ ?>
<meta property="fb:app_id" content="<?=$config['facebook-id']?>" />
<?php } ?>
<link type="text/css" rel="stylesheet" href="style.css" />
<link type="text/css" rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="css/pe-icon-7-stroke.css" />
<link type="text/css" rel="stylesheet" href="plugins/slick/slick.css" />
<link type="text/css" rel="stylesheet" href="plugins/slick/slick-theme.css" />
<link type="text/css" rel="stylesheet" href="plugins/mmenu/src/css/jquery.mmenu.all.css" />
<link type="text/css" rel="stylesheet" href="plugins/confirm/jquery-confirm.css" />
<link type="text/css" rel="stylesheet" href="plugins/mcustomscrollbar/jquery.mCustomScrollbar.css" />
<link rel="stylesheet" type="text/css" href="css/jssor.css">
<?php if($com=='video' && $_GET['id']){ ?>
<link type="text/css" rel="stylesheet" href="plugins/video/mediaelementplayer.css" />
<?php } ?>
<script language="javascript" type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>

<?php if($_REQUEST['com']=='index' || $_REQUEST['com']==''){ ?>
<h1 class="hidden fn"><?=$row_setting['title']?></h1>
<?php } ?>
<div id="header-m">
  
  <div class="header-b">
    <span>
      <a href="#menu-mobile" class="button menu"><i class="fa fa-bars"></i></a>
    </span>
    <span>
      <a href="#searchid" class="button search">
        <i class="fa fa-search"></i>
      </a>
    </span>
    <span>
      <a href="dang-tin.html" class="add">Đăng tin mới</a>
    </span>
  </div>
</div>
<div id="full-page">
  <?php include_once _template."layout/top.php"; ?>
  <?php include_once _template."layout/header.php"; ?>
  <?php include_once _template."layout/menu.php"; ?>
  <?php if($com!='dang-ky' && $com!='dang-nhap' && $com!='quen-mat-khau' && $com!='quan-ly-tin-dang' && $com!='dang-tin' && $com!='doi-mat-khau' && $com!='thong-tin-ca-nhan' && $com!='sua-tin-dang'){ ?>
  <?php include_once _template."layout/slider.php"; ?>
  <?php } ?>
  <section id="block-template" class="clearfix pb-20">
    <div class="container">
      <?php /*if($row_list['quangcao']!=''){ ?>
      <div class="quangcao-list">
        <a href="<?=$row_list['links']?>">
          <img src="<?=_upload_hinhanh_l.$row_list['quangcao']?>" alt="<?=$row_list['name_'.$lang]?>">
        </a>
      </div>
      <?php }*/ ?>
      <?php if($com!='dang-ky' && $com!='dang-nhap' && $com!='quen-mat-khau' && $com!='quan-ly-tin-dang' && $com!='dang-tin' && $com!='sua-tin-dang'){ ?>
        <div class="left-page">
          <?php if($source!='index'){ ?>
          <div class="breadcumb mt-10 mb-20"><?=$breadcumb?></div>
          <?php include _template.$template."_tpl.php";?>
          <?php }else{ ?>
          <?php include_once _template."layout/sanphamall.php"; ?>
          <?php include_once _template."layout/tintuc.php"; ?>
          <?php } ?>
        </div>
        <div class="right-page">
          <?php include_once _template."layout/right.php"; ?>
        </div>
      <?php }else{ ?>
        <div class="breadcumb mt-10 mb-20"><?=$breadcumb?></div>
        <?php include _template.$template."_tpl.php";?>
      <?php } ?>
    </div>
  </section>
  
  <?php include_once _template."layout/footer.php"; ?>
  <?php include_once _template."layout/copy.php"; ?>
</div>

<?php include_once _template."layout/menu_mobile.php"; ?>
<?php include_once _template."layout/chiduong.php"; ?>


<script type="text/javascript" src="js/my_script.js"></script>
<script type="text/javascript" src="js/marquee.js"></script>
<script type="text/javascript" src="plugins/slick/slick.min.js"></script>
<script type="text/javascript" src="plugins/mmenu/src/js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript" src="plugins/mcustomscrollbar/jquery.mCustomScrollbar.js"></script>
<link type="text/css" rel="stylesheet" href="plugins/fancybox/dist/jquery.fancybox.css">
<script type="text/javascript" src="plugins/fancybox/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="plugins/confirm/jquery-confirm.js"></script>
<?php if($_GET['idl']=='tra-cuu-cung-menh'){ ?>
<link  href="plugins/datepicker/datepicker.css" rel="stylesheet">
<script src="plugins/datepicker/datepicker.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('[data-toggle="datepicker"]').datepicker({
      format: 'dd-mm-YYYY'
    });
  });
</script>
<?php } ?>
<?php if($com!='dang-ky' && $com!='dang-nhap' && $com!='quen-mat-khau' && $com!='quan-ly-tin-dang' && $com!='dang-tin' && $com!='doi-mat-khau' && $com!='thong-tin-ca-nhan' && $com!='sua-tin-dang'){ ?>
<script src="js/jssor.slider-25.2.0.min.js" type="text/javascript"></script>
<script src="js/jssor_1_slider_init.js" type="text/javascript"></script>
<script type="text/javascript">jssor_1_slider_init();</script>
<?php } ?>
<script type="text/javascript" src="js/s_script.js"></script>
<script type="text/javascript">
  var active_youtube = "<?=youtobi($video_na[0]['links'])?>";
  var t_time = "<?=time()?>";
</script>

<?php if($com=='video' && $_GET['id']){ ?>
<script src="plugins/video/mediaelement-and-player.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('video, audio').mediaelementplayer({
      pluginPath: 'https://cdnjs.com/libraries/mediaelement/',
      shimScriptAccess: 'always'
    });
  });
</script>
<?php } ?>

<?php include_once _template."layout/popup.php"; ?>

<?php include_once _template."layout/chatface.php"; ?>
<!-- MultiUpload -->
<link href="plugins/multiupload/css/jquery.filer.css" type="text/css" rel="stylesheet" />
<link href="plugins/multiupload/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="plugins/multiupload/jquery.filer.min.js"></script>
<script type="text/javascript" src="js/jquery.price_format.2.0.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.giaban-format').priceFormat({
      limit: 13,
      prefix: '',
      centsLimit: 0
    });
  });
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php if($lang=='en')echo 'en_EN';else echo 'vi_VN' ?>/sdk.js#xfbml=1&version=v2.4<?=($config['facebook-id']!='') ? "&appId=".$config['facebook-id']:'' ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
