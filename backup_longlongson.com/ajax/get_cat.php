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

    $idl=$_GET['idl'];

    $d->reset();
    $sql="select id,ten_$lang as ten,tenkhongdau from #_product_cat where hienthi=1 and id_list='".$idl."' order by stt,id desc";
    $d->query($sql);
    $res=$d->result_array();
?>
<option value="">Chọn thương hiệu</option>
<?php for ($i=0; $i < count($res); $i++) { ?>
    <option value="<?=$res[$i]['id']?>"><?=$res[$i]['ten']?></option>
<?php }?>