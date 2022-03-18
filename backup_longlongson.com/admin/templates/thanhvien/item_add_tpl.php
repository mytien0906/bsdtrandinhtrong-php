<section class="content-header">
  <h1>Thêm thành viên</h1>
</section>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <div class="box-body">
                <form name="frm" method="post" action="index.php?com=<?=$_GET['com']?>&act=save" enctype="multipart/form-data" class="form-horizontal">
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Tên đăng nhập</label>
                		<div class="col-sm-6">
                			<input type="text" name="username" value="<?=$item['username']?>" data-cuser="<?=$item['username']?>" class="form-control" required="required"/>
                		</div>
	                    <div class="col-sm-4">
                			<strong style="color:#F00; margin-left:20px;" class="checkuser"></strong>
                		</div>
                	</div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Mật khẩu</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" value="" class="form-control"/>
                        </div>
                    </div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Họ tên</label>
                		<div class="col-sm-10">
                			<input type="text" name="ten" value="<?=$item['ten']?>" class="form-control" />
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Email</label>
                		<div class="col-sm-10">
                			<input type="text" name="email" value="<?=$item['email']?>" class="form-control" />
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Địa chỉ</label>
                		<div class="col-sm-10">
                			<input type="text" name="diachi" value="<?=$item['diachi']?>" class="form-control" />
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Điện thoại</label>
                		<div class="col-sm-10">
                			<input type="text" name="dienthoai" value="<?=$item['dienthoai']?>" class="form-control" />
	                    </div>
                	</div>
                    <div class="form-group">
                		<label class="col-sm-2 control-label">Kích hoạt</label>
                		<div class="col-sm-10">
    						<input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>>
	                    </div>
                	</div>

	                <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
					<div class="form-group">
                		<label class="col-sm-2 control-label"></label>
                		<div class="col-sm-10">
    						<input type="submit" value="Lưu" class="btn btn-info" />
							<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=<?=$_GET['com']?>&act=man'" class="btn btn-danger" />
	                    </div>
                	</div>
				</form>
                </div>
            </div><!-- /.box -->
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(e) {
        $('input[name="username"]').keyup(function(){
			var user=$(this).val();
			var cuser=$(this).attr('data-cuser');
			if(user!=cuser)
			{
				$.ajax({
					type:"POST",
					url:"ajax/checkuser.php",
					data:{user:user,cuser:cuser},
					success: function(re)
					{
						$('.checkuser').html(re);
					}	
				})
			}
			else
			{
				$('.checkuser').html('');
			}
		})
	});
</script>