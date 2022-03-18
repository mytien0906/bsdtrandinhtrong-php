<?php
	session_start();
	$session=session_id();
	date_default_timezone_set('Asia/Saigon');
	@define ( '_template' , '../templates/'); //định nghĩa đường dẫn tắt, chèn biến vào thay thế
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../admin/lib/');
	@define ( _upload_folder , './media/upload/' );

	$lang=$_SESSION['lang'];

	require_once _source."lang_$lang.php";
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	
	$id=$_GET['id'];

	#tin tuc chi tiet
	$d->reset();
	$sql="select id,id_lv0,type,ten_$lang as ten,luotxem,noidung_$lang as noidung,title_$lang as title,keywords_$lang as keywords,description_$lang as description,gia,photo,thumb,masp from #_product where hienthi=1 and id='$id'";
	$d->query($sql);
	$product_detail=$d->fetch_array();	

	# Lay tab san pham
	$d->reset();
	$sql="select id,ten_$lang as ten,noidung_$lang as noidung from #_product_tab where hienthi=1 and id_pro='$id' order by stt,id desc";
	$d->query($sql);
	$product_tab=$d->result_array();	

	#Lấy tin cung loai
	$d->reset();
	$sql="select id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,thumb,gia,link from #_product where hienthi =1 and id<>'".$product_detail['id']."' and id_lv0='".$product_detail['id_lv0']."' and type='".$product_detail['type']."' order by stt,id desc limit 0,8";
	$d->query($sql);
	$product=$d->result_array();

	## Update luot xem
	$d->reset();
	$sql_lanxem = "UPDATE #_product SET luotxem=luotxem+1  WHERE id='".$product_detail['id']."'";
	$d->query($sql_lanxem);
?>
<!-- CSS Vs JS MagicZoom -->
<link href="./magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="magiczoomplus/magiczoomplus.js" type="text/javascript"></script>

<!-- Style CSS MagicZoom Plus -->
<link href="./magiczoomplus/magiczoomplus-style.css" rel="stylesheet" type="text/css" media="screen"/>

<div class="main-tit">
	<h2>
		Chi tiết sản phẩm
	</h2>
</div>
<div class="content">
    <div class="w-clear">
        <div class="ct-l">
            <div class="ct-img">
                <a id="Zoom-1" class="MagicZoom" href="<?=_upload_product_l.$product_detail['photo']?>" title="<?=$product_detail['ten']?>">
                    <img src="<?=_upload_product_l.$product_detail['photo']?>" alt="<?=$product_detail['ten']?>">
                </a>
            </div>
            <?php if(count($list_photo)>0){ ?>
            <div class="ct-img-list">
            <!-- Thumb list zoom -->
                <div class="slick-img-thumb">
                    <?php for ($i=0; $i < count($list_photo); $i++) { ?>
                        <div>
                            <div style="padding:0px 5px;">
                                <a data-zoom-id="Zoom-1" href="<?=_upload_product_l.$list_photo[$i]['photo']?>" title="<?=$product_detail['ten']?>">
                                    <img src="<?=_upload_product_l.$list_photo[$i]['thumb']?>" alt="<?=$product_detail['ten']?>" />
                                </a>    
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="ct-r">
            <div class="ct-tit"><h2><?=$product_detail['ten']?></h2></div>
            <div class="ct-sp">
                <?=$product_detail['noidung']?>
            </div>
            <div class="addthis_native_toolbox"></div>
        </div>
    </div>

    <?php for ($i=0; $i < count($product_tab); $i++) { ?>
    	<div class="sc-tab-tit">
    		<?=$product_tab[$i]['ten']?>
    	</div>
    	<div class="sc-tab">
    		<?=$product_tab[$i]['noidung']?>
    	</div>
    <?php } ?>
    
    <?php if(count($product)>0){?>
    <div class="main-tit" style="margin-top:20px;">
    	<h2>
    		<?=_sanphamcungloai?>
    	</h2>
    </div>
    <div class="w-clear">
        <?php for($i=0;$i<count($product);$i++){ ?>
        	<div class="box-sp">    
                <div class="box-sp-img">
                    <div class="box-sp-xn">
                        <a class="various fancybox.ajax" href="ajax/sanpham.php?id=<?=$product[$i]['id']?>">
                            <i class="fa fa-eye"></i> Xem nhanh
                        </a>
                    </div>
                    <a href="san-pham/<?=$product[$i]['tenkhongdau']?>"><img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" /></a>
                </div>
                <h3>
                    <a href="san-pham/<?=$product[$i]['tenkhongdau']?>">
                        <?=$product[$i]['ten']?>
                    </a>
                </h3>
            </div>
        <?php }?>
    </div>
    <?php }?>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.sc-tab-tit').click(function(event) {
			$(this).next('.sc-tab').stop(true, true).slideToggle();
		});
	});
</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51d3c996345f1d03" async="async"></script>
