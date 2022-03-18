<a class="popup" href="<?=_upload_hinhanh_l.$popup['photo']?>"></a>

<script language="javascript" src="admin/media/scripts/my_script.js"></script>
<script language="javascript">
function guimail_submit(){

    if(isEmpty(document.getElementById('hoten_dk'), "<?=_xinnhaphoten?>")){
        document.getElementById('hoten_dk').focus();
        return false;
    }
    
    if(!check_email(document.emaildk.email_dk.value)){
        alert("<?=_emailkhonghople?>");
        document.emaildk.email_dk.focus();
        return false;
    }

    if(isEmpty(document.getElementById('sodienthoai_dk'), "<?=_xinnhapdt?>")){
        document.getElementById('sodienthoai_dk').focus();
        return false;
    }
    
    if(!isNumber(document.getElementById('sodienthoai_dk'), "<?=_dtkhonghople?>")){
        document.getElementById('sodienthoai_dk').focus();
        return false;
    }
    
    if(isEmpty(document.getElementById('maxacnhan_dk'), "Vui lòng nhập mã xác nhận!")){
        document.getElementById('maxacnhan_dk').focus();
        return false;
    }
    
    
    document.emaildk.submit();
}
</script>

<div class="i-tit w-clear">
    <h2>Sản phẩm nổi bật</h2>
</div>
<div class="w-clear">
    <div class="slick-duan">
        <?php for($i=0;$i<count($sanphammoi);$i++){ ?>
            <div>
                <div class="box-sp box-spi">    
                    <div class="box-sp-img">
                        <a href="san-pham/<?=$sanphammoi[$i]['tenkhongdau']?>">
                            <img src="timthumb.php?src=<?=_upload_tintuc_l.$sanphammoi[$i]['photo']?>&w=270&h=190&zc=1&q=100" alt="<?=$sanphammoi[$i]['ten']?>" />
                        </a>
                    </div>
                    <h3><a href="san-pham/<?=$sanphammoi[$i]['tenkhongdau']?>"><?=$sanphammoi[$i]['ten']?></a></h3>
                    <div class="box-sp-mota"><?=catchuoi($sanphammoi[$i]['mota'],300)?></div>
                </div>
            </div>
        <?php }?>
    </div>
</div>

<?php for ($j=0; $j < count($msanpham); $j++) { 
    $d->reset();
    $sql="select id,ten_$lang as ten,mota_$lang as mota,tenkhongdau_$lang as tenkhongdau,photo from #_tintuc where hienthi=1 and type='sanpham' and noibat>0 and id_lv0=".$msanpham[$j]['id']." order by stt,id desc limit 0,4";
    $d->query($sql);
    $duannb=$d->result_array();
    if(count($duannb) > 0) {
?>
<div class="i-tit w-clear">
    <h2><?=$msanpham[$j]['ten']?></h2>
</div>
<div class="w-clear">
    <?php for($i=0;$i<count($duannb);$i++){ ?>
        <div class="box-sp">    
            <div class="box-sp-img">
                <a href="san-pham/<?=$duannb[$i]['tenkhongdau']?>">
                    <img src="timthumb.php?src=<?=_upload_tintuc_l.$duannb[$i]['photo']?>&w=270&h=190&zc=1&q=100" alt="<?=$duannb[$i]['ten']?>" />
                </a>
            </div>
            <h3><a href="san-pham/<?=$duannb[$i]['tenkhongdau']?>"><?=$duannb[$i]['ten']?></a></h3>
            <div class="box-sp-mota"><?=catchuoi($duannb[$i]['mota'],300)?></div>
        </div>
    <?php }?>
</div>
<?php } } ?>

<div class="w-clear">
    <div class="ind-l">
        <div class="i-tit w-clear">
            <h2>Video dự án</h2>
        </div>
        <div class="w-clear">
            <div class="i-video-l">
                <div class="video">
                    <script type="text/javascript" src="js/jwplayer/jwplayer.html5.js" ></script>
                    <script type="text/javascript" src="js/jwplayer/jwplayer.js" ></script>
                    <script type="text/javascript">
                       $(document).ready(function() {
                             $('.changevideo').click(function(e) {
                               var value = $(this).data('id');
                               if(value != '')
                               $('.ajax_video').load("ajax/video.php?id="+value);
                               return false;
                           });
                       });
                    </script>
                    <div class="ajax_video">
                        <div id="mediaplayer">JW Player goes here</div>
                        <script type="text/javascript">
                            jwplayer("mediaplayer").setup({
                               file: "<?=$video[0]['link']?>",
                               width:343,
                               height:285,
                            });
                        </script>
                        <span class="vdten"></span>
                    </div>
                    
                </div>
            </div>
            <div class="i-video-r">
                <?php if(!empty($video)){ echo '<ul id="video">'; foreach($video as $video_item){ ?>
                    <li class="w-clear">
                        <a class="changevideo" data-id="<?=$video_item['id']?>"><?=$video_item["ten"]?></a>
                        <span>[<?=date('m/d/Y',$video_item['ngaytao'])?>]</span>
                    </li>
                <?php } echo '</ul>'; } ?>
            </div>
        </div>
    </div>
    <div class="ind-r">
        <form method="post" name="emaildk" class="email_dk" action="" enctype="multipart/form-data">
            <p>Đăng ký nhận bảng giá & xem nhà mẫu</p>
            <div class="dknt">
                <input type="text" name="hoten_dk" id="hoten_dk" placeholder="Họ & tên" class="input" />
                <input type="email" name="email_dk" id="email_dk" placeHolder="Email" class="input" />
                <input type="text" name="sodienthoai_dk" id="sodienthoai_dk" placeHolder="Điện thoại" class="input" />
                <select name="chude_dk" id="chude_dk" >
                    <?php for ($i=0; $i < count($iduan); $i++) { ?>
                        <option value="<?=$iduan[$i]['id']?>"><?=$iduan[$i]['ten']?></option>
                    <?php } ?>
                </select>
                <input type="text" name="maxacnhan_dk" id="maxacnhan_dk" placeHolder="Mã xác nhận" class="input maxacnhan" />
                <div class="capcha" onmousedown="event.preventDefault ? event.preventDefault() : event.returnValue = false" >
                    <label name="capcha_dk" id="capcha_dk"><?=$a?></label>
                    <input type="hidden" name="capcha_dk1" id="capcha_dk1" value="<?=$a?>"></input>
                    <span class="changecapcha">Lấy mã khác</span>
                </div>
                <input type="button" value="Gửi Đăng Ký" onclick="guimail_submit();" class="button"/>
            </div>
        </form>
    </div>
</div>

<?php /*
<div class="i-tit w-clear">
     <h2>Album ảnh dự án</h2>
</div>
<div class="tintucnoibat">
    <div class="slick-doitac">
        <?php for ($i=0; $i < count($newsnb); $i++) { ?>
            <div>
                <div class="box-dt">
                    <a href="tin-tuc/<?=$newsnb[$i]['tenkhongdau']?>">
                        <img src="<?=_upload_tintuc_l.$newsnb[$i]['thumb']?>" alt="<?=$newsnb[$i]['ten']?>" />
                    </a>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> <?=date("l, j F Y",$newsnb[$i]['ngaytao'])?></p>
                    <a href="tin-tuc/<?=$newsnb[$i]['tenkhongdau']?>">
                        <?=$newsnb[$i]['ten']?>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
*/ ?>

<script type="text/javascript">

    $(document).ready(function() {

        $('.changecapcha').click(function(e) {
            var text = "";
            var possible = "0123456789";

            for( var i=0; i < 5; i++ )
                text += possible.charAt(Math.floor(Math.random() * possible.length));

            $('#capcha_dk').load("ajax/capchar.php?value="+text);
            $('#capcha_dk1').val(text);
        });
    });
</script>

