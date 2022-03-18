<script language="javascript" src="media/scripts/my_script.js"></script>
<script language="javascript">
function js_submit(){
	if(isEmpty(document.frm.username, "Chưa nhập tên đăng nhập.")){
		return false;
	}
	
	if(isEmpty(document.frm.oldpassword, "Chưa nhập mật khẩu cũ.")){
		return false;
	}
	
	if(!isEmpty(document.frm.new_pass) && document.frm.new_pass.value.length<5){
		alert("Mật khẩu phải nhiều hơn 4 ký tự.");
		document.frm.new_pass.focus();
		return false;
	}
	
	if(!isEmpty(document.frm.new_pass) && document.frm.new_pass.value!=document.frm.renew_pass.value){
		alert("Nhập lại mật khẩu mới không chính xác.");
		document.frm.renew_pass.focus();
		return false;
	}
	
	if(!isEmpty(document.frm.email) && !check_email(document.frm.email.value)){
		alert('Email không hợp lệ.');
		document.frm.email.focus();
		return false;
	}
}
</script>


<section class="content-header">
  <h1>Quản lý tài khoản</h1>
</section>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <div class="box-body">
                <form name="frm" method="post" action="index.php?com=user&act=admin_edit" enctype="multipart/form-data" class="form-horizontal" onSubmit="return js_submit();">
                	<div class="form-group">
						<label class="col-sm-2 control-label">Tên đăng nhập</label>
						<div class="col-sm-10">
							<input type="text" name="username" id="username" class="form-control" value="<?=@$item['username']?>"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Mật khẩu</label>
						<div class="col-sm-10">
							<input type="password" name="oldpassword" id="oldpassword" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Mật khẩu mới</label>
						<div class="col-sm-10">
							<input type="password" name="new_pass" id="new_pass" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Nhập lại mật khẩu mới</label>
						<div class="col-sm-10">
							<input type="password" name="renew_pass" id="renew_pass" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Họ tên</label>
						<div class="col-sm-10">
							<input type="text" name="ten" id="ten" class="form-control" value="<?=@$item['ten']?>"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" name="email" id="email" class="form-control" value="<?=@$item['email']?>"/>
						</div>
					</div>
					
	                <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
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
