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
	
	$id=(int)$_GET['id'];

	$d->reset();
	$sql="select id,ten_$lang as ten from #_diachi_cat where hienthi=1 and id_list='".$id."' order by stt desc,id asc";
	$d->query($sql);
	$quan=$d->result_array();
	
?>

<option value="">DISTRICT</option>
<?php for ($i=0; $i < count($quan); $i++) { ?>
    <option value="<?=$quan[$i]['ten']?>" data-id="<?=$quan[$i]['id']?>"><?=$quan[$i]['ten']?></option>
<?php }?>