<?php
	session_start();
	@define ( '_template' , '../templates/');
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../lib/');

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";	
	
	$d = new database($config['database']);

	$com=$_GET['com'];
	$type=$_GET['type'];
	$level=(int)$_GET['level'];
	$lv=(int)$_GET['lv'];
	$id=(int)$_GET['id'];

	$d->reset();
	$sql="select id,ten_vi as ten from #_".$com."_list where id_lv".$lv."='$id' and level='".($lv+1)."' order by stt,id desc";
	$d->query($sql);
	$re=$d->result_array();
?>

<option value="">Chọn danh mục cấp <?=$lv+2?></option>
<?php for ($i=0; $i < count($re); $i++) {  ?>
<option value="<?=$re[$i]['id']?>"><?=$re[$i]['ten']?></option>
<?php } ?>
