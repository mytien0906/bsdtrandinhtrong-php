<?php
    session_start();
    $session=session_id();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    error_reporting(E_ALL & ~E_NOTICE & ~8192);
    @define ( '_source' , './sources/');
    @define ( '_lib' , './libraries/');

    if(isset($_SESSION['phienban']))
    {
       $phienban = $_SESSION['phienban'];
    }
    
    include_once _lib."Mobile_Detect.php";

    $detect = new Mobile_Detect;
    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

    if($deviceType =='phone'){
        if($phienban=='desktop'){
            @define ( '_template' , './templates/');
        }else{
            // @define ( '_template' , './templates_mobile/'); 
            @define ( '_template' , './templates/');
        }
    }else{
        if($phienban=='mobile'){
            // @define ( '_template' , './templates_mobile/'); 
            @define ( '_template' , './templates/');
        }else{
            @define ( '_template' , './templates/');
        }
    }

    //Lưu ngôn ngữ chọn vào $_SESSION
    if(!isset($_SESSION['lang']))
    {
        $_SESSION['lang']='vi';
    }
    $lang=$_SESSION['lang'];
    
    include_once _lib."config.php";
    include_once _lib."constant.php";
    include_once _lib."functions.php";
    include_once _lib."class.database.php";
    include_once _source."lang_$lang.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."file_requick.php";
    include_once _lib."counter.php"; 
    if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
    $pid=$_REQUEST['productid'];
    $soluong=1;
    addtocart($pid,$soluong);
    redirect("thanh-toan.html");}   
    include "sources/custom.php";


    if($row_setting['disable_web']==1){
        redirect('https://'.$config_url.'/disable_website.php');
    }
    /*for($i=18;$i<26;$i++){
        $data['masp'] = 'MCT-00'.($i+1);
        $data['ten_vi'] = 'Áo thun MCT-00'.($i+1);
        $data['mota_vi'] = '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !';
        $data['photo'] = 'ao-so-mi.jpg';
        $data['thumb'] = 'ao-so-mi.jpg';
        $data['giaban'] = '500000';
        $data['giacu'] = '620000';
        $data['id_list'] = 134;
        $data['id_cat'] = 17141;
        $data['tenkhongdau'] = changeTitle('Áo thun MCT-00'.($i+1));
        $data['text_search'] = changeSearch($data['ten_vi']);
        $data['stt'] = $i+1;
        $data['hienthi'] = 1;
        $data['ngaytao'] = time();
        $data['type'] = 'san-pham';
        
        $d->setTable('product');
        $d->insert($data);
    }*/

    if($deviceType =='phone'){
        if($phienban=='desktop'){
            include_once "index_website.php";
        }else{
            // include_once "index_mobile.php";
            include_once "index_website.php";
        }
    }else{
       if($phienban=='mobile'){
            // include_once "index_mobile.php";
            include_once "index_website.php";
        }else{
            include_once "index_website.php";
        }
    }
?>
