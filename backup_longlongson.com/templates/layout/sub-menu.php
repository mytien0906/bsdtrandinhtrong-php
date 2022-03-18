<div class="center">
    
</div>
<div style="display:none;">
    <ul id="sm-sac-mau" class="w-clear">
        <?php for ($i=0; $i < count($msacmau); $i++) { ?>
            <li>
                <a href="sac-mau/<?=$msacmau[$i]['tenkhongdau']?>.l">
                    <?=$msacmau[$i]['ten']?>
                    <img src="img/arr-r.png" alt="Icon" />
                </a>
            </li>
        <?php } ?>
    </ul>
    <ul id="sm-san-pham" class="w-clear">
        <?php for ($i=0; $i < count($mproduct); $i++) { ?>
            <li>
                <a href="san-pham/<?=$mproduct[$i]['tenkhongdau']?>.l">
                    <?=$mproduct[$i]['ten']?>
                    <img src="img/arr-r.png" alt="Icon" />
                </a>
            </li>
        <?php } ?>
    </ul>
    <ul id="sm-gach-men" class="w-clear">
        <?php for ($i=0; $i < count($mgachmen); $i++) { ?>
            <li>
                <a href="gach-men/<?=$mgachmen[$i]['tenkhongdau']?>.l">
                    <?=$mgachmen[$i]['ten']?>
                    <img src="img/arr-r.png" alt="Icon" />
                </a>
            </li>
        <?php } ?>
    </ul>
</div>