<section class="content-header">
  <h1>Thêm sản phẩm</h1>
</section>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <div class="box-body">
                <form name="frm" method="post" action="index.php?com=<?=$_GET['com']?>&act=save_tab&type=<?=$type?>&id_pro=<?=$id_pro?>" enctype="multipart/form-data" class="form-horizontal">
                	<?php if($type=='maunhadep' || $type=='mamau' || $type=='sacmau' || $type=='phuongphapphoimau'){ ?>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Ảnh hiện tại</label>
                		<div class="col-sm-10">
                			<p>
	                        	<img src="<?=_upload_product.$item['thumb']?>" alt="" onError="this.src='dist/img/no_image.png';" style="border:1px solid #CCC;" />
	                        </p>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Chọn ảnh nhỏ</label>
                		<div class="col-sm-10">
                			<p>
	                        	<input type="file" name="file" class="form-control" />
	                        </p>
	                    </div>
	                </div>
	                <?php if($type!='mamau'){ ?>
	                <div class="form-group">
                		<label class="col-sm-2 control-label">Ảnh hiện tại</label>
                		<div class="col-sm-10">
                			<p>
	                        	<img src="<?=_upload_product.$item['photo1']?>" alt="" onError="this.src='dist/img/no_image.png';" style="border:1px solid #CCC;" />
	                        </p>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Chọn ảnh lớn</label>
                		<div class="col-sm-10">
                			<p>
	                        	<input type="file" name="file1" class="form-control" />
	                        </p>
	                    </div>
	                </div>
	                <?php } ?>
	                <?php } ?>
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
		                		<label class="col-sm-2 control-label">Tên<?=$value?></label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data[ten_<?=$key?>]" class="form-control" value="<?=@$item['ten_'.$key]?>"/>
			                    </div>
		                	</div>
		                	<?php if($type!='maunhadep' && $type!='mamau' && $type!='sacmau' && $type!='phuongphapphoimau'){ ?>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Nội dung<?=$value?></label>
		                		<div class="col-sm-10">
		                			<textarea id="noidung_<?=$key?>" name="data[noidung_<?=$key?>]" class="form-control ck_editor" id="ck<?=$i?>" rows="5"><?=@$item['noidung_'.$key]?></textarea>
			                    </div>
		                	</div>
		                	<?php } ?>
						</div>
	                    <?php $i++;} ?>
                    </div>
                    <div class="form-group">
                		<label class="col-sm-2 control-label">Số thứ tự</label>
                		<div class="col-sm-10">
                			<input type="text" name="data[stt]" value="<?=isset($item['stt'])?$item['stt']:'1'?>" class="form-control" style="width:40px; text-align:center;">
	                    </div>
                	</div>
                    <div class="form-group">
                		<label class="col-sm-2 control-label">Hiển thị</label>
                		<div class="col-sm-10">
    						<input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>>
	                    </div>
                	</div>

                    <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
	                <input type="hidden" name="data[id_pro]" value="<?=$id_pro?>" />
	                <input type="hidden" name="data[type]" value="<?=$type?>" />
					<div class="form-group">
                		<label class="col-sm-2 control-label"></label>
                		<div class="col-sm-10">
    						<input type="submit" value="Lưu" class="btn btn-info" />
							<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=<?=$_GET['com']?>&act=man_tab&type=<?=$type?>&id_pro=<?=$id_pro?>'" class="btn btn-danger" />
	                    </div>
                	</div>
				</form>
                </div>
            </div><!-- /.box -->
		</div>
	</div>
</section>