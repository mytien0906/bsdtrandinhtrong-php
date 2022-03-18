<div class="main-tit"><h2>Thông tin tài khoản</h2></div>
<form action="" method="post" name="frm_tv">
<div class="content">
    <div class="box-us w-clear">
        <div class="box-us-l">
            Tên đăng nhập
        </div>
        <div class="box-us-r">
            <?=$_SESSION['logging']['username']?>
        </div>
    </div>
    <div class="box-us w-clear">
        <div class="box-us-l">
            Mật khẩu
        </div>
        <div class="box-us-r">
            <input type="password" name="opassword" class="input" id="pass"/>
        </div>
    </div>
    <div class="box-us w-clear">
        <div class="box-us-l">
            Mật khẩu mới
        </div>
        <div class="box-us-r">
            <input type="password" name="u[password]" id="npass" class="input"/>
        </div>
    </div>
    <div class="box-us w-clear">
        <div class="box-us-l">
            Nhập lại mật khẩu mới
        </div>
        <div class="box-us-r">
            <input type="password" name="repassword" id="rnpass" class="input"/>
        </div>
    </div>
</div>

<div class="main-tit" style="margin-top:20px;"><h2>Thông tin cá nhân</h2></div>
<div class="content">
    <div class="box-us w-clear">
        <div class="box-us-l">
            Họ tên
        </div>
        <div class="box-us-r">
            <input type="text" name="u[ten]" value="<?=$_SESSION['logging']['ten']?>" id="ten" class="input" />
        </div>
    </div>
    <div class="box-us w-clear">
        <div class="box-us-l">
            Điện thoại
        </div>
        <div class="box-us-r">
            <input type="text" name="u[dienthoai]" value="<?=$_SESSION['logging']['dienthoai']?>" id="dienthoai" class="input"/>
        </div>
    </div>
    <div class="box-us w-clear">
        <div class="box-us-l">
            Địa chỉ
        </div>
        <div class="box-us-r">
            <input type="text" name="u[diachi]" id="diachi" value="<?=$_SESSION['logging']['diachi']?>" class="input"/>
        </div>
    </div>
    <div class="box-us w-clear">
        <div class="box-us-l box-us-lv">
            Thanh Tâm
        </div>
        <div class="box-us-r">
            <input type="button" value="Cập nhật" class="button" onclick="js_usubmit()"/>
        </div>
    </div>
</div>
</form>

<script language="javascript" src="admin/media/scripts/my_script.js"></script>
<script language="javascript">
function js_usubmit(){
    
    if(isEmpty(document.getElementById('pass'), "Vui lòng nhập mật khẩu hiện tại của bạn!")){
        document.getElementById('pass').focus();
        return false;
    }

    if(document.getElementById('npass').value.length<6){
        alert('Mật khẩu ít nhất 6 ký tự!');
        document.getElementById('npass').focus();
        return false;
    }
    
    if(document.getElementById('npass').value!=document.getElementById('rnpass').value){
        alert('Nhập lại mật khẩu mới không trùng khớp!');
        document.getElementById('rnpass').focus();
        return false;
    }
    
    if(isEmpty(document.getElementById('ten'), "Vui lòng nhập họ tên của bạn!")){
        document.getElementById('ten').focus();
        return false;
    }

    if(isEmpty(document.getElementById('dienthoai'), "Vui lòng nhập số điện thoại của bạn!")){
        document.getElementById('dienthoai').focus();
        return false;
    }
    
    if(!isNumber(document.getElementById('dienthoai'), "Số điện thoại không hợp lệ!")){
        document.getElementById('dienthoai').focus();
        return false;
    }
    
    if(isEmpty(document.getElementById('diachi'), "Vui lòng nhập họ địa của bạn!")){
        document.getElementById('diachi').focus();
        return false;
    }

    document.frm_tv.submit();
}
</script>