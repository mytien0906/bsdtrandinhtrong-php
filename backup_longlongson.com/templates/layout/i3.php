<div class="item w-clear">
    <div class="item-img">
        <a href="sac-mau">
            <img src="<?=_upload_hinhanh_l.$ikhonggianphoimau['thumb']?>" alt="Không gian phối màu" />
        </a>
    </div>
    <div class="item-info">
        <h3>
            <a href="sac-mau">
                Không gia phối màu
            </a>  
        </h3>
        <p>
            <?=$ikhonggianphoimau['noidung']?>
        </p>
        <div class="item-xt">
            <a href="sac-mau">
                Xem thêm
            </a>  
        </div>
    </div>
</div>
<div class="item w-clear">
    <div class="item-info">
        <h3>
            <a href="ma-mau-tony">
                Mã màu Tony
            </a>  
        </h3>
        <p>
            <?=$inoidungmamau['noidung']?>
        </p>
        <div class="item-xt">
            <a href="ma-mau-tony">
                Xem thêm
            </a>  
        </div>
    </div>
    <div class="item-img">
        <a href="ma-mau-tony">
            <img src="<?=_upload_hinhanh_l.$inoidungmamau['thumb']?>" alt="Mã màu Tony" />
        </a>
    </div>
</div>
<div class="item w-clear">
    <div class="item-img">
        <a href="bang-mau-tony">
            <img src="<?=_upload_hinhanh_l.$inoidungbangmau['thumb']?>" alt="Bảng màu Tony" />
        </a>
    </div>
    <div class="item-info">
        <h3>
            <a href="bang-mau-tony">
                Bảng màu Tony
            </a>  
        </h3>
        <p>
            <?=$inoidungbangmau['noidung']?>
        </p>
        <div class="item-xt">
            <a href="bang-mau-tony">
                Xem thêm
            </a>  
        </div>
    </div>
</div>
<script type="text/javascript">
    $(window).on('load resize', function(event) {
        $('#i3 .item-info').css('min-height', $('#i3 .item-img:nth-child(1)').outerHeight());
    });
</script>