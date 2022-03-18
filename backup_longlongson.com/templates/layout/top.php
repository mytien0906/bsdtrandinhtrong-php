<?php
    $d->reset();
    $sql="select photo,link,thumb,ten_$lang as ten from #_photo where type='bannert' and link='".$com."' order by stt,id desc limit 0,1";
    $d->query($sql);
    $bannert=$d->fetch_array();   
?>
<div class="bannert">
    <img src="<?=_upload_hinhanh_l.$bannert['thumb']?>" alt="Banner top"/>
    <!-- <div><h2><?=$bannert['ten']?></h2></div> -->
</div>