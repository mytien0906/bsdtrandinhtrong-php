<div class="smenu-menu">
	<ul id="main-menus" class="sm sm-blue">
        <li>
            <a href="http://<?=$config_url?>/">
                <?=_trangchu?>
            </a>
        </li>
        <li <?php if($com=='gioi-thieu'){echo 'class="active"';}?>>
            <a href="gioi-thieu/<?=$iabout['tenkhongdau']?>" class="has-sub" data-goto="i3">
                <?=_gioithieu?>
            </a>
        </li>
        <li <?php if($com=='du-an'){echo 'class="active"';}?>>
            <a href="du-an">
                <?=_duan?>
            </a>
            <?php if(count($mduan)>0){ ?>
            <ul>
                <?php for ($i=0; $i < count($mduan); $i++) { ?>
                    <li>
                        <a href="du-an/<?=$mduan[$i]['tenkhongdau']?>.l">
                            <?=$mduan[$i]['ten']?>
                        </a>
                        <?php 
                            $d->reset();
                            $sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_tintuc_list where hienthi=1 and type='duan' and level=1 and id_lv0='".$mduan[$i]['id']."' order by stt,id desc";
                            $d->query($sql);
                            $tmp=$d->result_array();
                            if(count($tmp)>0)
                            {
                                echo '<ul>';
                                for ($j=0; $j < count($tmp); $j++) { 
                        ?>
                            <li>
                                <a href="du-an/<?=$tmp[$j]['tenkhongdau']?>.c">
                                    <?=$tmp[$j]['ten']?>
                                </a>
                            </li>
                        <?php } echo '</ul>';} ?>
                    </li>
                <?php } ?>
            </ul>
            <?php } ?>
        </li>
        <li <?php if($com=='dich-vu'){echo 'class="active"';}?>>
            <a href="dich-vu">
                <?=_dichvu?>
            </a>
            <?php if(count($mdichvu)>0){ ?>
            <ul>
                <?php for ($i=0; $i < count($mdichvu); $i++) { ?>
                    <li>
                        <a href="dich-vu/<?=$mdichvu[$i]['tenkhongdau']?>.l">
                            <?=$mdichvu[$i]['ten']?>
                        </a>
                        <?php 
                            $d->reset();
                            $sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_tintuc_list where hienthi=1 and type='dichvu' and level=1 and id_lv0='".$mdichvu[$i]['id']."' order by stt,id desc";
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
                        <?php } echo '</ul>';} ?>
                    </li>
                <?php } ?>
            </ul>
            <?php } ?>
        </li>
        <li <?php if($com=='tin-tuc'){echo 'class="active"';}?>>
            <a href="tin-tuc">
                <?=_tintuc?>
            </a>
        </li>
        <li <?php if($com=='tuyen-dung'){echo 'class="active"';}?>>
            <a href="tuyen-dung">
                <?=_tuyendung?>
            </a>
        </li>
        <li <?php if($com=='lien-he'){echo 'class="active"';}?>>
            <a href="lien-he">
                <?=_lienhe?>
            </a>
        </li>
    </ul>
</div>
