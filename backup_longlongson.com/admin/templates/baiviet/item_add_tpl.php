<section class="content-header">
  <h1>Cập nhật nội dung</h1>
</section>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <div class="box-body">
                <form name="frm" method="post" action="index.php?com=<?=$_GET['com']?>&act=save&type=<?=$type?>" enctype="multipart/form-data" class="form-horizontal">
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
		                		<label class="col-sm-2 control-label">Nội dung<?=$value?></label>
		                		<div class="col-sm-10">
		                			<textarea id="noidung_<?=$key?>" name="data[noidung_<?=$key?>]" class="form-control ck_editor" id="ck<?=$i?>" rows="5"><?=@$item['noidung_'.$key]?></textarea>
			                    </div>
		                	</div>
						</div>
	                    <?php $i++;} ?>
                    </div>
                    
	                <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
					<input type="hidden" name="data[type]" value="<?=$type?>" />
					<div class="form-group">
                		<label class="col-sm-2 control-label"></label>
                		<div class="col-sm-10">
    						<input type="submit" value="Cập nhật" class="btn btn-info" />
	                    </div>
                	</div>
				</form>
                </div>
            </div><!-- /.box -->
		</div>
	</div>
</section>
