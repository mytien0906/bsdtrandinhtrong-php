<div class="menu-l">
    <ul id="main-menu" class="sm sm-blue">
        <li class="menu-line <?php if($com=='' || $com=='index') echo ' activem'; ?>">
            <a href="http://<?=$config_url?>/">
                <?=_trangchu?>
            </a>    
        </li>
        
        <li class="menu-line <?php if($com=='gioi-thieu') echo ' activem'; ?>">
            <a href="gioi-thieu/<?=$iabout['tenkhongdau']?>"><?=_gioithieu?></a>
        </li>
        
        <li class="menu-line <?php if($com=='san-pham') echo ' activem'; ?>">
            <a href="san-pham"><?=_sanpham?></a>
            <?php if(count($msanpham)>0){?>
            <ul>
                <?php for ($i=0; $i < count($msanpham); $i++) { ?>
                    <li>
                        <a href="san-pham/<?=$msanpham[$i]['tenkhongdau']?>.l">
                            <?=$msanpham[$i]['ten']?>
                        </a>
                        <?php 
                            $d->reset();
                            $sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,thumb from #_tintuc_list where hienthi=1 and type='sanpham' and level=1 and id_lv0='".$msanpham[$i]['id']."' order by stt,id desc";
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
                        <?php }echo '</ul>';} ?>
                    </li>
                <?php }?>
            </ul>
            <?php }?>
        </li>

        <li class="menu-line <?php if($com=='dich-vu') echo ' activem'; ?>">
            <a href="dich-vu"><?=_dichvu?></a>
            <?php if(count($mdichvu)>0){?>
            <ul>
                <?php for ($i=0; $i < count($mdichvu); $i++) { ?>
                    <li>
                        <a href="dich-vu/<?=$mdichvu[$i]['tenkhongdau']?>.l">
                            <?=$mdichvu[$i]['ten']?>
                        </a>
                        <?php 
                            $d->reset();
                            $sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,thumb from #_tintuc_list where hienthi=1 and type='dichvu' and level=1 and id_lv0='".$mdichvu[$i]['id']."' order by stt,id desc";
                            $d->query($sql);
                            $tmp=$d->result_array();
                            if(count($tmp)>0)
                            {
                                echo '<ul>';
                                for ($j=0; $j < count($tmp); $j++) { 
                        ?>
                            <li>
                                <a href="dich-vu/<?=$tmp[$j]['tenkhongdau']?>.c">
                                    <?=$tmp[$j]['ten']?>
                                </a>
                            </li>
                        <?php }echo '</ul>';} ?>
                    </li>
                <?php }?>
            </ul>
            <?php }?>
        </li>
        
        <li class="menu-line <?php if($com=='tin-tuc') echo ' activem'; ?>">
            <a href="tin-tuc"><?=_tintuc?></a>
            <?php if(count($mtintuc)>0){?>
            <ul>
                <?php for ($i=0; $i < count($mtintuc); $i++) { ?>
                    <li>
                        <a href="tin-tuc/<?=$mtintuc[$i]['tenkhongdau']?>.l">
                            <?=$mtintuc[$i]['ten']?>
                        </a>
                        <?php 
                            $d->reset();
                            $sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,thumb from #_tintuc_list where hienthi=1 and type='tintuc' and level=1 and id_lv0='".$mdichvu[$i]['id']."' order by stt,id desc";
                            $d->query($sql);
                            $tmp=$d->result_array();
                            if(count($tmp)>0)
                            {
                                echo '<ul>';
                                for ($j=0; $j < count($tmp); $j++) { 
                        ?>
                            <li>
                                <a href="tin-tuc/<?=$tmp[$j]['tenkhongdau']?>.c">
                                    <?=$tmp[$j]['ten']?>
                                </a>
                            </li>
                        <?php }echo '</ul>';} ?>
                    </li>
                <?php }?>
            </ul>
            <?php }?>
        </li>

        <li class="menu-line <?php if($com=='tuyen-dung') echo ' activem'; ?>">
            <a href="tuyen-dung"><?=_tuyendung?></a>
        </li>

        <li class="menu-line <?php if($com=='lien-he') echo ' activem'; ?>">
            <a href="lien-he"><?=_lienhe?></a>
        </li>
    </ul>
</div>
<div class="menu-r">
    <input type="text" id="keywords" value="<?=$tukhoa?>" placeHolder="<?=_nhaptukhoa?>..." onkeypress="doEnters(event)" />
    <img src="img/i-se.png" alt="Search" onclick="onSearchs(event)" />
</div>
    