<?php
	session_start();
	$session=session_id();
	date_default_timezone_set('Asia/Saigon');
	@define ( '_template' , '../templates/'); //định nghĩa đường dẫn tắt, chèn biến vào thay thế
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../admin/lib/');
	@define ( _upload_folder , './media/upload/' );

	$lang=$_SESSION['lang'];

	require_once _source."lang_$lang.php";
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	
	$id=$_POST['id'];

	# Lay tab san pham
	$d->reset();
	$sql="select id,thumb,photo1 from #_product_tab where hienthi=1 and id_pro='$id' order by stt,id desc";
	$d->query($sql);
	$product_tab=$d->result_array();	

    $thumb='';
    $photo='';
    for ($i=0; $i < count($product_tab); $i++) { 
        if($i==0)
        {
            $at='class="active"';
        }
        else{
            $at='';
        }
        $thumb.='<img src="'._upload_product_l.$pp_tab[$i]['thumb'].'" alt="Phương pháp phối màu khác" />';
        $photo.='<img src="'._upload_product_l.$pp_tab[$i]['photo1'].'" alt="Phương pháp phối màu khác" '.$at.'/>';
    }
    $arr = array('a' => $thumb, 'b' => $photo);
    echo json_encode($arr);
?>
