<?php
	$mstt=get_stt_type('nhantin',$type);

?>

<section class="content-header">
  <h1>Thêm tin</h1>
</section>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <div class="box-body">
                <form name="frm" method="post" action="index.php?com=<?=$_GET['com']?>&act=save&type=<?=$type?>" enctype="multipart/form-data" class="form-horizontal">
					<?php /* <div class="form-group">
                		<label class="col-sm-2 control-label">Ảnh hiện tại</label>
                		<div class="col-sm-10">
                			<p>
	                        	<img src="<?=_upload_tintuc.$item['thumb']?>" alt="" onError="this.src='dist/img/no_image.png';" style="border:1px solid #CCC;" />
	                        </p>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Chọn ảnh</label>
                		<div class="col-sm-6">
                			<p>
	                        	<input type="file" name="file" class="form-control" />
	                        </p>
	                    </div>
	                    <div class="col-sm-4">
                			<p>
	                        	Kích thước: <strong><?=$config['type'][$type]['thumb_width']?>px</strong> x <strong><?=$config['type'][$type]['thumb_height']?>px</strong>
	                        </p>
	                    </div>
	                </div> */ ?>
					
	                <div class="tab-content">
							<div class="form-group">
		                		<label class="col-sm-2 control-label">Tên</label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data[ten]" class="form-control" value="<?=@$item['ten']?>"/>
			                    </div>
		                	</div>
		                	<?php if($type=="tuyendung") { ?>
		                		<div class="form-group">
			                		<label class="col-sm-2 control-label">CV Công việc</label>
			                		<div class="col-sm-10" style="line-height: 35px;">
		                		    	<a href="<?=_upload_tintuc.$item['photo']?>" target="_blank">Xem thêm</a>
				                    </div>
			                	</div>
		                		<div class="form-group">
			                		<label class="col-sm-2 control-label">Địa chỉ</label>
			                		<div class="col-sm-10">
		                		    	<input type="text" name="data[diachi]" class="form-control" value="<?=@$item['diachi']?>"/>
				                    </div>
			                	</div>
		                	<?php } ?>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Điện thoại</label>
		                		<div class="col-sm-10">
	                		    	<input type="text" name="data[dienthoai]" class="form-control" value="<?=@$item['dienthoai']?>"/>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Email</label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data[email]" class="form-control" value="<?=@$item['email']?>"/>
			                    </div>
		                	</div>
		                	<?php if($type=="duan") { ?>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Dự án</label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data[tieude]" class="form-control" value="<?=@$item['tieude']?>"/>
			                    </div>
		                	</div>
		                	<?php } ?>
		                	<?php if($type=="tuyendung") { ?>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Vị trí ứng tuyển</label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data[vitriungtuyen]" class="form-control" value="<?=@$item['vitriungtuyen']?>"/>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Công việc hiện tại</label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data[congviechientai]" class="form-control" value="<?=@$item['congviechientai']?>"/>
			                    </div>
		                	</div>
		                	<?php } ?>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Nội dung</label>
		                		<div class="col-sm-10">
		                			<textarea name="data[noidung]" class="form-control" rows="5"><?=@$item['noidung']?></textarea>
			                    </div>
		                	</div>
                    </div>
                    <div class="form-group">
                		<label class="col-sm-2 control-label">Số thứ tự</label>
                		<div class="col-sm-10">
                			<input type="text" name="data[stt]" value="<?=isset($item['stt'])?$item['stt']:$mstt?>" class="form-control" style="width:40px; text-align:center;">
	                    </div>
                	</div>
                    <div class="form-group">
                		<label class="col-sm-2 control-label">Hiển thị</label>
                		<div class="col-sm-10">
    						<input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>>
	                    </div>
                	</div>

	                <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
					<input type="hidden" name="data[type]" value="<?=$type?>" />
					<div class="form-group">
                		<label class="col-sm-2 control-label"></label>
                		<div class="col-sm-10">
    						<input type="submit" value="Lưu" class="btn btn-info" />
							<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=<?=$_GET['com']?>&act=man&type=<?=$type?>'" class="btn btn-danger" />
	                    </div>
                	</div>
				</form>
                </div>
            </div><!-- /.box -->
		</div>
	</div>
</section>

<script type="text/javascript">
	$('.level_change').change(function(event) {
		var max_c=<?=$config['type'][$type]['level']?>;
		var lv=parseInt($(this).attr('data-lv'));
		var id=$(this).val();
		var lv1=lv+1;
		if(lv<(max_c-1))
		{
			$('#level'+lv1).load('ajax/load_level.php?com=<?=$_GET['com']?>&level=<?=$config['type'][$type]['level']?>&type=<?=$_GET['type']?>&id='+id+'&lv='+lv);	
		}
	});
</script>