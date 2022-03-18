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
	
	$id=$_GET['id'];
	
	$d->reset();
	$sql="select ten_$lang as ten,toado from #_product_tab where id=$id";
	$d->query($sql);
	$tmp=$d->fetch_array();
	
?>

<div id="map_canvas" style="height:400px; border:1px solid #000; width:500px"></div>
<script>
	function initialize() {
		var myLatlng = new google.maps.LatLng(<?=$tmp['toado']?>);
		var mapOptions = {
			zoom: 15,
			center: myLatlng
		};

		var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

		var contentString = "<table><tr><th><?=$tmp['ten']?></th></tr></table>";

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: '<?=$tmp['ten']?>'
		});
		infowindow.open(map, marker);
	}

	google.maps.event.addDomListener(window, 'load', initialize);


</script>