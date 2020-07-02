Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>admin/dasbor" class="nav-link">Admin Page | Basis Data</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="https://scontent-cgk1-1.cdninstagram.com/v/t51.2885-19/s320x320/97537635_597246117554918_8296920691727400960_n.jpg?_nc_ht=scontent-cgk1-1.cdninstagram.com&_nc_cat=102&_nc_ohc=YPvvba6PvtAAX_mw-Q2&oh=9129643f034b0dc433f13b49e58d5d0b&oe=5F248DBD" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?php echo $this->session->userdata('USERNAME'); ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="https://scontent-cgk1-1.cdninstagram.com/v/t51.2885-19/s320x320/97537635_597246117554918_8296920691727400960_n.jpg?_nc_ht=scontent-cgk1-1.cdninstagram.com&_nc_cat=102&_nc_ohc=YPvvba6PvtAAX_mw-Q2&oh=9129643f034b0dc433f13b49e58d5d0b&oe=5F248DBD" class="img-circle elevation-2" alt="User Image">

            <p>
              <?php echo $this->session->userdata('USERNAME'); ?>
              <!-- <small><?php echo date('d M Y') ?></small> -->
              <h6>06.2018.1.07052</h6>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href="<?php echo base_url('login/logout') ?>" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container