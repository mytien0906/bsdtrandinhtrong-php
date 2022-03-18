<form name="dangnhap" action="" method="post" class="w-tttk">
    <div class="main-tit"><h2><?=$title_tcat?></h2></div>
    <div style="color:#F00;font-weight:bold;">
        <?=$thongbao?>
    </div>
    <div class="w-clear">
        <div class="dk-l">
            Họ tên
        </div>
        <div class="dk-r">
            <input type="text" name="reg[ten]" class="input" value="<?=$_SESSION['logging']['ten']?>" />
        </div>
        <div class="dk-a">
            
        </div>
    </div>
    <div class="w-clear">
        <div class="dk-l">
            Địa chỉ
        </div>
        <div class="dk-r">
            <input type="text" name="reg[diachi]" class="input" value="<?=$_SESSION['logging']['diachi']?>"/>
        </div>
        <div class="dk-a">
            
        </div>
    </div>
    <div class="w-clear">
        <div class="dk-l">
            Điện thoại
        </div>
        <div class="dk-r">
            <input type="text" name="reg[dienthoai]" class="input" value="<?=$_SESSION['logging']['dienthoai']?>"/>
        </div>
        <div class="dk-a">
            
        </div>
    </div>
    <div class="w-clear">
        <div class="dk-l">
            Email
        </div>
        <div class="dk-r">
            <input type="text" name="reg[email]" class="input" value="<?=$_SESSION['logging']['email']?>"/>
        </div>
        <div class="dk-a">
            
        </div>
    </div>
    <div class="w-clear">
        <div class="dk-l dn-vh">
            
        </div>
        <div class="dk-r">
            <input type="submit" class="button" value="Cập nhật"/>
            <input type="reset" class="button" value="Nhập lại"/>
        </div>
    </div>
</form>