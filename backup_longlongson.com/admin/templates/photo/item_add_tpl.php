<section class="content-header">
  <h1>Thêm hình ảnh</h1>
</section>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <div class="box-body">
                <form name="frm" method="post" action="index.php?com=<?=$_GET['com']?>&act=save&type=<?=$type?>" enctype="multipart/form-data" class="form-horizontal">
                	<?php if($_GET['act']=='edit'){ ?>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Ảnh hiện tại</label>
                		<div class="col-sm-10">
                			<p>
	                        	<img src="<?=_upload_hinhanh.$item['thumb']?>" alt="" onError="this.src='dist/img/no_image.png';" style="border:1px solid #CCC; max-width: 100%;" />
	                        </p>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Chọn ảnh</label>
                		<div class="col-sm-<?php if($type=="slider" || $type=='slidermaunha'){echo '6';}else{echo '10';}?>">
                			<p>
	                        	<input type="file" name="file" class="form-control" />
	                        </p>
	                    </div>
	                    <?php if($type=='slider' || $type=='slidermaunha'){?>
	                    <div class="col-sm-4">
	                    	Kích thước: <strong><?=$config['type'][$type]['thumb_width']?>px</strong> x <strong><?=$config['type'][$type]['thumb_height']?>px</strong>
	                    </div>
	                    <?php } ?>
	                </div>
					
					<?php if($config['type'][$type]['ten']){ ?>
						<?php $i=1; foreach ($config['use_lang'] as $key => $value) {?>
	                	<div class="form-group">
	                		<label class="col-sm-2 control-label">Tên<?=$value?></label>
	                		<div class="col-sm-10">
	                			<input type="text" name="data[ten_<?=$key?>]" class="form-control" value="<?=@$item['ten_'.$key]?>" <?php if($type=='bannert') { ?> disabled <?php } ?> />
		                    </div>
	                	</div>
						<?php $i++;} ?>
					<?php } ?>

					<?php if($config['type'][$type]['link']){ ?>
	                <div class="form-group">
                		<label class="col-sm-2 control-label">Link</label>
                		<div class="col-sm-10">
                			<input type="text" name="data[link]" class="form-control" value="<?=@$item['link']?>" <?php if($type=='bannert') { ?> disabled <?php } ?>/>
	                    </div>
                	</div>
                	<?php } ?>

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
                	<?php }else{ ?>
                		<?php for ($j=0; $j < 5; $j++) { ?>
                		<div class="form-group">
	                		<label class="col-sm-2 control-label">Chọn ảnh thứ <?=$j+1?></label>
	                		<div class="col-sm-10">
	                			<p>
		                        	<input type="file" name="file<?=$j?>" class="form-control" />
		                        </p>
		                    </div>
		                </div>
						
						<?php if($config['type'][$type]['ten']){ ?>
							<?php $i=1; foreach ($config['use_lang'] as $key => $value) {?>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Tên<?=$value?></label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data<?=$j?>[ten_<?=$key?>]" class="form-control" value="<?=@$item['ten_'.$key]?>"/>
			                    </div>
		                	</div>
							<?php $i++;} ?>
						<?php } ?>

						<?php if($config['type'][$type]['link']){ ?>
		                <div class="form-group">
	                		<label class="col-sm-2 control-label">Link</label>
	                		<div class="col-sm-10">
	                			<input type="text" name="data<?=$j?>[link]" class="form-control" value="<?=@$item['link']?>"/>
		                    </div>
	                	</div>
	                	<?php } ?>
	                	
	                	<div class="form-group">
	                		<label class="col-sm-2 control-label">Số thứ tự</label>
	                		<div class="col-sm-10">
	                			<input type="text" name="data<?=$j?>[stt]" value="<?=isset($item['stt'])?$item['stt']:1?>" class="form-control" style="width:40px; text-align:center;">
		                    </div>
	                	</div>
	                    <div class="form-group">
	                		<label class="col-sm-2 control-label">Hiển thị</label>
	                		<div class="col-sm-10">
	    						<input type="checkbox" name="hienthi<?=$j?>" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>>
		                    </div>
	                	</div>
	                	<input type="hidden" name="data<?=$j?>[type]" value="<?=$type?>" />
	                	<hr/>
						<?php } ?>
		      
						<div class="form-group">
	                		<label class="col-sm-2 control-label"></label>
	                		<div class="col-sm-10">
	    						<input type="submit" value="Lưu" class="btn btn-info" />
								<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=<?=$_GET['com']?>&act=man&type=<?=$type?>'" class="btn btn-danger" />
		                    </div>
	                	</div>
                	<?php } ?>
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