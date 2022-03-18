<?php
	$mstt=get_stt_type_level('tintuc_list',$type,$level);

	function get_level($i,$id,$idl)
	{
		global $d;

		(int)$i;

		if($i>0)
		{
			$ssql=" and id_lv".($i-1)."='$idl'";
		}

		$d->reset();
		$sql="select id,ten_vi as ten from #_tintuc_list where level='$i' and type='".$_GET['type']."' $ssql order by stt,id desc";
		$d->query($sql);
		$res=$d->result_array();

		
		$str='<select name="data[id_lv'.$i.']" id="level'.$i.'" class="level_change form-control" style="max-width:100%;" data-lv="'.$i.'">';
		$str.='<option value="">Chọn danh mục cấp '.($i+1).'</option>';
		for ($i=0; $i < count($res); $i++) { 
			if($res[$i]['id']==$id)
			{
				$sl='selected="selected"';
			}
			$str.='<option value="'.$res[$i]['id'].'" '.$sl.'>'.$res[$i]['ten'].'</option>';
			$sl='';
		}
		$str.='</select>';		
		return $str;
	}
?>

<section class="content-header">
  <h1>Thêm danh mục</h1>
</section>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <div class="box-body">
                <form name="frm" method="post" action="index.php?com=<?=$_GET['com']?>&act=save_list&type=<?=$type?>" enctype="multipart/form-data" class="form-horizontal">
                	<div class="form-group">
						<?php for ($i=0; $i < $level; $i++) {?>
						<label class="col-sm-2 control-label">Danh mục cấp <?=$i+1?></label>
						<div class="col-sm-10">
							<p>
								<?=get_level($i,$item['id_lv'.$i],$item['id_lv'.($i-1)])?>
							</p>
						</div>
						<?php } ?>
                	</div>
					<?php if($config['type'][$type]['photo_list']==true || $config['type'][$type]['thumb_list']==true){?>
					<div class="form-group">
                		<label class="col-sm-2 control-label">Ảnh hiện tại</label>
                		<div class="col-sm-10">
                			<p>
	                        	<img src="<?=_upload_tintuc.$item['thumb']?>" alt="" onError="this.src='dist/img/no_image.png';" style="border:1px solid #CCC;" />
	                        </p>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Chọn ảnh</label>
                		<div class="col-sm-10">
                			<p>
	                        	<input type="file" name="file" class="form-control" />
	                        </p>
	                    </div>
	                </div>
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
		                			<p>
			                        	<input type="text" name="data[ten_<?=$key?>]" class="form-control" value="<?=@$item['ten_'.$key]?>"/>
			                        </p>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Title<?=$value?></label>
		                		<div class="col-sm-10">
		                			<p>
			                        	<input type="text" name="data[title_<?=$key?>]" class="form-control" value="<?=@$item['title_'.$key]?>"/>
			                        </p>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Keywords<?=$value?></label>
		                		<div class="col-sm-10">
		                			<p>
			                        	<input type="text" name="data[keywords_<?=$key?>]" class="form-control" value="<?=@$item['keywords_'.$key]?>"/>
			                        </p>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Description<?=$value?></label>
		                		<div class="col-sm-10">
		                			<p>
			                        	<input type="text" name="data[description_<?=$key?>]" class="form-control" value="<?=@$item['description_'.$key]?>"/>
			                        </p>
			                    </div>
		                	</div>
						</div>
	                    <?php $i++;} ?>
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
					<input type="hidden" name="data[level]" value="<?=$level?>" />

					<div class="form-group">
                		<label class="col-sm-2 control-label"></label>
                		<div class="col-sm-10">
    						<input type="submit" value="Lưu" class="btn btn-info" />
							<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=<?=$_GET['com']?>&act=man_list&type=<?=$type?>&level=<?=$level?>'" class="btn btn-danger" />
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
		var max_c=<?=$level?>;
		var lv=parseInt($(this).attr('data-lv'));
		var id=$(this).val();
		var lv1=lv+1;
		if(lv<(max_c-1))
		{
			$('#level'+lv1).load('ajax/load_level.php?com=<?=$_GET['com']?>&level=<?=$_GET['level']?>&type=<?=$_GET['type']?>&id='+id+'&lv='+lv);	
		}
	});
</script>
