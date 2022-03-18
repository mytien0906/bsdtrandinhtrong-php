<form name="dangnhap" action="" method="post" class="form-horizontal" id="fst1">
    <div class="w-st1">
        <div class="st1-tit">
            Vui lòng điền Email/Số điện thoại của bạn:
        </div>
        <div style="color:#F00;font-weight:bold;" class="thongbao">
            <?=$thongbao?>
        </div>
        <div>
            <input type="text" name="email" placeHolder="Email/ Số điện thoại" class="form-control" />
        </div>
        <div class="st1-pwd">
            <input type="password" name="password" placeHolder="Mật khẩu" class="form-control" />
        </div>
        <div>
            <input type="radio" name="loai" value="0" id="khongtaikhoan" checked class="ra-type" />
            <label for="khongtaikhoan">Tôi là khách hàng mới</label>
        </div>
        <div>
            <input type="radio" name="loai" value="1" id="cotaikhoan" class="ra-type"/>
            <label for="cotaikhoan">Tôi đã có tài khoản</label>
        </div>
        <div>
            <input type="button" value="Tiếp tục thanh toán" />
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ra-type').change(function(event) {
            if(document.getElementById('khongtaikhoan').checked==true)
            {
                $('.st1-tit').html('Vui lòng điền Email/Số điện thoại của bạn:');
                $(".w-st1 input[type='text']").attr({'placeHolder':'Email/ Số điện thoại','name':'email'});
                $('.st1-pwd').hide();
            }
            else
            {
                $('.st1-tit').html('Vui lòng đăng nhập');
                $(".w-st1 input[type='text']").attr({'placeHolder':'Tên đăng nhập','name':'username'});
                $('.st1-pwd').show();
            }
        });

        $('.w-st1 input[type="button"]').click(function(event) {
            if($(".w-st1 input[type='text']").val()=='')
            {
                $('.thongbao').html('Vui lòng điền thông tin bên dưới!');
            }
            else
            {
                $('#fst1').submit();       
            }
        });
    });
</script>