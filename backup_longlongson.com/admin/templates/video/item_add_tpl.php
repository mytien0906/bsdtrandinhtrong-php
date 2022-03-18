<?php
	$mstt=get_stt('video');
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
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Link</label>
                		<div class="col-sm-10">
                			<input type="text" name="data[link]" class="form-control" value="<?=$item['link']?>" />
	                    </div>
	                </div>
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