<script src="js/script_google.js"></script>
<script src="js/script_facebook.js"></script>
<div class="hd-gh">
    <div class="center">
        <div class="hd-gh-l">
            <a href="http://<?=$config_url?>/">
                <img src="<?=_upload_hinhanh_l.$banner['photo']?>" alt="Banner" class="logo" />
            </a>
        </div>
        <div class="hd-gh-r">
            <div class="w-clear">
                <div class="gh-step <?php if($id=='buoc-1'){echo 'active';} ?> <?php if($id=='buoc-2' || $id=='buoc-3'){ echo 'actived';} ?>">
                    1. Đăng nhập    
                </div>
                <div class="gh-step <?php if($id=='buoc-2'){echo 'active';} ?> <?php if($id=='buoc-3'){ echo 'actived';} ?>">
                    2. Địa chỉ
                </div>
                <div class="gh-step <?php if($id=='buoc-3'){echo 'active';} ?>">
                    3. Thanh toán
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="center">
<?php if(count($_SESSION['cart'])==0){ ?>
    <div style="text-align:center">
        <strong>Không có sản phẩm trong giỏ hàng.</strong>
    </div>
    <div>
        <a href="san-pham" style="display: block;width: 250px;background: #f37021;padding: 5px 0px;text-align: center;text-transform: uppercase;color: #fff;margin: auto;">
            Tiếp tục mua hàng
        </a>
    </div>
<?php }else{ ?>
    <?php if($id=='buoc-1'){ ?>
    <div class="w-clear">
        <div class="co-l">
            <div class="co-log-tit">
                <strong>Đăng nhập hoặc đặt hàng không cần đăng ký</strong>
            </div>
            <div class="co-info">
                <div class="w-gh-log">
                    <form name="dangnhap" action="" method="post" class="form-horizontal">
                        <div>
                            <input type="email" id="cmail" name="email" class="form-control" placeHolder="Vui lòng nhập email" required />
                        </div>
                        <div style="margin-top:10px;">
                            <input type="radio" name="cklog" id="nolog" checked /> 
                            <label style="font-weight:normal" onclick="ck_log(1)" for="nolog">Đặt hàng không cần đăng ký</label>
                        </div>
                        <div>
                            <input type="radio" name="cklog" id="log" /> 
                            <label style="font-weight:normal" onclick="ck_log(2)" for="log">Tôi đã có tài khoản</label>
                        </div>
                        <div>
                            <input id="password" type="password" placeholder="Xin vui lòng nhập mật khẩu" class="form-control" disabled>
                        </div>
                        <input type="hidden" name="khongdangnhap" id="clog"/>
                        <button type="submit" name="send" class="sub-login-check" id="send-login-check">Tiếp tục »</button>
                    </form>
                    <div style="margin-top:20px;">
                        <a href="javascript:" onClick="loginFb()">
                            <img src="img/gfb.png" alt="Facebook" />
                        </a>
                    </div>

                    <div style="margin-top:20px;">
                        <a href="javascript:" onClick="login()">
                            <img src="img/ggg.png" alt="Google" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="co-r">
            <div class="co-log-tit">
                <strong>Thông tin đơn hàng</strong> (<?=count($_SESSION['cart'])?> sản phẩm)
            </div>
            <div>
                <table class="tbl-cart">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                    <?php 
                        $max=count($_SESSION['cart']);
                        for($i=0;$i<$max;$i++){
                            $pid=$_SESSION['cart'][$i]['productid'];
                            $q=$_SESSION['cart'][$i]['qty'];
                            $ppro=get_product($pid);
                            $giagiam=lay_giagiam($ppro['id_giagiam']);
                    ?>
                    <tr>
                        <td>
                            <?=$ppro['ten']?>
                        </td>
                        <td>
                            <?=$q?>
                        </td>
                        <td>
                            <?php if($giagiam['phantram']!=''){ ?>
                                <?=number_format($ppro['gia']*$giagiam['gia'],0,'','.')?>đ
                            <?php }else{ ?>
                                <?=number_format($ppro['gia'],0,'','.')?>đ
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr class="tr-endcart">
                        <td class="td-thanhtien">
                            <strong>Thành tiền</strong>
                        </td>
                        <td colspan="2" class="td-tongtien">
                            <strong>
                                <?=number_format(get_order_total(),0, ',', '.');?>đ
                            </strong>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php }elseif($id=='buoc-2'){ ?>
    <div class="w-clear">
        <div class="co-l">
            <div class="co-log-tit">
                <strong>Địa chỉ giao hàng của quý khách</strong>
            </div>
            <div class="co-info">
                <div>
                    <form method="post" name="frm_dc" action="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" style="font-weight:normal;"><?=_hovaten?> <span>(*)</span></label>
                            <div class="col-sm-4">
                                <input type="text" id="ten" name="ten" class="form-control" placeholder="<?=_hovaten?>" value="<?=$info['ten']?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" style="font-weight:normal;"><?=_diachi?> <span>(*)</span></label>
                            <div class="col-sm-4">
                                <input type="text" id="diachi" name="diachi" class="form-control" placeholder="<?=_diachi?>" value="<?=$info['diachi']?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" style="font-weight:normal;"><?=_dienthoai?> <span>(*)</span></label>
                            <div class="col-sm-4">
                                <input type="text" id="dienthoai" name="dienthoai" class="form-control" placeholder="<?=_dienthoai?>" value="<?=$info['dienthoai']?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" style="font-weight:normal;">Ghi chú</label>
                            <div class="col-sm-4">
                                <textarea name="noidung" id="noidung" cols="30" rows="5" class="form-control"><?=$info['noidung']?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-4">
                                <button type="button" name="send" onclick="js_submitdc();" class="sub-login-check" id="send-login-check" style="margin-top:0px;">Tiếp tục »</button>
                            </div>
                        </div>
                        <input type="hidden" name="sdiachi">
                    </form>
                </div>
            </div>
        </div>
        <div class="co-r">
            <div class="co-log-tit">
                <strong>Thông tin đơn hàng</strong> (<?=count($_SESSION['cart'])?> sản phẩm)
            </div>
            <div>
                <table class="tbl-cart">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                    <?php 
                        $max=count($_SESSION['cart']);
                        for($i=0;$i<$max;$i++){
                            $pid=$_SESSION['cart'][$i]['productid'];
                            $q=$_SESSION['cart'][$i]['qty'];
                            $ppro=get_product($pid);
                            $giagiam=lay_giagiam($ppro['id_giagiam']);
                    ?>
                    <tr>
                        <td>
                            <?=$ppro['ten']?>
                        </td>
                        <td>
                            <?=$q?>
                        </td>
                        <td>
                            <?php if($giagiam['phantram']!=''){ ?>
                                <?=number_format($ppro['gia']*$giagiam['gia'],0,'','.')?>đ
                            <?php }else{ ?>
                                <?=number_format($ppro['gia'],0,'','.')?>đ
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr class="tr-endcart">
                        <td class="td-thanhtien">
                            <strong>Thành tiền</strong>
                        </td>
                        <td colspan="2" class="td-tongtien">
                            <strong>
                                <?=number_format(get_order_total(),0, ',', '.');?>đ
                            </strong>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php }elseif($id=='buoc-3'){ ?>
    <div class="w-clear">
        <div class="co-l" style="min-height:200px;">
            <div class="co-log-tit">
                <strong>Hình thức thanh toán</strong>
            </div>
            <div id="tabs_payment">
                <ul id="ultabs_payment" style="margin-left:0px;">
                    <li type="#tab1_pay" class="active">
                        <a id="tab_CashOnDelivery_option" href="javascript:void(0)">
                            <div class="tab_pseudo-elems">
                                <span>Thanh toán khi nhận hàng</span>
                            </div>
                            <div class="radio-wrap">
                                <input type="radio">
                                <input type="radio" checked="">
                            </div>
                        </a>
                    </li>
                    <div class="clear"></div>
                </ul>
                <div class="httt-info">
                    <div>
                        Quý khách sẽ thanh toán bằng tiền mặt khi nhận hàng tại nhà
                    </div>
                    <div class="luuy">
                        <div>
                            Lưu ý: 
                        </div>
                        <div>
                        - Quý khách kiểm tra kỹ thông tin đơn hàng bên tay phải (Địa chỉ giao hàng, sản phẩm & số lượng, giá trị thành tiền). 
                        </div>
                        <div>
                        - Thông tin này sẽ không thể thay đổi sau khi đơn hàng được xác nhận thành công.
                        </div>
                    </div>
                    <form method="post" name="frm" action="thanh-toan" enctype="multipart/form-data">
                        <input name="ten" type="hidden" value="<?=$info['ten']?>" />
                        <input name="email" type="hidden" value="<?=$info['email']?>" />
                        <input name="diachi" type="hidden" value="<?=$info['diachi']?>" />
                        <input name="dienthoai" type="hidden" value="<?=$info['dienthoai']?>" />
                        <input name="noidung" type="hidden" value="<?=$info['noidung']?>" />
                        <button type="submit" class="placeYourOrderBtn" style="opacity: 1; cursor: pointer;">
                        <span class="submit_btn_icon"></span>
                        <span id="placeYourOrderButtonText" class="submit_btn_text">Đặt hàng</span>
                    </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="co-r">
            <div class="co-log-tit">
                <strong>Địa chỉ giao hàng</strong> <a href="gio-hang/buoc-2" style="font-size:12px; margin-left:20px;">Chỉnh sửa</a>
            </div>
            <div class="pd5">
                <div><?=$info['ten']?></div>
                <div><?=$info['diachi']?></div>
                <div><?=$info['dienthoai']?></div>
            </div>
        </div>
        <div class="co-r">
            <div class="co-log-tit">
                <strong>Thông tin đơn hàng</strong> (<?=count($_SESSION['cart'])?> sản phẩm)
            </div>
            <div>
                <table class="tbl-cart">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                    <?php 
                        $max=count($_SESSION['cart']);
                        for($i=0;$i<$max;$i++){
                            $pid=$_SESSION['cart'][$i]['productid'];
                            $q=$_SESSION['cart'][$i]['qty'];
                            $ppro=get_product($pid);
                            $giagiam=lay_giagiam($ppro['id_giagiam']);
                    ?>
                    <tr>
                        <td>
                            <?=$ppro['ten']?>
                        </td>
                        <td>
                            <?=$q?>
                        </td>
                        <td>
                            <?php if($giagiam['phantram']!=''){ ?>
                                <?=number_format($ppro['gia']*$giagiam['gia'],0,'','.')?>đ
                            <?php }else{ ?>
                                <?=number_format($ppro['gia'],0,'','.')?>đ
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr class="tr-endcart">
                        <td class="td-thanhtien">
                            <strong>Thành tiền</strong>
                        </td>
                        <td colspan="2" class="td-tongtien">
                            <strong>
                                <?=number_format(get_order_total(),0, ',', '.');?>đ
                            </strong>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php } ?>
<?php } ?>
</div>
<script type="text/javascript">
    function ck_log(gt)
    {
        if(gt==1)
        {
            $('#cmail').attr({
                name: 'email',
                type: 'email',
                placeHolder: 'Vui lòng nhập email!'
            });   
            $('#password').attr('disabled','disabled');
            $('#clog').attr('name', 'khongdangnhap');
        }
        else if(gt==2)
        {
            $('#cmail').attr({
                name: 'username',
                type: 'text',
                placeHolder: 'Vui lòng nhập tên đăng  nhập!'
            });   
            $('#password').removeAttr('disabled');
            $('#clog').attr('name', 'dangnhap');
        }
    }
</script>


<script language="javascript" src="admin/media/scripts/my_script.js"></script>
<script language="javascript">
function js_submitdc(){
    <?php if(empty($_SESSION['cart'])){?>
        alert('Không có sản phẩm nào trong giỏ hàng. Vui lòng chọn sản phẩm!');
        return false;
    <?php }?>
    
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
    
    document.frm_dc.submit();
}
</script>