<div class="center1 w-clear">
    <div class="menu-l <?php if($com=='index' || $com==''){echo ' index';} ?>">
        <div class="tit">
            <img src="img/i-menu.png" alt="Menu" />
            Danh mục sản phẩm
        </div>
        <ul <?php if($com=='' || $com=='index'){echo 'class="show"';} ?>>
            <?php for ($i=0; $i < count($mproduct); $i++) { ?>
                <li>
                    <a href="san-pham/<?=$mproduct[$i]['tenkhongdau']?>.l">
                        <?=$mproduct[$i]['ten']?>
                    </a>
                    <?php 
                        $d->reset();
                        $sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_product_list where hienthi=1 and type='product' and level=1 and id_lv0='".$mproduct[$i]['id']."' order by stt,id desc";
                        $d->query($sql);
                        $tmp=$d->result_array();
                        if(count($tmp)>0)
                        {
                            echo '<ul>';
                            for ($j=0; $j < count($tmp); $j++) { 
                    ?>
                        <li>
                            <a href="san-pham/<?=$tmp[$j]['tenkhongdau']?>.c">
                                <?=$tmp[$j]['ten']?>
                            </a>
                        </li>
                    <?php  }echo '</ul>';} ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="menu-r">
        <select name="" id="idl">
            <option value="0">Tất cả</option>
            <?php for ($i=0; $i < count($mproduct); $i++) { ?>
            <option value="<?=$mproduct[$i]['id']?>" <?php if($mproduct[$i]['id']==$idl){echo 'selected="selected"';} ?>><?=$mproduct[$i]['ten']?></option>
            <?php } ?>
        </select>
        <input type="text" id="key" value="<?=$tukhoa?>" placeHolder="Nhập từ khóa tìm kiếm..." />
        <input type="button" id="do-se" value="Tìm" />
    </div>
    <div class="menu-hl">
        <img src="img/i-hl.png" alt="Hotline" />
        Hotline: 
        <span><?=$row_setting['hotline']?></span>
    </div>
</div>
<script type="text/javascript"> 
    $(document).ready(function() {
        $('#do-se').click(function(event) {
            var idl=$('#idl').val();
            var key=$('#key').val();
            if(idl>0 || key!='')
            {
                window.location.href="http://<?=$config_url?>/tim-kiem/"+idl+"/"+key;
            }
            else
            {
                alert('Vui lòng chọn danh mục hoặc nhập từ khóa!');
            }
        });
    });
</script>