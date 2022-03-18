<div class="main-tit"><h2><?=$title_tcat?></h2></div>
<div style="color:#F00;font-weight:bold;">
    <?=$thongbao?>
</div>
<div>
    <form action="" method="post">
        <input type="text" name="madonhang" required />
        <input type="submit" value="Kiểm tra" class="button" />
    </form>
</div>
<div class="w-clear">
    <?php for ($i=0; $i < count($tintuc); $i++) { ?>
    <div class="box-donhang">
        <div class="box-donhang-tit">
            <strong>Mã đơn hàng:</strong> <?=$tintuc[$i]['madonhang']?>.
            <strong>Tình trạng:</strong>
            <?php
                $d->reset(); 
                $sql="select trangthai from #_tinhtrang where id= '".$tintuc[$i]['trangthai']."' ";
                $d->query($sql);
                $result=$d->fetch_array();
                if($result['trangthai']=='Mới đặt')
                {
                    echo '<span style="color:#F00">'.$result['trangthai'].'</span>';
                }
                else if($result['trangthai']=='Đã giao')
                {
                    echo '<span style="color:#00F">'.$result['trangthai'].'</span>';
                }
                else
                {
                    echo $result['trangthai'];
                }
            ?>
        </div>
        <div class="box-donhang-info">
            <?=$tintuc[$i]['donhang']?>
        </div>
    </div>    
    <?php } ?>
</div>