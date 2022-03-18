<div class="content">
    <div class="main-tit"><h2><?=_thanhtoan?></h2></div>
    <table border="0" cellpadding="5px" cellspacing="1px" style="font-size:12px; background:#FFF; width:100%;" class="tbl-giohang">
        <?php if(is_array($_SESSION['cart'])){?>
            <tr style="background:#1471CE; font-weight:bold; color:#FFF; border-left:1px solid #CCC; border-right:1px solid #CCC;">
                <th style="padding:5px; width:5%; text-align:center;" class="dpn-gh">STT</th>
                <th style="padding:5px; width:45%; text-align:center;"><?=_sanpham?></th>
                <th style="padding:5px; width:10%; text-align:center;" class="dpn-gh"><?=_hinhanh?></th>
                <th style="padding:5px; width:15%; text-align:center;"><?=_gia?></th>
                <th style="padding:5px; width:10%; text-align:center;"><?=_soluong?></th>
                <th style="padding:5px; width:15%; text-align:center;"><?=_tonggia?></th>
            </tr>
            <?php
                $max=count($_SESSION['cart']);
                for($i=0;$i<$max;$i++){
                    $pid=$_SESSION['cart'][$i]['productid'];
                    $q=$_SESSION['cart'][$i]['qty'];					
                    $ppro=get_product($pid);
            ?>
            <tr style="border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC;">
                <td style="padding:5px; width:5%; text-align:center;" class="dpn-gh"><?=$i+1?></td>
                <td style="padding:5px; width:45%; text-align:center;"><a href="my-pham-lam-dep/<?=$ppro['tenkhongdau']?>" target="_blank"><?=$ppro['ten']?></a></td>
                <td style="padding:5px; width:5%; text-align:center;" class="dpn-gh"><a href="my-pham-lam-dep/<?=$ppro['tenkhongdau']?>" target="_blank"><img src="<?=_upload_product_l.$ppro['thumb']?>" alt="<?=$ppro['ten']?>" /></a></td>
                <td style="padding:5px; width:5%; text-align:center;"><?=number_format($ppro['gia']*((100-$phantramgiam)/100),0,'',',').' VNĐ'?></td>
                <td style="padding:5px; width:5%; text-align:center;"><?=$q?></td>
                <td style="padding:5px; width:5%; text-align:center;"><?=number_format($ppro['gia']*((100-$phantramgiam)/100)*$q,0, '', ',') ?>&nbsp;VNĐ</td>
            </tr>
            <?php }?>
            <tr style="border-left:1px solid #CCC; border-right:1px solid #CCC;">
                <td colspan="6" style="padding:5px; background:#1471CE; font-weight:bold; color:#FFF;text-align:right;">
                    <div><?=_tonggia?>: <?=number_format(get_order_total(),0, ',', '.')?>&nbsp;VNĐ</div>
                    <?php if($_SESSION['logging']['vip']==1 && $_SESSION['giam']['gia']>0){?>
                    <div>Thành viên <span style="color:#FF0;">VIP</span> được giảm <span style="color:#FF0;"><?=$row_settingdh['vipdiscount']?>%</span>. Mã giảm giá được giảm: <span style="color:#FF0;"><?php if($_SESSION['giam']['loai']==1){echo number_format($_SESSION['giam']['gia'],0,'',',').'VNĐ';}else{echo $_SESSION['giam']['gia'].'%';}?></span>. Còn lại: <span style="color:#FF0;"><?php if($_SESSION['giam']['loai']==1){ $tp_cart=get_order_total()*((100-$row_settingdh['vipdiscount'])/100)-$_SESSION['giam']['gia'];}else{ $tp_cart=get_order_total()*((100-$row_settingdh['vipdiscount'])/100)*((100-$_SESSION['giam']['gia'])/100);} echo number_format($tp_cart,0, ',', '.');?>&nbsp;VNĐ</span></div>
                    <?php }elseif($_SESSION['logging']['vip']==1){?>
                        <div>Thành viên <span style="color:#FF0;">VIP</span> được giảm <span style="color:#FF0;"><?=$row_settingdh['vipdiscount']?>%</span>. Còn lại: <span style="color:#FF0;"><?=number_format(get_order_total()*(100-$row_settingdh['vipdiscount'])/100,0, ',', '.')?>&nbsp;VNĐ</span></div>
                    <?php }elseif($_SESSION['giam']['gia']>0){?>
                        <div>Mã giảm giá được giảm <span style="color:#FF0;"><?php if($_SESSION['giam']['loai']==1){echo number_format($_SESSION['giam']['gia'],0,'',',').'VNĐ';}else{echo $_SESSION['giam']['gia'].'%';}?></span>. Còn lại: <span style="color:#FF0;"><?php if($_SESSION['giam']['loai']==1){ $tp_cart=get_order_total()-$_SESSION['giam']['gia'];}else{ $tp_cart=get_order_total()*((100-$_SESSION['giam']['gia'])/100);} echo number_format($tp_cart,0, ',', '.');?>&nbsp;VNĐ</span></div>
                    <?php }?>
                </td>
            </tr>
        <?php }else{?>
            <tr>
                <td><?=_khongcosanphamtronggiohang?></td>
            </tr>
        <?php }?>
        </table>

    <div class="main-tit" style="margin-top:20px;"><h2>Thông tin đặt hàng</h2></div>
    <div class="dh-tt">
        <form method="post" name="frm" action="" enctype="multipart/form-data">
            <div class="lh-con-l"><?=_hovaten?> (<span>*</span>)</div>
            <div class="lh-con-r"><input name="ten" type="text" id="ten" class="ipct input" value="<?=$_SESSION['logging']['ten']?>" /></div>
            <div class="clear"></div>
            
            <div class="lh-con-l"><?=_diachi?> (<span>*</span>)</div>
            <div class="lh-con-r"><input name="diachi" type="text" id="diachi" class="ipct input" value="<?=$_SESSION['logging']['diachi']?>"/></div>
            <div class="clear"></div>
            
            <div class="lh-con-l"><?=_dienthoai?> (<span>*</span>)</div>
            <div class="lh-con-r"><input name="dienthoai" type="text" id="dienthoai" class="ipct input" value="<?=$_SESSION['logging']['dienthoai']?>"/></div>
            <div class="clear"></div>
            
            <div class="lh-con-l">Email (<span>*</span>)</div>
            <div class="lh-con-r"><input name="email" type="text" class="ipct input" value="<?=$_SESSION['logging']['email']?>"/></div>
            <div class="clear"></div>
            
            <div class="lh-con-l"><?=_noidung?> (<span>*</span>)</div>
            <div class="lh-con-r"><textarea name="noidung" cols="52" rows="7" id="noidung" class="tact"></textarea></div>
            <div class="clear"></div>
            
            <div class="lh-con-l lh-con-lvh">a</div>
            <div class="lh-con-r"><input type="button" value="<?=_gui?>" onclick="js_submit();" class="btnct button"/>
            <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" class="btnct button" /></div>
            <div class="clear"></div>
        </form>
    </div>
</div>

    <script language="javascript" src="admin/media/scripts/my_script.js"></script>
    <script language="javascript">
    function js_submit(){
    	
    	if(isEmpty(document.getElementById('ten'), "<?=_xinnhaphoten?>")){
    		document.getElementById('ten').focus();
    		return false;
    	}
    	
    	if(isEmpty(document.getElementById('diachi'), "<?=_xinnhapdiachi?>")){
    		document.getElementById('diachi').focus();
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
    	
    	if(isEmpty(document.getElementById('noidung'), "<?=_xinnhapnoidung?>")){
    		document.getElementById('noidung').focus();
    		return false;
    	}
    	
    	document.frm.submit();
    }
    </script>
