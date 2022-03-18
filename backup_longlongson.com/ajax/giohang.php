<?php
	session_start();
	$session=session_id();
	date_default_timezone_set('Asia/Saigon');
	@define ( '_template' , '../templates/'); //định nghĩa đường dẫn tắt, chèn biến vào thay thế
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../admin/lib/');
	@define ( _upload_folder , './media/upload/' );

	$lang='vi';

	require_once _source."lang_$lang.php";
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	
	$id=(int)$_POST['id'];
	$sl=(int)$_POST['sl'];
	if($sl<1)
	{
		$sl=1;
	}
	addtocart($id,$sl,0,0);

	$arr['soluong']=count($_SESSION['cart']);
	$arr['tongtien']=number_format(get_order_total(),0, ',', '.').'đ';
	$arr['giohang']='
<div class="tr">
    <div class="th">
        Sản phẩm
    </div>
    <div class="th">
        Đơn giá
    </div>
    <div class="th">
        Số lượng
    </div>
    <div class="th">
        Thành tiền
    </div>
</div>';
    $max=count($_SESSION['cart']);
    for($i=0;$i<$max;$i++){
        $pid=$_SESSION['cart'][$i]['productid'];
        $q=$_SESSION['cart'][$i]['qty'];
        $ppro=get_product($pid);
$arr['giohang'].='
<div class="tr">
    <div class="td">
        <div class="box-spc w-clear">
            <a href="san-pham/'.$ppro['tenkhongdau'].'" target="_blank">
                <img src="'._upload_product_l.$ppro['thumb'].'" alt="'.$ppro['ten'].'" />
            </a>
            <a href="san-pham/'.$ppro['tenkhongdau'].'" target="_blank" class="gh-name">
                '.$ppro['ten'].'
            </a>
            <a href="#" class="del-cart" data-key="'.$i.'">
                <i class="fa fa-times" aria-hidden="true"></i>
                Bỏ sản phẩm
            </a>
        </div>
    </div>
    <div class="td">
        '.number_format($ppro['gia'],0,'','.').'đ'.'
    </div>
    <div class="td">
        <input type="number" value="'.$q.'" min="1" max="99" maxlength="3" class="ajax_soluong" data-key="'.$i.'" />
    </div>
    <div class="td">
        '.number_format($ppro['gia']*$q,0, '', '.').'đ
    </div>
</div>';
	}

	echo json_encode($arr);
?>

