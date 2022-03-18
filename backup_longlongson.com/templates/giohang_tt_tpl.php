<div class="content">
    <div class="main-tit"><h2><?=_giohang?></h2></div>
        <?php if(is_array($_SESSION['cart'])){?>
        <div class="tbl tbl-giohang">
            <div class="tr">
                <div class="th">
                    Sản phẩm
                </div>
                <div class="th">
                    Đơn giá
                </div>
                <div class="th">
                    Số lượng
                </div>
                <div class="th">
                    Thành tiền
                </div>
            </div>
            <?php 
                $max=count($_SESSION['cart']);
                for($i=0;$i<$max;$i++){
                    $pid=$_SESSION['cart'][$i]['productid'];
                    $q=$_SESSION['cart'][$i]['qty'];
                    $ppro=get_product($pid);
            ?>
            <div class="tr">
                <div class="td">
                    <div class="box-spc w-clear">
                        <a href="san-pham/<?=$ppro['tenkhongdau']?>" target="_blank">
                            <img src="<?=_upload_product_l.$ppro['thumb']?>" alt="<?=$ppro['ten']?>" />
                        </a>
                        <a href="san-pham/<?=$ppro['tenkhongdau']?>" target="_blank" class="gh-name">
                            <?=$ppro['ten']?>
                        </a>
                        <a href="#" class="del-cart" data-key="<?=$i?>">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            Bỏ sản phẩm
                        </a>
                    </div>
                </div>
                <div class="td">
                    <?=number_format($ppro['gia'],0,'','.').'đ'?>
                </div>
                <div class="td">
                    <input type="number" value="<?=$q?>" min="1" max="99" maxlength="3" class="ajax_soluong" data-key="<?=$i?>" />
                </div>
                <div class="td">
                    <?=number_format($ppro['gia']*$q,0, '', '.')?>đ
                </div>
            </div><!-- End .tr -->
            <?php } ?>
        </div><!-- End .tbl -->
        <div class="giohang-thanhtien">
            Thành tiền: <span><?=number_format(get_order_total(),0, ',', '.')?>đ</span>
        </div>
        <div class="giohang-btn w-clear">
            <div class="giohang-btn-l">
                <a href="san-pham">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                    Tiếp tục mua hàng
                </a>
            </div>
            <div class="giohang-btn-r">
                <a href="thanh-toan">
                    <button type="button">
                        Tiến hành đặt hàng
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    </button>
                </a>
            </div>
        </div>
    <?php }else{ echo 'Chưa có sản phẩm nào trong giỏ hàng.';}?>
</div>
