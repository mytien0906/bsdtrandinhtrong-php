<div class="w-st1">
    <form method="post" name="frm" action="" enctype="multipart/form-data" id="frmst3">
        <div class="thongbao">
            <?=$thongbao?>
        </div>
        <div>
            Họ tên: <?=$_SESSION['thanhtoan']['ten']?>
        </div>
        <div>
            Địa chỉ: <?=$_SESSION['thanhtoan']['diachi']?>
        </div>
        <div>
            Điện thoại: <?=$_SESSION['thanhtoan']['dienthoai']?>
        </div>
        <div>
            Email: <?=$_SESSION['thanhtoan']['email']?>
        </div>
        <div>
            Ghi chú: <?=$_SESSION['thanhtoan']['noidung']?>
        </div>
        <div>
            <input type="submit" value="Xác nhận đặt hàng" class="button" />
        </div>
        <input type="hidden" name="dathang" />
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.btnct').click(function(event) {
            var thongbao='';
            $('.thongbao').html('');
           if($('#ten').val()=='')
            {
                thongbao+='Vui lòng nhập họ tên!<br/>';
            }
            if($('#diachi').val()=='')
            {
                thongbao+='Vui lòng nhập địa chỉ!<br/>';
            }
            if($('#dienthoai').val()=='')
            {
                thongbao+='Vui lòng nhập điện thoại!<br/>';
            }
            if($('#email').val()=='')
            {
                thongbao+='Vui lòng nhập email!<br/>';
            }
            if(thongbao!='')
            {
                $('.thongbao').html(thongbao);
            }
            else
            {
                $('#frmst2').submit();
            } 
        });
    });
</script>