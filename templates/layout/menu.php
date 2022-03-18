<div class="bgss">
	<section id="nav-bar" class="menu-top1 clearfix">
		<div class="container">
			<ul class="list-menu">
                <li class="<?=($source=='index') ? 'active':''?>"><a href="" class="cursor-pointer">Trang chủ</a></li>
                <li class="<?=($_GET['idl']=='gioi-thieu') ? 'active':''?>"><a href="gioi-thieu" class="cursor-pointer">Giới thiệu</a></li>
                <?php for($i=0;$i<count($sanpham_menu);$i++){  $sanpham_menu_lv = get_result_array("select tenkhongdau,id,ten_$lang as ten,type from #_baiviet_cat where hienthi=1 and type='san-pham' and id_list='".$sanpham_menu[$i]['id']."' order by stt asc,id desc"); ?>
                <li class="<?=($_GET['idl']==$sanpham_menu[$i]['tenkhongdau']) ? 'active':''?>"><a href="<?=$sanpham_menu[$i]['tenkhongdau']?>" class="cursor-pointer"><?=$sanpham_menu[$i]['ten']?></a>
                <?php if(count($sanpham_menu_lv)){ ?>
                <ul>
                    <?php for($k=0;$k<count($sanpham_menu_lv);$k++){
                         $sanpham_menu_lc = get_result_array("select tenkhongdau,id,ten_$lang as ten,type from #_baiviet_item where hienthi=1 and type='san-pham' and id_cat='".$sanpham_menu_lv[$k]['id']."' and id_list='".$sanpham_menu[$i]['id']."' order by stt asc,id desc");
                    ?>
                    <li>
                        <a href="<?=$sanpham_menu_lv[$k]['tenkhongdau']?>" title="<?=$sanpham_menu_lv[$k]['ten']?>"><?=$sanpham_menu_lv[$k]['ten']?><?php if(count($sanpham_menu_lc)){ ?><span class="pe-7s-angle-right"></span><?php } ?></a>
                        <?php if(count($sanpham_menu_lc)){ ?>
                        <ul>
                            <?php for($m=0;$m<count($sanpham_menu_lc);$m++){  ?>
                            <li>
                                <a href="<?=$sanpham_menu_lc[$m]['tenkhongdau']?>" title="<?=$sanpham_menu_lc[$m]['ten']?>"><?=$sanpham_menu_lc[$m]['ten']?></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
                </li>
                <?php } ?>
                <li class="<?=($_GET['idl']=='ky-gui') ? 'active':''?>"><a href="ky-gui" class="cursor-pointer">Ký gửi</a></li>
                <li class="<?=($_GET['idl']=='tin-tuc') ? 'active':''?>"><a href="tin-tuc" class="cursor-pointer">Tin tức</a></li>
				<li class="<?=($_GET['idl']=='lien-he') ? 'active':''?>"><a href="lien-he" class="cursor-pointer">Liên hệ</a></li>
			</ul>
		</div>
	</section>
</div>