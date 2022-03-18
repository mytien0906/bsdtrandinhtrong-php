<div class="w-st1">
    <form method="post" name="frm" action="" enctype="multipart/form-data" id="frmst2">
        <div class="thongbao">
            <?=$thongbao?>
        </div>
        <div><?=_hovaten?> (<span class="rb">*</span>)</div>
        <div><input name="data[ten]" type="text" id="ten" class="ipct input" value="<?=$_SESSION['logging']['ten']?>" /></div>
        <div class="clear"></div>

        <div><?=_diachi?> (<span class="rb">*</span>)</div>
        <div><input name="data[diachi]" type="text" id="diachi" class="ipct input" value="<?=$_SESSION['logging']['diachi']?>"/></div>
        <div class="clear"></div>
        
        <div><?=_dienthoai?> (<span class="rb">*</span>)</div>
        <div><input name="data[dienthoai]" type="text" id="dienthoai" class="ipct input" value="<?=$_SESSION['logging']['dienthoai']?>"/></div>
        <div class="clear"></div>
        
        <div>Email (<span class="rb">*</span>)</div>
        <div><input name="data[email]" id="email" type="text" class="ipct input" value="<?=isset($_SESSION['logging']['email'])?$_SESSION['logging']['email']:$_SESSION['nologin']['email']?>"/></div>
        <div class="clear"></div>
        
        <div>Ghi chú</div>
        <div><textarea name="data[noidung]" cols="52" rows="3" id="noidung" class="tact input"></textarea></div>
        <div class="clear"></div>

        <input type="hidden" name="phivanchuyen" id="fphivanchuyen" />
        <input type="hidden" name="id_tinh" id="id_tinh" />
        <input type="hidden" name="id_quan" id="id_quan" />
        
        <div style="margin-top:5px;"><input type="button" value="Tiếp tục" class="btnct button"/></div>
        <div class="clear"></div>
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