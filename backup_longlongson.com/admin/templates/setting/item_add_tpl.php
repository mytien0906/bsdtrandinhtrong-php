<section class="content-header">
  <h1>Thiết lập hệ thống</h1>
</section>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <div class="box-body">
                <form name="frm" method="post" action="index.php?com=setting&act=save" enctype="multipart/form-data" class="form-horizontal">
                	<ul class="nav nav-tabs" style="margin-left:0px; margin-bottom:15px;">
                		<?php $i=1; foreach ($config['use_lang'] as $key => $value) {?>
							<li <?=($i==1)?'class="active"':''?>>
								<a href="#tab<?=$i?>" data-toggle="tab" aria-expanded="true">
									<?=$config['name_lang'][$key]?>
								</a>
							</li>		
						<?php $i++;} ?>
	                </ul>
	                <div class="tab-content">
	                	<?php $i=1; foreach ($config['use_lang'] as $key => $value) {?>
						<div class="tab-pane <?php if($i==1){echo ' active';} ?>" id="tab<?=$i?>">
							<div class="form-group">
		                		<label class="col-sm-2 control-label">Title<?=$value?></label>
		                		<div class="col-sm-10">
	                		    	<input type="text" name="data[title_<?=$key?>]" class="form-control" value="<?=@$item['title_'.$key]?>"/>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Keywords<?=$value?></label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data[keywords_<?=$key?>]" class="form-control" value="<?=@$item['keywords_'.$key]?>"/>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Description<?=$value?></label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data[description_<?=$key?>]" class="form-control" value="<?=@$item['description_'.$key]?>"/>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Tên công ty<?=$value?></label>
		                		<div class="col-sm-10">
	                		    	<input type="text" name="data[ten_<?=$key?>]" class="form-control" value="<?=@$item['ten_'.$key]?>"/>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Địa chỉ<?=$value?></label>
		                		<div class="col-sm-10">
	                		    	<input type="text" name="data[diachi_<?=$key?>]" <?php if($key=='vi'){echo 'onblur="showAddress(this.value);"';} ?> class="form-control" value="<?=@$item['diachi_'.$key]?>"/>
			                    </div>
		                	</div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Slogan<?=$value?></label>
                                <div class="col-sm-10">
                                    <input type="text" name="data[slogan_<?=$key?>]" class="form-control" value="<?=@$item['slogan_'.$key]?>"/>
                                </div>
                            </div>
						</div>
	                	<?php $i++;} ?>
	                </div>

	                <hr/>

	                <div class="form-group">
                		<label class="col-sm-2 control-label">Meta</label>
                		<div class="col-sm-10">
                			<textarea name="data[meta]" class="form-control" rows="5"><?=@$item['meta']?></textarea>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Google analytics</label>
                		<div class="col-sm-10">
                			<textarea name="data[gga]" class="form-control" rows="5"><?=@$item['gga']?></textarea>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Webmaster tool</label>
                		<div class="col-sm-10">
                			<textarea name="data[wmt]" class="form-control" rows="5"><?=@$item['wmt']?></textarea>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Mã chat</label>
                		<div class="col-sm-10">
                			<textarea name="data[chat]" class="form-control" rows="5"><?=@$item['chat']?></textarea>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Favicon</label>
                		<div class="col-sm-10">
                			<p>
	                        	<img src="<?=_upload_hinhanh.$item['favicon']?>" alt="" onError="this.src='dist/img/no_image.png';" style="border:1px solid #CCC; width:50px;" />
	                        </p>
                			<input type="file" name="file" class="form-control" />
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Website</label>
                		<div class="col-sm-10">
            		    	<input type="text" name="data[website]" class="form-control" value="<?=@$item['website']?>"/>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Facbook</label>
                		<div class="col-sm-10">
            		    	<input type="text" name="data[facebook]" class="form-control" value="<?=@$item['facebook']?>"/>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Email</label>
                		<div class="col-sm-10">
            		    	<input type="text" name="data[email]" class="form-control" value="<?=@$item['email']?>"/>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Điện thoại</label>
                		<div class="col-sm-10">
            		    	<input type="text" name="data[dienthoai]" class="form-control" value="<?=@$item['dienthoai']?>"/>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Hotline</label>
                		<div class="col-sm-10">
            		    	<input type="text" name="data[hotline]" class="form-control" value="<?=@$item['hotline']?>"/>
	                    </div>
                	</div>
                    <div class="form-group">
                		<label class="col-sm-2 control-label">Tọa độ google map</label>
                		<div class="col-sm-10">
            		    	<input type="text" name="data[toado]" id="txt_location" class="form-control" value="<?=@$item['toado']?>"/>
	                    </div>
                	</div>

                	<div class="form-group">
                		<label class="col-sm-2 control-label"></label>
                		<div class="col-sm-10">
    						<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
							<input type="submit" value="Lưu" class="btn btn-info" />
	                    </div>
                	</div>
				</form>
				<div id="map" style="width: 100%;height:400px; margin-top:10px;"></div>
                </div>
            </div><!-- /.box -->
		</div>
	</div>
</section>

<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAgrj58PbXr2YriiRDqbnL1RSqrCjdkglBijPNIIYrqkVvD1R4QxRl47Yh2D_0C1l5KXQJGrbkSDvXFA"
      type="text/javascript"></script>
<script type="text/javascript">

function load() {
if (GBrowserIsCompatible()) {
var map = new GMap2(document.getElementById("map"));
map.addControl(new GSmallMapControl());
map.addControl(new GMapTypeControl());
var center = new GLatLng(<?php if($item['toado']!='') echo $item['toado']; else echo $config['locationdefault']?>);
map.setCenter(center, 15);
geocoder = new GClientGeocoder();
var marker = new GMarker(center, {draggable: true});  
map.addOverlay(marker);     
document.getElementById("txt_location").value = center.lat().toFixed(6) +','+center.lng().toFixed(6);
GEvent.addListener(marker, "dragend", function() {
var point = marker.getPoint();
  map.panTo(point);
  document.getElementById("txt_location").value = point.lat().toFixed(6) +','+point.lng().toFixed(6);
});
GEvent.addListener(map, "moveend", function() {
  map.clearOverlays();
var center = map.getCenter();
  var marker = new GMarker(center, {draggable: true});
  map.addOverlay(marker);
document.getElementById("txt_location").value = center.lat().toFixed(6) +','+center.lng().toFixed(6);
GEvent.addListener(marker, "dragend", function() {
var point =marker.getPoint();
 map.panTo(point);
document.getElementById("txt_location").value = point.lat().toFixed(6) +','+point.lng().toFixed(6);
});
});
}
}
function showAddress(address) {
var map = new GMap2(document.getElementById("map"));
map.addControl(new GSmallMapControl());
map.addControl(new GMapTypeControl());
if (geocoder) {
geocoder.getLatLng(
  address,
  function(point) {
    if (!point) {
      alert(address + " not found");
    } else {
         document.getElementById("txt_location").value = point.lat().toFixed(6) +','+point.lng().toFixed(6);
 map.clearOverlays()
    map.setCenter(point, 14);
var marker = new GMarker(point, {draggable: true});  
 map.addOverlay(marker);

GEvent.addListener(marker, "dragend", function() {
var pt = marker.getPoint();
 map.panTo(pt);
 document.getElementById("txt_location").value = pt.lat().toFixed(6) +','+pt.lng().toFixed(6);
});
GEvent.addListener(map, "moveend", function() {
  map.clearOverlays();
var center = map.getCenter();
  var marker = new GMarker(center, {draggable: true});
  map.addOverlay(marker);
  document.getElementById("txt_location").value = center.lat().toFixed(6) +','+center.lng().toFixed(6);
GEvent.addListener(marker, "dragend", function() {
var pt = marker.getPoint();
map.panTo(pt);
document.getElementById("txt_location").value = pt.lat().toFixed(6) +','+pt.lng().toFixed(6);
});

});
    }
  }
);
}
}
</script>
