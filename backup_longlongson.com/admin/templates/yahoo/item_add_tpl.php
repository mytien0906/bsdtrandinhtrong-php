<?php
	$mstt=get_stt('yahoo');
?>

<section class="content-header">
  <h1>Thêm hỗ trợ</h1>
</section>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <div class="box-body">
                <form name="frm" method="post" action="index.php?com=yahoo&act=save" enctype="multipart/form-data" class="form-horizontal">
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Tên</label>
                		<div class="col-sm-10">
							<input type="text" name="ten" class="form-control" value="<?=@$item['ten']?>"/>
                		</div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Yahoo</label>
                		<div class="col-sm-10">
							<input type="text" name="yahoo" class="form-control" value="<?=@$item['yahoo']?>"/>
                		</div>
                	</div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Skype</label>
                        <div class="col-sm-10">
                            <input type="text" name="skype" class="form-control" value="<?=@$item['skype']?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Điện thoại</label>
                        <div class="col-sm-10">
                            <input type="text" name="dienthoai" class="form-control" value="<?=@$item['dienthoai']?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" value="<?=@$item['email']?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                		<label class="col-sm-2 control-label">Số thứ tự</label>
                		<div class="col-sm-10">
                			<input type="text" name="stt" value="<?=isset($item['stt'])?$item['stt']:$mstt?>" class="form-control" style="width:40px; text-align:center;">
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
							<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=yahoo&act=man'" class="btn btn-danger" />
	                    </div>
                	</div>
				</form>
                </div>
            </div><!-- /.box -->
		</div>
	</div>
</section>
