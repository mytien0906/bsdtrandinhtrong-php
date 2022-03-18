<?php 
    $d->reset();
    $sql="select photo,link from #_photo where hienthi=1 and type='slidermaunha' order by stt,id desc";
    $d->query($sql);
    $slidemaunha=$d->result_array();
 ?>
<div id="wowslider-container1" style="margin-bottom:20px;">
    <div class="ws_images">
        <ul>
        <?php for($i=0;$i<count($slidemaunha);$i++){?>
            <li><a href="<?=$slidemaunha[$i]['link']?>" target="_blank"><img src="<?=_upload_hinhanh_l.$slidemaunha[$i]['photo']?>" alt="slideshow" title="1" id="wows1_<?=$i?>"/></a></li>
        <?php }?>
        </ul>
    </div>
</div>              
<script type="text/javascript" src="js/wowslider1.js"></script>
<script type="text/javascript" src="js/wow1.script.js"></script>

<div class="content">
    <div class="main-tit"><h2><?=$title_tcat?></h2></div>
    <?php if(count($product)>0){?>
    <div class="w-clear">
    	<?php for($i=0;$i<count($product);$i++){ ?>
        	<div class="box-sp">    
                <div class="box-sp-img">
                    <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>">
                        <img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" />
                    </a>
                </div>
                <h3>
                    <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>">
                        <?=$product[$i]['ten']?>
                    </a>
                </h3>
            </div>
        <?php }?>
    </div>
    <div class="phantrang"><?=$paging['paging']?></div>
    <?php }else{echo _dangcapnhat;}?>
</div>
