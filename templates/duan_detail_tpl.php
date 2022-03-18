<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<div class="left_padding">
    <div id="sidebar_lads">
        <ul>
            <li><a href="<?=getCurrentPageURL()?>#tongquan" data-id="#tongquan">Tổng quan dự án</a></li>
            <li><a href="<?=getCurrentPageURL()?>#vitri" data-id="#vitri">Vị trí địa lý</a></li>
            <li><a href="<?=getCurrentPageURL()?>#tienich" data-id="#tienich">Tiện ích dự án</a></li>
            <li><a href="<?=getCurrentPageURL()?>#matbang" data-id="#matbang">Mặt bằng dự án</a></li>
            <li><a href="<?=getCurrentPageURL()?>#hinhanh" data-id="#hinhanh">Hình ảnh dự án</a></li>
            <li><a href="<?=getCurrentPageURL()?>#comment" data-id="#comment">Bình luận dự án</a></li>
        </ul>
    </div>
    <div class="left_padding_c">
        <section id="tongquan">
            <div class="title_mau">
                <h3>Tổng quan</h3>
            </div>
            <div class="desc_mau">
                <?=$row_detail['tongquan_'.$lang]?>
            </div>
        </section>
        <section id="vitri">
            <div class="title_mau">
                <h3>Vị trí địa lý</h3>
            </div>
            <div class="desc_mau">
                <?=$row_detail['vitri_'.$lang]?>
            </div>
        </section>
        <section id="tienich">
            <div class="title_mau">
                <h3>Tiện ích</h3>
            </div>
            <div class="desc_mau">
                <?=$row_detail['tienich_'.$lang]?>
            </div>
        </section>
        <section id="matbang">
            <div class="title_mau">
                <h3>Mặt bằng</h3>
            </div>
            <div class="desc_mau">
                <?=$row_detail['matbang_'.$lang]?>
            </div>
        </section>
         <section id="hinhanh">
            <div class="title_mau">
                <h3>Thư viện hình ảnh</h3>
            </div>
            <div class="desc_mau">
                <div class="fotorama" 
                data-width="974" 
                data-ratio="974/467" 
                data-max-width="100%" 
                data-autoplay="true" 
                data-nav="thumbs"
                data-transition="slide"
                data-clicktransition="slide"
                data-loop="true">
                <a href="<?=_upload_product_l.$row_detail['photo']?>" data-thumb="<?=_upload_product_l.$row_detail['photo']?>"><img src="<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"></a>
                <?php if(count($hinhanh_sp)>0){ ?>
                <?php foreach ($hinhanh_sp as $k => $v) { ?>
                <a href="<?=_upload_product_l.$v['photo']?>" data-thumb="<?=_upload_product_l.$v['photo']?>"><img src="<?=_upload_product_l.$v['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"></a>
                <?php } ?>
                <?php } ?>
              </div>
            </div>
        </section>
        <section id="comment">
            <div class="title_mau">
                <h3>Bình luận</h3>
            </div>
            <div class="desc_mau">
                <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-width="100%" data-numposts="5"></div>
            </div>
        </section>
    </div>
</div>
<script type="text/javascript">
    // function initSmoothNav() {
    //     $('#sidebar_lads ul li a').bind('click', function(event) {
    //       $('#sidebar_lads ul li a').removeClass('active');
    //       var $anchor = $(this);
    //        $anchor.addClass('active');
    //       $('html, body').stop().animate({
    //         scrollTop: $($anchor.attr('data-id')).offset().top-90
    //       }, 1500, 'easeOutBack');
    //       event.preventDefault();
    //     });
    // }
  // $(document).on("scroll", onScroll);
  // function onScroll(event){
  //   var scrollPos = $(document).scrollTop();
  //   $('#sidebar_lads ul li a').each(function () {
  //       var currLink = $(this);
  //       var refElement = $(currLink.attr("href"));
  //       if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
  //           $('#sidebar_lads ul li a').removeClass("active");
  //           currLink.addClass("active");
  //       }
  //       else{
  //           currLink.removeClass("active");
  //       }
  //   });
  // }


    $(document).ready(function() {
        // initSmoothNav();

        $('#sidebar_lads').scrollToFixed({
            marginTop: $('#tt-menu').outerHeight() + 10,
        });
    });

</script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<link href="plugins/fotorama/fotorama.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="plugins/fotorama/fotorama.js"></script>
<?php /*

<div class="tt-index-cont">
    <div class="tt-title">
        <h3><?=_detail?></h3>
    </div>
    <div class="tt-desc mt2">
        <div class="box_padding">
            <div class="padd">
                <div class="tt-right-desc-detail-l">
                    
                    <div class="images_list">
                        <div class="fotorama" 
                            data-width="768" 
                            data-ratio="768/467" 
                            data-max-width="100%" 
                            data-autoplay="true" 
                            data-nav="thumbs"
                            data-transition="slide"
                            data-clicktransition="slide"
                            data-loop="true">
                            <a href="<?=_upload_product_l.$row_detail['photo']?>" data-thumb="<?=_upload_product_l.$row_detail['photo']?>"><img src="<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"></a>
                            <?php if(count($hinhanh_sp)>0){ ?>
                            <?php foreach ($hinhanh_sp as $k => $v) { ?>
                            <a href="<?=_upload_product_l.$v['photo']?>" data-thumb="<?=_upload_product_l.$v['photo']?>"><img src="<?=_upload_product_l.$v['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"></a>
                            <?php } ?>
                            <?php } ?>
                          </div>
                    </div>
                    
                    <div class="social_detial">
                       <div id="share-buttons">
                            <!-- Twitter -->
                            <a href="https://twitter.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow">
                                <img src="images/social_twitter.png" alt="Twitter" />
                            </a>
                            <!-- Facebook -->
                            <a href="http://www.facebook.com/sharer.php?u=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow">
                                <img src="images/social_facebook.png" alt="Facebook" />
                            </a>
                            <!-- Google+ -->
                            <a href="https://plus.google.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow">
                                <img src="images/social_google.png" alt="Google" />
                            </a>
                            <!-- LinkedIn -->
                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow">
                                <img src="images/social_linkedin.png" alt="LinkedIn" />
                            </a>
                            <!-- Email -->
                            <a href="mailto:?Subject=<?=$row_detail['email']?> <?=getCurrentPageURL()?>" rel="nofollow">
                                <img src="images/social_email.png" alt="Email" />
                            </a>
                            <!-- Print -->
                            <a href="javascript:;" onclick="window.print()" rel="nofollow">
                                <img src="images/social_print.png" alt="Print" />
                            </a>
                        </div> 
                    </div>
                </div>
                 <div class="tt-right-desc-detail-r">
                    <h1 class="nameDetail"><?=$row_detail['ten_'.$lang]?></h1>
                    <?php if($row_detail['masp']!=''){ ?>
                    <div class="dongThongTin">
                        <b><?=_masp?></b>: <?=$row_detail['masp']?>
                    </div>
                    <?php } ?>
                    <div class="dongThongTin">
                        <b><?=_view?></b>: <?=$row_detail['luotxem']?>
                    </div>
                    <div class="dongThongTin">
                        <b>Địa chỉ</b>: <?=$row_detail['color']?>
                    </div>
                    <div class="dongThongTin">
                        <b>Diện tích</b>: <?=$row_detail['size']?>
                    </div>
                    <?php if($row_detail['giaban']!=''){ ?>
                    <div class="dongThongTin">
                        <span class="price"><?=$row_detail['giaban']?></span>
                    </div>
                    <?php }else{ ?>
                    <div class="dongThongTin">
                        <span class="price"><?=_contact?> - <?=$row_setting['hotline']?></span>
                    </div>
                    <?php } ?>
                    <div class="dongThongTin">
                        <pre><?=$row_detail['thongtin_vi']?></pre>
                    </div>
                    <div class="mota fixed_table pt1">
                        <?=stripslashes($row_detail['mota_'.$lang])?>
                    </div>
                </div>
            </div>
           
            <script type="text/javascript">
            $(document).ready(function() {
                $('.click_tabs').click(function() {
                    var obj = $(this);
                    var i = obj.index()+1;
                    $('.click_tabs').removeClass('active');
                    obj.addClass('active');
                    var tab = '#tabs'+i;
                    $('.tabs_pad').hide();
                    obj.parent('.tabs_product').parent('.padd').find(tab).fadeIn(300);
                });
                $('.minus_giohang').click(function(){
                  var number_giohang=$('.number_giohang').val();
                  if(number_giohang>1){
                    var number_change=parseInt(number_giohang)-1;
                    $('.number_giohang').val(number_change);
                  }
                });

                $('.plus_giohang').click(function(){
                   var number_giohang=$('.number_giohang').val();
                  if(number_giohang<101){
                    var number_change=parseInt(number_giohang)+1;
                    $('.number_giohang').val(number_change);
                  }
                });
            });
            </script>
            <div class="padd">
                <ul class="tabs_product">
                    <li class="click_tabs active">
                        <span><?=_detail?></span>
                    </li>
                    <li class="click_tabs">
                        <span>Comment</span>
                    </li>
                </ul>
                <div class="tabs_pad active" id="tabs1">
                    <?=stripslashes($row_detail['noidung_'.$lang])?>
                </div>
                 <div class="tabs_pad" id="tabs2">
                    <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-width="100%" data-numposts="5"></div>
                </div>
            </div>
       </div>
    </div>
</div>

<div class="tt-index-cont mt2">
    <div class="tt-title">
        <h3>Bất động sản liên quan</h3>
    </div>
    <div class="tt-desc mt2">
        <div id="hien_sp">
           <?php for($i=0;$i<count($product);$i++){ ?>
            <div class="tt-product-item <?php if(($i+1)%4==0) echo 'mr0'; ?>">
                <div class="tt-product">
                    <div class="tt-product-img">
                        <a href="bat-dong-san/<?=$product[$i]['id']?>/<?=$product[$i]['tenkhongdau']?>.html" title="<?=$product[$i]['ten_'.$lang]?>">
                            <img src="resize/258x195/1/<?=_upload_product_l.$product[$i]['photo']?>" alt="<?=$product[$i]['ten_'.$lang]?>">
                        </a>
                    </div>
                    <div class="tt-product-title">
                        <h5><a href="bat-dong-san/<?=$product[$i]['id']?>/<?=$product[$i]['tenkhongdau']?>.html" title="<?=$product[$i]['ten_'.$lang]?>">
                            <?=$product[$i]['ten_'.$lang]?>
                        </a></h5>
                        <p class="itembds">Địa chỉ: <?=$product[$i]['color']?></p>
                        <p class="itembds">Diện tích: <?=$product[$i]['size']?></p>
                        <?php if($product[$i]['giaban']!=''){ ?>
                        <p class="itembds">Giá: <span class="price"><?=$product[$i]['giaban']?></span></p>
                        <?php }else{ ?>
                        <p class="itembds">
                            Giá: <span class="price">
                                Liên hệ
                            </span>
                        </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="pagination"><?=$paging?></div>
    </div>
</div>
*/?>