<?php
    session_start();
    $session=session_id();
    date_default_timezone_set('Asia/Saigon');
    @define ( '_template' , '../templates/'); //định nghĩa đường dẫn tắt, chèn biến vào thay thế
    @define ( '_source' , '../sources/');
    @define ( '_lib' , '../admin/lib/');
    
    $_SESSION['lang']='vi';
    $lang='vi';

    require_once _source."lang_$lang.php";
    
    include_once _lib."config.php";
    include_once _lib."constant.php";
    include_once _lib."functions.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."class.database.php";
    include_once _lib."file_requick.php";

    $id=$_POST['id'];
    $id_mau=$_POST['id_mau'];

    $d->reset();
    $sql="select photo,thumb from #_product_hinhanh where hienthi=1 and id_photo='$id' and id_mau='$id_mau' order by stt desc,id asc";
    $d->query($sql);
    $row_hinhanhsp11=$d->result_array();
    if(count($row_hinhanhsp11)==0)
    {
        echo 'Màu này không có hình!';
    }
    else
    {
?>

<div class="ct-img">
    <a id="Zoomer" href="<?=_upload_product_l.$row_hinhanhsp11[0]['photo']?>"  class="MagicZoomPlus" rel="selectors-effect-speed: 600;" title=""><img src="<?=_upload_product_l.$row_hinhanhsp11[0]['photo']?>" border="0"/></a>
</div>
<div class="ct-img-list">
<?php               
    $count_hinhanh=count($row_hinhanhsp11);
    //echo $count_hinhanh; exit;
    if($count_hinhanh>0){
    ?>   
    <div id="slideShow" class="ImageCarouselBox" style="margin: 0 auto 0;">               
        <div class="ProductTinyImageList listImages jcarousel">
            <ul>                                             
            <?php for($i=0;$i<$count_hinhanh;$i++){ ?>       
                <li>
                    <div class="TinyOuterDiv">
                        <div>
                            <a href="<?=_upload_product_l.$row_hinhanhsp11[$i]['photo']?>" rel="zoom-id: Zoomer" rev="<?=_upload_product_l.$row_hinhanhsp11[$i]['photo']?>" title="<?=$row_detail['ten']?>"><img src="<?=_upload_product_l.$row_hinhanhsp11[$i]['thumb']?>" class="jshop_img_thumb"/></a>
                        </div>
                    </div>
                </li>
            <?php } ?>  
            </ul>
            <a href="#" class="jcarousel-control-prev" style="background:#03a2e7; top:45% !important; left:0px !important; color:#FFF;">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next" style="background:#03a2e7; top:45% !important; right:0px !important; color:#FFF;">&rsaquo;</a>
        </div>
    </div>
<?php } ?> 
</div>
<?php }?>