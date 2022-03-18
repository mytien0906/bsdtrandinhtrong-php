<!-- Logo -->
<a href="index.php" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini">Admin</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg">Administrators</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <div class="pull-left admin_info">
      <p>Chào, <?=$_SESSION['login']['username']?></p>
    </div>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
            <li>
            <a href="index.php?com=user&act=admin_edit"><i class="fa fa-cog"></i> Quản lý tài khoản</a>
            </li>

      <li>
        <a href="../" target="_blank"><i class="fa fa-file"></i> Xem website</a>
      </li>
      <li>
        <a href="index.php?com=user&act=logout"><i class="fa fa-power-off"></i> Đăng xuất</a>
      </li>
    </ul>
  </div>
</nav>