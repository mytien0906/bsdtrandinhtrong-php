<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class=" image">
      <img src="dist/img/logo.png" class="" alt="Logo Image">
    </div>
    
  </div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <?php foreach ($config['type'] as $key => $value) {?>
      <?php if(($value['com']=='tintuc' || $value['com']=='product') && $value['list']==true){ ?>
        <li class="<?php if($_GET['com']==$value['com'] && $_GET['type']==$key){echo 'active ';} ?>treeview">
          <a href="#">
            <i class="fa <?php if($value['com']=='tintuc'){echo 'fa-newspaper-o';}if($value['com']=='product'){echo 'fa-list-alt';} ?>"></i> <span style="white-space:normal;"><?=$value['name']?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <?php if($key=='product'){ ?>
              <li>
                <a href="index.php?com=<?=$value['com']?>&act=man_thuonghieu&type=<?=$key?>&level=0">
                  <i class="fa fa-angle-right"></i> Quản lý danh thương hiệu
                </a>
              </li>
            <?php } ?>
            <?php if($value['list']==true){ ?>
              <?php for ($i=0; $i < $value['level']; $i++) { ?>
                  <li>
                    <a href="index.php?com=<?=$value['com']?>&act=man_list&type=<?=$key?>&level=<?=$i?>">
                      <i class="fa fa-angle-right"></i> Quản lý danh mục cấp <?=$i+1?>
                    </a>
                  </li>
              <?php } ?>
              <?php } ?>
              <li>
                <a href="index.php?com=<?=$value['com']?>&act=man&type=<?=$key?>">
                  <i class="fa fa-angle-right"></i> <?=$value['name']?>
                </a>
              </li>
          </ul>
        </li>
      <?php } ?>
    <?php } ?>
    <?php if($config['show']['photo']){ ?>
      <li class="<?php if($_GET['com']=='photo'){echo 'active ';} ?>treeview">
        <a href="#">
          <i class="fa fa-file-o"></i> <span>Quản lý hình ảnh</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu <?php if($_GET['type']==$key){echo 'active';} ?>">
          <?php foreach ($config['type'] as $key => $value) {?>
            <?php if($value['com']=='photo'){ ?>
              <li><a href="index.php?com=<?=$value['com']?>&act=man&type=<?=$key?>"><i class="fa fa-angle-right"></i> <?=$value['name']?></a></li>
              <?php } ?>
            <?php } ?>
        </ul>
      </li>
      <?php } ?>
    <?php if($config['show']['baiviet']==true){ ?>
    <li class="<?php if($_GET['com']=='baiviet'){echo 'active ';} ?>treeview">
        <a href="#">
          <i class="fa fa-file-o"></i> <span>Quản lý bài viết</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu <?php if($_GET['type']==$key){echo 'active';} ?>">
          <?php foreach ($config['type'] as $key => $value) {?>
            <?php if($value['com']=='baiviet'){ ?>
              <li><a href="index.php?com=<?=$value['com']?>&act=capnhat&type=<?=$key?>"><i class="fa fa-angle-right"></i> <?=$value['name']?></a></li>
              <?php } ?>
              <?php if(($value['com']=='tintuc' || $value['com']=='product') && $value['list']==false){ ?>
                <li>
                  <a href="index.php?com=<?=$value['com']?>&act=man&type=<?=$key?>">
                    <i class="fa fa-angle-right"></i> <?=$value['name']?>
                  </a>
                </li>
              <?php } ?>
            <?php } ?>
        </ul>
      </li>
      <?php } ?>
      <?php if($config['show']['page']){ ?>
      <li class="<?php if($_GET['com']=='page'){echo 'active ';} ?>treeview">
        <a href="#">
          <i class="fa fa-file-o"></i> <span>Quản lý nội dung trang</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu <?php if($_GET['type']==$key){echo 'active';} ?>">
          <?php foreach ($config['type'] as $key => $value) {?>
            <?php if($value['com']=='page'){ ?>
              <li><a href="index.php?com=<?=$value['com']?>&act=capnhat&type=<?=$key?>"><i class="fa fa-angle-right"></i> <?=$value['name']?></a></li>
              <?php } ?>
            <?php } ?>
        </ul>
      </li>
      <?php } ?>
    <li class="<?php if($_GET['com']=='setting' || $_GET['com']=='banner' || $_GET['com']=='bg' || $_GET['com']=='video' || $_GET['com']=='order' || $_GET['com']=='user' || $_GET['com']=='yahoo'){echo 'active ';} ?> treeview">
      <a href="#">
        <i class="fa fa-cog"></i> <span>Nội dung khác</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="index.php?com=setting&act=capnhat"><i class="fa fa-angle-right"></i> Quản lý thiết lập</a></li>
        <li><a href="index.php?com=banner&act=capnhat"><i class="fa fa-angle-right"></i> Quản lý banner</a></li>
        <?php if($config['background']){ ?>
        <li><a href="index.php?com=bg&act=capnhat"><i class="fa fa-angle-right"></i> Quản lý background</a></li>
        <?php } ?>
        <li><a href="index.php?com=email_dk&act=man"><i class="fa fa-angle-right"></i> Quản lý email nhận tin</a></li>
        <li><a href="index.php?com=video&act=man"><i class="fa fa-angle-right"></i> Quản lý video clips</a></li>
        <li><a href="index.php?com=nhantin&act=man&type=duan"><i class="fa fa-angle-right"></i> Quản lý nhận tin dự án</a></li>
        <li><a href="index.php?com=nhantin&act=man&type=tuyendung"><i class="fa fa-angle-right"></i> Quản lý đơn tuyển dụng</a></li>
      </ul>
    </li>

  </ul>
</section>
<!-- /.sidebar -->