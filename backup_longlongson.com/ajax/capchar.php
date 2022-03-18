<?php
@define ( '_lib' , '../admin/lib/');
include_once _lib."config.php";
include_once _lib."constant.php";
include_once _lib."class.database.php";
$d = new database($config['database']);
@$value = $_GET['value'];
?>

<?=$value?>