<script language="javascript" src="admin/media/scripts/my_script.js"></script>
<script language="javascript">
function js_submit(){
	
	if(isEmpty(document.getElementById('ten'), "<?=_xinnhaphoten?>")){
		document.getElementById('ten').focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('diachi'), "<?=_xinnhapdiachi?>")){
		document.getElementById('diachi').focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('dienthoai'), "<?=_xinnhapdt?>")){
		document.getElementById('dienthoai').focus();
		return false;
	}
	
	if(!isNumber(document.getElementById('dienthoai'), "<?=_dtkhonghople?>")){
		document.getElementById('dienthoai').focus();
		return false;
	}
	
	if(!check_email(document.frm.email.value)){
		alert("<?=_emailkhonghople?>");
		document.frm.email.focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('tieude1'), "<?=_xinnhaptieude?>")){
		document.getElementById('tieude1').focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('noidung'), "<?=_xinnhapnoidung?>")){
		document.getElementById('noidung').focus();
		return false;
	}
	
	document.frm.submit();
}
</script>
<div class="content">
	<div class="main-tit"><h2><?=_lienhe?></h2><div class="clear"></div></div>
	<div class="lh-l"><?=$company_contact['noidung']?> </div>

	<div class="lh-r">
	<form method="post" name="frm" action="" enctype="multipart/form-data">
	    <div class="lh-con-l"><?=_hovaten?> (<span>*</span>)</div>
	    <div class="lh-con-r"><input name="ten" type="text" id="ten" class="ipct input" /></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l"><?=_diachi?> (<span>*</span>)</div>
	    <div class="lh-con-r"><input name="diachi" type="text" id="diachi" class="ipct input"/></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l"><?=_dienthoai?> (<span>*</span>)</div>
	    <div class="lh-con-r"><input name="dienthoai" type="text" id="dienthoai" class="ipct input"/></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l">Email (<span>*</span>)</div>
	    <div class="lh-con-r"><input name="email" type="text" class="ipct input" /></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l"><?=_chude?> (<span>*</span>)</div>
	    <div class="lh-con-r"><input name="tieude1" type="text" id="tieude1" class="ipct input"/></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l"><?=_noidung?> (<span>*</span>)</div>
	    <div class="lh-con-r"><textarea name="noidung" cols="52" rows="7" id="noidung" class="tact"></textarea></div>
	    <div class="clear"></div>
	    
	    <div class="lh-con-l" style="visibility:hidden;">a</div>
	    <div class="lh-con-r"><input type="button" value="<?=_gui?>" onclick="js_submit();" class="btnct button"/>
	    <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" class="btnct button" /></div>
	    <div class="clear"></div>
	</form>
	</div>
	<div class="clear"></div>
	<div id="map_canvas" style="border:1px solid #CCC; height:400px;margin-top:20px;"></div>
</div>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSaOkH3-RuO5G5au4guUxausk2-w1d_mA"></script>
    <script>
        function initialize() {
            var myLatlng = new google.maps.LatLng(<?=$row_setting['toado']?>);
			var mapOptions = {
                zoom: 15,
                center: myLatlng
            };
 
            var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
 
            var contentString = "<table><tr><th><?=$row_setting['ten_'.$lang]?></th></tr><tr><td><?=$row_setting['diachi_'.$lang]?></td></tr></table>";
 
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
			
            var marker = new google.maps.Marker({
                position: myLatlng,
				map: map,
                title: '<?=$row_setting['ten_'.$lang]?>'
            });
			infowindow.open(map, marker);
		}
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
