<?php
if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0 && $_REQUEST['psize']>0 && $_REQUEST['mau']>0){
		remove_product($_REQUEST['pid'],$_REQUEST['psize'],$_REQUEST['mau']);
    }
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
        redirect('http://'.$config_url.'/my-pham-lam-dep');
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$i]);
            if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		}
	}
?>
<script language="javascript">
	function del(pid,size,mau){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
            document.form1.psize.value=size;
            document.form1.mau.value=mau;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}
</script>

<div class="main-tit"><h2><?=_giohang?></h2></div>
<div style="color:#F00"><?=$thongbaoma?></div>
<form name="form1" method="post">
    <input type="hidden" name="pid" />
    <input type="hidden" name="psize" />
    <input type="hidden" name="mau" />
    <input type="hidden" name="command" /> 
    <table border="0" cellpadding="5px" cellspacing="1px" style="font-size:12px; background:#FFF; width:100%;" class="tbl-giohang">
    <?php if(is_array($_SESSION['cart'])){?>
        <tr style="background:#1471CE; font-weight:bold; color:#FFF; border-left:1px solid #CCC; border-right:1px solid #CCC;">
            <th style="padding:5px; width:5%; text-align:center;" class="dpn-gh">STT</th>
            <th style="padding:5px; width:50%; text-align:center;" class="dpn-gh"><?=_sanpham?></th>
            <th style="padding:5px; width:10%; text-align:center;"><?=_hinhanh?></th>
            <th style="padding:5px; width:15%; text-align:center;"><?=_gia?></th>
            <th style="padding:5px; width:10%; text-align:center;"><?=_soluong?></th>
            <th style="padding:5px; width:15%; text-align:center;"><?=_tonggia?></th>
            <th style="padding:5px; width:5%; text-align:center;"><?=_xoa?></th>
        </tr>
        <?php
            $max=count($_SESSION['cart']);
            for($i=0;$i<$max;$i++){
                $pid=$_SESSION['cart'][$i]['productid'];
                $q=$_SESSION['cart'][$i]['qty'];
                $ppro=get_product($pid);
        ?>
        <tr style="border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC;color:#000;">
            <td style="padding:5px; width:5%; text-align:center;" class="dpn-gh"><?=$i+1?></td>
            <td style="padding:5px; width:50%; text-align:center;"><a href="my-pham-lam-dep/<?=$ppro['tenkhongdau']?>" target="_blank"><?=$ppro['ten']?></a></td>
            <td style="padding:5px; width:5%; text-align:center;" class="dpn-gh"><a href="my-pham-lam-dep/<?=$ppro['tenkhongdau']?>" target="_blank"><img src="<?=_upload_product_l.$ppro['thumb']?>" alt="<?=$ppro['ten']?>" /></a></td>
            <td style="padding:5px; width:5%; text-align:center;"><?=number_format($ppro['gia'],0,'',',').' VNĐ'?></td>
            <td style="padding:5px; width:5%; text-align:center;"><input type="text" name="product<?=$i?>" value="<?=$q?>" maxlength="3" size="2" style="text-align:center; border:1px solid #F0F0F0" onblur="update_cart()" /></td>
            <td style="padding:5px; width:5%; text-align:center;"><?=number_format($ppro['gia']*$q,0, '', ',') ?>&nbsp;VNĐ</td>
            <td style="padding:5px; width:5%; text-align:center;"><a href="javascript:del(<?=$pid?>,<?=$_SESSION['cart'][$i]['size']?>,<?=$_SESSION['cart'][$i]['mau']?>)"><img src="img/xoa.png" width="30" border="0" /></a></td>
        </tr>
        <?php }?>
        <tr style="border-left:1px solid #CCC; border-right:1px solid #CCC;">
            <td colspan="7" style="padding:5px; background:#1471CE; font-weight:bold; color:#FFF;text-align:right;">
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
        <tr>
            <td colspan="7" style="text-align:right; padding:5px;">
                <input type="button"  value="<?=_muatiep?>" onclick="window.location='http://<?=$config_url?>/my-pham-lam-dep'" class="button" style="cursor:pointer;" >
                <input type="button"  value="<?=_xoatatca?>" onclick="clear_cart()" class="button" style="cursor:pointer;">
                <input type="button"  value="<?=_capnhat?>" onclick="update_cart()" class="button" style="cursor:pointer;" >
                <input type="button" value="<?=_thanhtoan?>" onclick="window.location='http://<?=$config_url?>/thanh-toan'" class="button" style="cursor:pointer;" >
            </td>
        </tr>
    <?php }else{?>
        <tr>
            <td><?=_khongcosanphamtronggiohang?></td>
        </tr>
    <?php }?>
    </table>
</form>