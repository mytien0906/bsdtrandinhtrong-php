<script language="javascript" src="admin/media/scripts/my_script.js"></script>
<script language="javascript">
function js_submit(){
    
    if(isEmpty(document.getElementById('ten'), "<?=_xinnhaphoten?>")){
        document.getElementById('ten').focus();
        return false;
    }
    
    if(isEmpty(document.getElementById('dienthoai'), "<?=_xinnhapdt?>")){
        document.getElementById('dienthoai').focus();
        return false;
    }
    
    if(!isNumber(document.getElementById('dienthoai'), "<?=_dtkhonghople?>")){
        document.getElementById('dienthoai').focus();
        return false;
    }
    
    if(!check_email(document.frm.email.value)){
        alert("<?=_emailkhonghople?>");
        document.frm.email.focus();
        return false;
    }
    
    if(isEmpty(document.getElementById('tieude'), "Vui lòng nhập tin tự án!")){
        document.getElementById('tieude').focus();
        return false;
    }
    
    if(isEmpty(document.getElementById('noidung'), "<?=_xinnhapnoidung?>")){
        document.getElementById('noidung').focus();
        return false;
    }
    
    document.frm.submit();
}
</script>
<div class="main-tit"><h2><?=$title_tcat?></h2></div>
<div class="content">
    <?=$tintuc_detail['noidung']?>
    <div class="addthis_native_toolbox"></div>

   
        <p style="margin: 0px 0pc 12px 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: center; margin-top: 15px;">
            <span style="color: #000; font-size: 18px; font-weight: 600; background-color: initial; align-content: right;">
                <?php if($type=="tuyendung") { ?>
                    LIÊN HỆ
                <?php } else { ?>
                    LIÊN HỆ ĐỂ BIẾT THÊM THÔNG TIN CHI TIẾT
                <?php } ?>
            </span>
        </p>
        <form method="post" name="frm" action="" enctype="multipart/form-data">
            <div class="lh-con-r"><input name="tieude" type="text" id="tieude" class="ipct input" value="Chủ đề: "/></div>
            <div class="clear"></div>
            
            <div class="lh-con-r"><textarea name="noidung" cols="52" rows="5" id="noidung" class="tact" placeholder="Nội dung"></textarea></div>
            <div class="clear"></div>

            <div class="lh-con-r"><input name="ten" type="text" id="ten" class="ipct input" placeholder="<?=_hoten?>"/></div>
            <div class="clear"></div>
            
            <div class="lh-con-r"><input name="email" type="text" class="ipct input" placeholder="Email" /></div>
            <div class="clear"></div>
            
            <div class="lh-con-r"><input name="dienthoai" type="text" id="dienthoai" class="ipct input" placeholder="<?=_dienthoai?>"/></div>
            <div class="clear"></div>
            
            <div class="lh-con-r"><input name="duan" type="hidden" class="ipct input" /></div>
            <div class="lh-con-r"><input type="button" value="Gửi liên hệ" onclick="js_submit();" class="btnct button" style="padding: 3px 10px; border-radius: 0;"/>
            <?php /* <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" class="btnct button" /></div> */ ?>
            <div class="clear"></div>
        </form>
    
    <?php if(count($tintuc)>0){?>
    <h2 class="tincungloai"><?=_tintuckhac?></h2>
    <ul class="tincungloai">
        <?php for($i=0;$i<count($tintuc);$i++){?>
            <li><a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>"><?=$tintuc[$i]['ten']?></a> (<?=date('d-m-Y',$tintuc[$i]['ngaytao'])?>)</li>
        <?php }?>
    </ul>
    <?php }?>
</div>