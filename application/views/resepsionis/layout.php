<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Klinik kami selalu memberikan pelayanan terbaik dengan fasilitas prima.">
  <meta name="keywords" content="klinik, rumah sakit, rumah sakit terbaik, klinik terbaik">
  <title><?php //echo $title;?>
  </title>
  <!-- Favicons-->
  <link rel="icon" href="<?php echo base_url('assets/images/favicon/favicon-32x32.png')?>"
    sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/favicon/apple-touch-icon-152x152.png')?>">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?php echo base_url('assets/images/favicon/mstile-144x144.png')?>">
  <!-- For Windows Phone -->
  <!-- CORE CSS-->
  <link href="<?php echo base_url('assets/css/materialize.css') ?>"
    type="text/css" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/materialize-admin.css') ?>"
    type="text/css" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/materialize-style.css')?>"
    type="text/css" rel="stylesheet">
  <!-- Custome CSS-->
  <link href="<?php echo base_url('assets/css/main.css')?>"
    type="text/css" rel="stylesheet">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo base_url('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')?>"
    type="text/css" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendors/flag-icon/css/flag-icon.min.css')?>"
    type="text/css" rel="stylesheet">
  <!-- DATATABLES -->
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables.min.css')?>">
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START HEADER -->
  <header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
      <nav class="navbar-color gradient-45deg-light-blue-cyan">
        <div class="nav-wrapper">
          <ul class="left">
            <li>
              <h1 class="logo-wrapper">
                <a href="<?= site_url() ?>" class="brand-logo darken-1">
                  <img src="<?php echo base_url('assets/images/logo/materialize-logo.png')?>"
                    alt="Logo Klinik">
                  <span class="logo-text hide-on-med-and-down">Sistem Informasi Klinik</span>
                </a>
              </h1>
            </li>
          </ul>
          <ul class="right hide-on-med-and-down">

            <li>
              <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                <i class="material-icons">settings_overscan</i>
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                <span class="avatar-status avatar-online">
                  <img src="<?php echo base_url('assets/images/avatar/avatar-7.png')?>"
                    alt="avatar">
                  <i></i>
                </span>
              </a>
            </li>

          </ul>
          <!-- profile-dropdown -->
          <ul id="profile-dropdown" class="dropdown-content">
            <li>
              <a href="#" class="grey-text text-darken-1">
                <i class="material-icons">face</i> Profile</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#" class="grey-text text-darken-1">
                <i class="material-icons">lock_outline</i> Lock</a>
            </li>
            <li>
              <a href="<?= base_url('admin/logout') ?>"
                class="grey-text text-darken-1">
                <i class="material-icons">keyboard_tab</i> Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- end header nav-->
  </header>
  <!-- END HEADER -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
          <li class="user-details cyan darken-2">
            <div class="row">
              <div class="col col s4 m4 l4">
                <img src="<?php echo base_url('assets/images/avatar/avatar-7.png')?>"
                  alt="" class="circle responsive-img valign profile-image cyan">
              </div>
              <div class="col col s8 m8 l8">
                <ul id="profile-dropdown-nav" class="dropdown-content">
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                      <i class="material-icons">face</i> Profile</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                      <i class="material-icons">lock_outline</i> Lock</a>
                  </li>
                  <li>
                    <a href="<?= base_url('admin/logout') ?>"
                      class="grey-text text-darken-1">
                      <i class="material-icons">keyboard_tab</i> Logout</a>
                  </li>
                </ul>
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
                  data-activates="profile-dropdown-nav"><?= $this->session->userdata('nama') ?><i
                    class="mdi-navigation-arrow-drop-down right"></i></a>
                <p class="user-roal">Administrator</p>
              </div>
            </div>
          </li>
          <li class="no-padding">
            <ul class="collapsible" data-collapsible="accordion">
              <li class="bold">
                <a href="<?= site_url() ?>" class="waves-effect waves-cyan">
                  <i class="material-icons">dashboard</i>
                  <span class="nav-text">Halaman Utama</span>
                </a>
              </li>
              <li class="bold">
                <a class="collapsible-header waves-effect">
                  <i class="material-icons">people_outline</i>
                  <span class="nav-text">Pasien</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="<?= site_url('admin/data_pasien') ?>"><i
                          class="material-icons">person_add</i>Pendaftaran Pasien</a></li>
                    <li>
                      <a href="<?= site_url('admin/registrasi_pasien') ?>"><i
                          class="material-icons">credit_card</i>Cetak Kartu Pasien</a></li>
                    <li>
                      <a href="<?= site_url('admin/pemeriksaan_kesehatan') ?>"><i
                          class="material-icons">person</i>List Pasien</a></li>
                  </ul>
                </div>
              </li>
              <li class="bold">
                <a class="collapsible-header waves-effect">
                  <i class="material-icons">monetization_on</i>
                  <span class="nav-text">Antrian</span>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <a href="<?= site_url('admin/e_payment') ?>"><i
                          class="material-icons">add_to_queue</i>Ambil Nomor Antri </a></li>
                    <li>
                      <a href="<?= site_url('admin/aktivasi_e_payment') ?>"><i
                          class="material-icons">recent_actors</i>Proses Antrian</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
          <i class="material-icons">menu</i>
        </a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START CONTENT -->
      <?php $this->load->view($content)?>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->
  </div>
  <!-- END MAIN -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START FOOTER -->
  <footer class="page-footer gradient-45deg-light-blue-cyan">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright ©
          <script type="text/javascript">
            document.write(new Date().getFullYear());
          </script> <a class="grey-text text-lighten-2" href="https://github.com/fakhririzha/klinik" target="_blank"> |
            See
            us in Github</a></span>
        <span class="right hide-on-small-only"> Design and Developed by Kelompok 3</span>
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->
  <!-- ================================================
    Scripts
    ================================================ -->
  <!-- jQuery Library -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/materialize-admin.js')?>"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?php echo base_url('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js')?>"></script>
  <!-- DATATABLES -->
  <script src="<?php echo base_url('assets/datatables.min.js')?>"></script>
  <!--custom-script.js - Add your own theme custom JS-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/main.js')?>"></script>
</body>

</html>
