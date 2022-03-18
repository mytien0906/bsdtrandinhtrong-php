<?php
	session_start();
	$session=session_id();
	date_default_timezone_set('Asia/Saigon');
	@define ( '_template' , './templates/'); //định nghĩa đường dẫn tắt, chèn biến vào thay thế
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	@define ( _upload_folder , './media/upload/' );
	
    if(!isset($_SESSION['lang']))
    {
        $_SESSION['lang']='vi';    
    }
	$lang=$_SESSION['lang'];

    require_once _source."lang_$lang.php";
	
    include_once _lib."config.php";
	include_once _lib."config_type.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	include_once _source."counter.php";
	include_once _source."useronline.php";	
	include_once _source."common.php"; ## File query chung của layout

    ## Gio hang
    if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
        $pid=$_REQUEST['productid'];
        $q=isset($_GET['quality']) ? (int)$_GET['quality'] : "1";
        $id_size=$_REQUEST['psize'];
        $id_mau=$_REQUEST['mau'];
        addtocart($pid,$q,$id_size,$id_mau);
        redirect("gio-hang");
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi,en">

<head>
<base href="http://<?=$config_url?>/"  />
<link rel="alternate" hreflang="vi-vn" href="" />
<meta name="robots" content="index, follow" />
<link href="<?=($row_setting['favicon']!='')?_upload_hinhanh_l.$row_setting['favicon']:'img/favicon.ico'?>" rel="shortcut icon" type="image/x-icon" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="monitor-signature" content="monitor:player:html5">

<meta name="keywords" content="<?=themdau(($keywords_c!="")?$keywords_c:$row_setting['keywords_'.$lang])?>" />
<meta name="description" content="<?=themdau(($description_c!="")?$description_c:$row_setting['description_'.$lang])?>" />
<meta name="author" content="<?=$row_setting['ten_'.$lang]?>" />
<meta name="copyright" content="<?=$row_setting['ten_'.$lang]?> [<?=$row_setting['email']?>]" />

<!-- Meta tùy chỉnh admin -->
<?=$row_setting['meta']?>

<title><?=($tit_c!="")?$tit_c:$title_bar.$row_setting['title_'.$lang]?></title>

<!-- Dublin Core -->
<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
<meta name="DC.title" content="<?=$row_setting['title']?>" />
<meta name="DC.identifier" content="http://<?=$config_url?>/" />
<meta name="DC.description" content="<?=$row_setting['description']?>" />
<meta name="DC.subject" content="<?=$row_setting['keywords']?>" />
<meta name="DC.language" scheme="UTF-8" content="vi,en" />

<!-- Geo -->
<meta name="geo.region" content="VN" />
<meta name="geo.placename" content="Hồ Chí Minh" />
<meta name="geo.position" content="<?php $tmp=explode(',',$row_setting['toado']); echo $tmp[0].';'.$tmp[1];?>" />
<meta name="ICBM" content="<?=$row_setting['toado']?>" />

<!-- Share facebook -->
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://<?=$config_url?>/<?=_upload_hinhanh_l.($sharefb_img!='')?$sharefb_img:$banner['photo']?>"/>
<meta property="og:title" content="<?=($tit_c!="")?$tit_c:$title_bar.$row_setting['title_'.$lang]?>"/>
<meta property="og:site_name" content="<?=$row_setting['ten_'.$lang]?>"/>
<meta property="og:url" content="<?=getCurrentPageUrl()?>"/>

<?php include_once _source."link.php"; ## File css & js & Các hàm js?>

<!-- Google analytics -->
<?=$row_setting['gga']?>

<!-- Webmaster -->
<?=$row_setting['wmt']?>

<?php
    if(isset($_POST['dangky']))
    {
        include_once _source."dangky.php"; ## Xu ly dang ky thanh vien
    }
    
    if(isset($_POST['dangnhap']))
    {
        include_once _source."dangnhap.php"; ## Xu ly thanh vien dang nhap
    }
?>

</head>

<body <?php if($com=='' || $com=='index'){echo 'class="index"';} ?>>
	<?//php include_once _source."heading.php"; ## The h1->h6 dung de SEO?>
    <div id="banner">
        <?php include _template."layout/banner.php"; ?>
    </div>
    <div id="smenu">
        <img src="img/menu.png" alt="Menu" class="i-menu" />
    </div>
    <div id="menus">
        <?php include _template."layout/menu-small.php"; ?>
    </div>
    <?php if($com=='' || $com=='index'){ ?>
        <div id="slide">
            <?php include _template."layout/slide.php"; ?>
        </div>    
    <?php } else { ?>
        <div id="top">
            <?php include _template."layout/top.php"; ?>
        </div>   
    <?php } ?>
    <div class="center">
        <div id="container" class="w-clear">
            <?php if($com!='' && $com!='index' && $com!='lien-he'){ ?>
                <div class="left">
                    <?php include _template."layout/left.php"; ?>
                </div>
            <?php } ?>
            <div class="right">
                <?php include _template.$template."_tpl.php"; ?>
            </div>
        </div>
    </div>
    </div>
    <div id="footer">
        <?php include _template."layout/footer.php"; ?>
    </div>

    <?php /* <div class="hotlinef" style="width: 189px; height:70px; position:fixed; right:0px; bottom:30px; background-image:url(img/bg-hotline.png); z-index:10000;">
        <div style="padding:25px; color:#FFF; font-size:20px; font-weight:bold;"><?=$row_setting['hotline']?></div>
    </div> */ ?>
    
    <div id="back-top" style="cursor:pointer;" title="Lên Đầu Trang."><a class="border_radius"><img src="img/top.png" alt="backtop" /></a> </div>
    
    <!-- My custom js -->
    <script type="text/javascript" src="js/thanhtam.js"></script>
    
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51d3c996345f1d03" async="async"></script>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=1561845330806331";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <?=$row_setting['chat']?>
</body>
</html>