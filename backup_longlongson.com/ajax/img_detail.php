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
	
	$d->reset();
	$sql="select photo from #_product_hinhanh where hienthi=1 and id_mau=$id order by stt,id desc";
	$d->query($sql);
	$row_hinhanhsp=$d->result_array();
	
?>
<div class="ct-l-slick">
<?php for($i=0;$i<count($row_hinhanhsp);$i++){?>
    <div>
        <div style="padding:5px 0px;">
            <img src="<?=_upload_product_l.$row_hinhanhsp[$i]['photo']?>" alt="<?=$row_detail['ten']?>" class="ctsp-img"/>
        </div>
    </div>
<?php }?>
</div>
