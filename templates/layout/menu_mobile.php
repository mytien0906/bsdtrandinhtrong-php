<nav id="menu-mobile" class="mm-menu mm-offcanvas">
	<ul>
		<li class="p-relative">
			<a href="http://<?=$config_url?>/" title="Trang chủ" class="<?php if($_GET['com'] == '' || $_GET['com'] == 'index'){echo "active";}?>">
				Trang chủ
			</a>
		</li>
		<li class="p-relative">
			<a href="gioi-thieu" title="Giới thiệu" class="<?php if($_GET['idl'] == 'gioi-thieu'){echo "active";}?>">Giới thiệu</a>
		</li>
		
		<?php if(count($sanpham_menu)){ ?>
        <?php for($i=0;$i<count($sanpham_menu);$i++){
            $sanpham_menu_lv = get_result_array("select tenkhongdau,id,ten_$lang as ten,type from #_baiviet_cat where hienthi=1 and type='san-pham' and id_list='".$sanpham_menu[$i]['id']."' order by stt asc,id desc");
        ?>
        <li>
            <a href="<?=$sanpham_menu[$i]['tenkhongdau']?>" title="<?=$sanpham_menu[$i]['ten']?>"><?=$sanpham_menu[$i]['ten']?><?php if(count($sanpham_menu_lv)){ ?><span class="pe-7s-angle-right"></span><?php } ?></a>
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
        <?php } ?>
		<!-- <li class="p-relative">
            <a href="huong-dan-dang-tin" title="Hướng dẫn đăng tin" class="<?php if($_GET['idl'] == 'huong-dan-dang-tin'){echo "active";}?>">Hướng dẫn đăng tin</a>
        </li> -->
		<li class="p-relative">
			<a href="tin-tuc" title="Tin tức" class="<?php if($_GET['idl'] == 'tin-tuc'){echo "active";}?>">Tin tức</a>
		</li>
		<!-- <li class="p-relative">
			<a href="hoi-dap" title="Câu hỏi thường gặp" class="<?php if($_GET['idl'] == 'hoi-dap'){echo "active";}?>">Câu hỏi thường gặp</a>
		</li>
		<li class="p-relative">
			<a href="chinh-sach" title="Chính sách" class="<?php if($_GET['idl'] == 'chinh-sach'){echo "active";}?>">Chính sách</a>
		</li> -->
		<li class="p-relative">
			<a href="lien-he" title="Liên hệ" class="<?php if($_GET['idl'] == 'lien-he'){echo "active";}?>">Liên hệ</a>
		</li>
	</ul>
</nav>
