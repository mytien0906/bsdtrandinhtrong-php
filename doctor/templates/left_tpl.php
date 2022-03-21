<div class="he_menu">
  <div class="logo">
    <span class="close">
      <i class="fa fa-minus-square" aria-hidden="true"></i> Close
    </span>
    <a href="#" target="_blank" onclick="return false;"> <img src="images/logo.png"  alt="" width="90" /> </a>
  </div>
  <div class="nav_menu">Menu</div>
  <div class="nav-divider"></div>
  <div class="sidebarSep mt0"></div>
  <!-- Left navigation -->
  <ul id="menu" class="nav">
    <li class="dash" id="menu1">
      <a class="<?php if(empty($_GET)) echo 'active' ?>" title="" href="index.php">
        <span>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i> Trang chủ
        </span>
      </a>
    </li>
    <li class="none <?php if($_GET['com']=='order') echo ' activemenu' ?> " id="menu_order">
      <a href="" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Đơn hàng</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man&id_tinhtrang=1">Đơn hàng mới đặt</a></li>
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man&id_tinhtrang=2">Đơn hàng đã xác nhận</a></li>
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man&id_tinhtrang=3">Đơn hàng đăng giao hàng</a></li>
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man&id_tinhtrang=4">Đơn hàng đã giao</a></li>
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man&id_tinhtrang=5">Đơn hàng đã hủy</a></li>
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man">Danh sách đơn hàng</a></li>
      </ul>
    </li>
    <?php
      $sql = "select count(id) as dem from table_baiviet where hienthi=0 and type='san-pham'";
      $d->query($sql);
      $dem_cd = $d->fetch_array();

      $sql = "select count(id) as dem from table_baiviet where hienthi=1 and type='san-pham'";
      $d->query($sql);
      $dem_dd = $d->fetch_array();

      $sql = "select count(id) as dem from table_baiviet where type='san-pham'";
      $d->query($sql);
      $dem_tg = $d->fetch_array();

      $sql = "select count(id) as dem from table_thanhvien";
      $d->query($sql);
      $dem_tv = $d->fetch_array();

      $sql = "select count(id) as dem from table_baiviet where id_user!=0 and type='san-pham'";
      $d->query($sql);
      $dem_up = $d->fetch_array();

      $sql = "select count(id) as dem from table_baiviet where id_user=0 and type='san-pham'";
      $d->query($sql);
      $dem_ad = $d->fetch_array();
    ?>
    <li><a href="index.php?com=baiviet&act=man&type=san-pham&hienthi=0" class="<?php if($_REQUEST['hienthi']!=1 && empty($_REQUEST['id_user']) && isset($_REQUEST['hienthi'])) echo 'active' ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tin mới đăng [Chưa duyệt]</span><strong style="background: #FF0000 !important;"><?=$dem_cd['dem']?></strong></a></li>

    <li><a href="index.php?com=baiviet&act=man&type=san-pham&hienthi=1" class="<?php if($_REQUEST['hienthi']!=0 && empty($_REQUEST['id_user']) && isset($_REQUEST['hienthi'])) echo 'active' ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tin Đăng [Đã duyệt]</span><strong style="background: #0099FF !important;"><?=$dem_dd['dem']?></strong></a></li>

    <li><a href="index.php?com=baiviet&act=man&type=san-pham&id_user=1" class="<?php if($_REQUEST['id_user']!=0 && empty($_REQUEST['hienthi']) && isset($_REQUEST['id_user'])) echo 'active' ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Thành viên đăng tin</span><strong style="background: #FF00FF !important;"><?=$dem_up['dem']?></strong></a></li>

    <li><a href="index.php?com=baiviet&act=man&type=san-pham&id_user=0" class="<?php if($_REQUEST['id_user']!=1 && empty($_REQUEST['hienthi']) && isset($_REQUEST['id_user'])) echo 'active' ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Admin đăng tin</span><strong style="background: #2F4F4F !important;"><?=$dem_ad['dem']?></strong></a></li>

    <li class="<?php if($_GET['com']=='baiviet' && $_GET['type']=='san-pham' && ($_GET['act']=='man_list' || $_GET['act']=='man_cat' || $_GET['act']=='man_item')) echo ' activemenu' ?> " id="menu_sanpham">
      <a href="" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Danh mục tin đăng</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='san-pham' && $_GET['act']=='man_list') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_list&type=san-pham">Quản lý tin đăng cấp 1</a></li>
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='san-pham' && $_GET['act']=='man_cat') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_cat&type=san-pham">Quản lý tin đăng cấp 2</a></li>
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='san-pham' && $_GET['act']=='man_item') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_item&type=san-pham">Quản lý tin đăng cấp 3</a></li>
      </ul>
    </li>
    <?php /*
     <li class="<?php if($_GET['com']=='baiviet' && $_GET['type']=='khoi-nganh') echo ' activemenu' ?> " id="menu_khoinganh"><a href="" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Khối ngành</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='baiviet' && $_GET['act']=='man_list') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_list&type=khoi-nganh">Quản lý danh mục khối ngành</a></li>
        <li<?php if($_GET['com']=='baiviet' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=khoi-nganh">Quản lý khối ngành</a></li>
      </ul>
    </li>
    */?>
    <li class="template_li<?php if($_GET['com']=='info' && ($_GET['type']=='gioi-thieu' || $_GET['type']=='huong-dan-dang-tin' || $_GET['type']=='dieu-khoan-su-dung' || $_GET['type']=='chinh-sach-bao-mat')) echo ' activemenu' ?>" id="menu3">
      <a href="#" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Trang tĩnh</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='info' && $_GET['type']=='gioi-thieu') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=gioi-thieu" title="">Giới thiệu</a></li>
        <li<?php if($_GET['com']=='info' && $_GET['type']=='huong-dan-dang-tin') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=huong-dan-dang-tin" title="">Hướng dẫn đăng tin</a></li>
        <li<?php if($_GET['com']=='info' && $_GET['type']=='dieu-khoan-su-dung') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=dieu-khoan-su-dung" title="">Điều khoản sử dụng</a></li>
        <li<?php if($_GET['com']=='info' && $_GET['type']=='chinh-sach-bao-mat') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=chinh-sach-bao-mat" title="">Chính sách bảo mật</a></li>
       </ul>
    </li>
    
    <li class="<?php if($_GET['com']=='baiviet' && ($_GET['type']=='tin-tuc' || $_GET['type']=='chinh-sach' || $_GET['type']=='hoi-dap')) echo ' activemenu' ?> " id="menu_tintuc">
      <a href="" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Bài viết</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='tin-tuc' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tin-tuc">Quản lý tin tức</a></li>
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='ky-gui' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=ky-gui">Quản lý ký gửi nhà đẩt</a></li>
         <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='hoi-dap' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=hoi-dap">Quản lý câu hỏi thường gặp</a></li>
      </ul>
    </li>
    
    
    <li class="gallery_li<?php if($_GET['com']=='photo') echo ' activemenu' ?>" id="menu8">
      <a href="#" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Slider</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='photo' && $_GET['type']=='slider') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=slider" title="">Hình ảnh slider</a></li>
        <li<?php if($_GET['com']=='photo' && $_GET['type']=='quangcao') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=quangcao" title="">Hình ảnh quảng cáo</a></li>
      </ul>
    </li>
    <li class="template_li<?php if($_GET['com']=='bannerqc') echo ' activemenu' ?>" id="menuxsas9">
      <a href="#" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Hình ảnh</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['type']=='logo') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=logo" title="">Logo</a></li>
        <li<?php if($_GET['type']=='bg_footer') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=bg_footer" title="">Background footer</a></li>
        <li<?php if($_GET['type']=='banner_top') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=banner_top" title="">Banner top</a></li>
        <li<?php if($_GET['type']=='quangcao') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=quangcao_left" title="">Banner QC</a></li>
        <li<?php if($_GET['type']=='popup') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=popup" title="">Popup</a></li>
        <!-- <li<?php if($_GET['type']=='hinhdaidien') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=hinhdaidien" title="">Hình đại diện share link</a></li> -->
      </ul>
    </li>
    <li class="template_li<?php if($_GET['com']=='setting' || $_GET['com']=='company' || $_GET['com']=='newsletter') echo ' activemenu' ?>" id="menu10">
      <a href="#" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Thông tin công ty</span><strong></strong></a>
      <ul class="sub">
       <li<?php if($_GET['com']=='company' && $_GET['type']=='lienhe') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=lienhe" title="">Thông tin liên hệ</a></li>
       <li<?php if($_GET['com']=='company' && $_GET['type']=='footer') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=footer" title="">Thông tin footer</a></li>
       <li<?php if($_GET['com']=='setting') echo ' class="this"' ?>><a href="index.php?com=setting&act=capnhat" title="">Cấu hình chung</a></li>
      </ul>
    </li>
    <li class="setting_li<?php if($_GET['com']=='database' || $_GET['com']=='backup' || $_GET['com']=='user') echo ' activemenu' ?>" id="menutttk12"><a href="#" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Cấu hình website</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='user' && $_GET['act']=='admin_edit') echo ' class="this"' ?>><a href="index.php?com=user&act=admin_edit">Thông tin Tài khoản</a></li>
      </ul>
    </li>
  </ul>

</div>
