<form name="dangnhap" action="" method="post" class="w-dk w-dmk" onsubmit="return ck_dk()">
    <div class="main-tit"><h2><?=$title_tcat?></h2></div>
    <div style="color:#F00;font-weight:bold;">
        <?=$thongbao?>
    </div>
    <div class="w-clear">
        <div class="dk-l">
            Mật khẩu hiện tại <span>(*)</span>
        </div>
        <div class="dk-r">
            <input type="password" name="curpass" class="input" placeholder="Mật khẩu hiện tại" id="curpass" />
        </div>
        <div class="dk-a">
            
        </div>
    </div>
    <div class="w-clear">
        <div class="dk-l">
            Mật khẩu mới <span>(*)</span>
        </div>
        <div class="dk-r">
            <input type="password" name="newpass" class="input" placeholder="Mật khẩu mới" id="newpass" />
        </div>
        <div class="dk-a">
            
        </div>
    </div>
    <div class="w-clear">
        <div class="dk-l">
            Nhập lại mật khẩu <span>(*)</span>
        </div>
        <div class="dk-r">
            <input type="password" class="input" placeholder="Xác nhận lại mật khẩu" id="repass"/>
        </div>
        <div class="dk-a">
            
        </div>
    </div>
    <div class="w-clear">
        <div class="dk-l dn-vh">
            
        </div>
        <div class="dk-r">
            <input type="submit" class="button" value="Cập nhật" id="btn-capnhat"/>  
        </div>
    </div>
</form>

<script type="text/javascript">
    function ck_dk()
    {
        var ck=true;
        $('#curpass').parent().next().html('');
        $('#newpass').parent().next().html('');
        $('#repass').parent().next().html('');
        if($('#curpass').val()=='')
        {
            $('#curpass').parent().next().html('Bắt buộc nhập');
            ck=false;
        }
        if($('#newpass').val().length<6)
        {
            $('#newpass').parent().next().html('Mật khẩu ít nhất 6 ký tự');
            ck=false;
        }
        if($('#newpass').val()!=$('#repass').val())
        {
            $('#repass').parent().next().html('Mật khẩu không trùng khớp');
            ck=false;
        }
        if(ck!=false)
        {
            $("#btn-capnhat").val('Vui lòng đợi...');
        }
        return ck;
    }
</script>