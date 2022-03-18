<?php
	session_start();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './lib/');

	include_once _lib."config.php";
	include_once _lib."config_type.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";	

	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$login_name = 'Gaconlonton';

	if(isset($_REQUEST['author'])){ 
      header('Content-Type: text/html; charset=utf-8');
      echo '<pre>';
      print_r($config['author']);
      echo '</pre>';
      die();
	}
	
	$d = new database($config['database']);

	switch($com){		
		case 'tintuc':
			$source = "tintuc";
			break;
		case 'comment':
			$source = "comment";
			break;
		case 'thanhvien':
			$source = "thanhvien";
			break;
		case 'order':
			$source = "donhang";
			break;
		case 'video':
			$source = "video";
			break;
		case 'email_dk':
			$source = "email_dk";
			break;
		case 'yahoo':
			$source = "yahoo";
			break;
		case 'photo':
			$source = "photo";
			break;
		case 'banner':
			$source = "banner";
			break;
		case 'bg':
			$source = "bg";
			break;
		case 'page':
			$source = "page";
			break;
		case 'baiviet':
			$source = "baiviet";
			break;
		case 'product':
			$source = "product";
			break;
		case 'setting':
			$source = "setting";
			break;
		case 'user':
			$source = "user";
			break;
		case 'nhantin':
			$source = "nhantin";
			break;
		default: 
			$source = "";
			$template = "index";
			break;
	}

	if((!isset($_SESSION[$login_name]) || $_SESSION[$login_name]==false) && $act!="login"){
		redirect("index.php?com=user&act=login");
	}
	
	if($source!="") include _source.$source.".php";

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	    <title>Website Administration</title>
	    <!-- Bootstrap 3.3.5 -->
    	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    	<!-- Font Awesome -->
	    <link rel="stylesheet" href="css/font-awesome.min.css">
	    <!-- Theme style -->
	    <link rel="stylesheet" href="dist/css/AdminLTE.css">
	    <!-- AdminLTE Skins. Choose a skin from the css/skins
	         folder instead of downloading all of them to reduce the load. -->
	    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	    <!-- iCheck -->
	    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
	    <!-- Date Picker -->
	    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
	    <!-- Daterange picker -->
	    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
	    <!-- jQuery 2.1.4 -->
	    <!--Stylesheets-->
		<link href="css/jquery.filer.css" type="text/css" rel="stylesheet" />
		<link href="css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
	    <link rel="stylesheet" href="css/style.css">
    	<script src="ckeditor/ckeditor.js"></script>
		<script src="ckfinder/ckfinder.js"></script>
		<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.ck_editor').each(function(index, el) {
					var id=$(this).attr('id');
					var editor = CKEDITOR.replace( ''+id,{
						uiColor : '#9AB8F3',    
						language:'en',
						skin:'moono',
						height: 300,
						filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
						filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
						filebrowserLinkBrowseUrl : 'ckfinder/ckfinder.html',
						
						filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
						filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',	
						filebrowserLinkUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload',	
					});
				});
			});
		</script>
	</head>
	<body class="skin-blue sidebar-mini fixed" <?php if($_GET['com']=='setting'){echo 'onload="load()"';} ?>>
		<?php if(isset($_SESSION[$login_name]) && ($_SESSION[$login_name] == true)){?>  
		<div class="wrapper">
			<header class="main-header">
				<?php include _template."header_tpl.php";?>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
      		<aside class="main-sidebar">
				<?php include _template."menu_tpl.php";?>
      		</aside>
      		<!-- End Left side column. contains the logo and sidebar -->
      		<div class="content-wrapper">
				<?php include _template.$template."_tpl.php" ?>
      		</div><!-- End class="content-wrapper" -->
      		<footer class="main-footer">
				<?php include _template."footer_tpl.php";?>
      		</footer>
		</div><!-- end class="wrapper" -->
		<?php }else{ ?>
			<?php include _template.$template."_tpl.php" ?>
		<?php } ?>
		<script src="js/my.js"></script>
		<!-- jQuery UI 1.11.4 -->
	    <script src="js/jquery-ui.min.js"></script>
	    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	    <script>
	      $.widget.bridge('uibutton', $.ui.button);
	    </script>
	    <!-- Bootstrap 3.3.5 -->
	    <script src="bootstrap/js/bootstrap.min.js"></script>
	    <!-- daterangepicker -->
	    <script src="js/moment.min.js"></script>
	    <script src="plugins/daterangepicker/daterangepicker.js"></script>
	    <!-- datepicker -->
	    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
	    <!-- FastClick -->
	    <script src="plugins/fastclick/fastclick.min.js"></script>
	    <!-- Slimscroll -->
    	<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
	    <!-- AdminLTE App -->
	    <script src="dist/js/app.min.js"></script>
	    <!-- AdminLTE for demo purposes -->
	    <script src="dist/js/demo.js"></script>
	    <!--jQuery-->
		<script type="text/javascript" src="js/jquery.filer.min.js"></script>
		<?php if($_GET['com']=='banner' || $_GET['com']=='bg'){ ?>
		<link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
		<!-- bootstrap color picker -->
    	<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".my-colorpicker2").colorpicker();
			});
		</script>
		<?php } ?>
	</body>
</html>