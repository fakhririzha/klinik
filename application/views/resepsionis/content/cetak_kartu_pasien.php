<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Klinik kami selalu memberikan pelayanan terbaik dengan fasilitas prima.">
  <meta name="keywords" content="klinik, rumah sakit, rumah sakit terbaik, klinik terbaik">
  <title><?php echo $title;?>
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
  <style>
    th {
      padding: 0px;
    }

    table {
      height: 5.5cm;
      width: 8.5cm;
      font-size: 9px;
      border-radius: 5px;
      border: 2px solid black;
    }
    
    td {
      padding-left: 10px;
      padding-top: 0px;
      padding-bottom: 0px;
    }

    .judul {
      font-size: 18px;
      font-weight: 700;
      color: #2962ff;
      padding-top: 10px !important;
    }

    .logo {
      height: 1cm;
      width: auto;
      padding-top: 3px !important;
    }

    .heading {
      background-color: #bbdefb;
    }

    .sk {
      font-size: 2px !important;
    }
  </style>
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
  <!-- END HEADER -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START MAIN -->

  <!-- START WRAPPER -->
  <!-- END LEFT SIDEBAR NAV-->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START CONTENT -->

  <br>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <table>
          <thead>
            <tr class="heading">
              <td colspan=2>
                <div class="col s9 judul center-align">KARTU PASIEN</div>
                <div class="col s3"><img src="<?= base_url('assets/images/logo/materialize-logo.png') ?>"
                    alt="" class="logo"></div>
              </td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pasien as $data): ?>
            <tr>
              <td>No. Kartu</td>
              <td>: <?= $data->dp_id ?>
              </td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>: <?= $data->dp_nama ?>
              </td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>: <?= $data->dp_alamat ?>
              </td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td>: <?= date_format(date_create("$data->dp_tanggal_lahir"), 'd-m-Y') ?>
              </td>
            </tr>
            <tr>
              <td>NIK</td>
              <td>: <?= $data->dp_nik ?>
              </td>
            </tr>
            <!-- <tr>
              <td colspan=2 class="sk">
                <p>Syarat dan Ketentuan:</p>
                <p></p>
                <p>1. Kartu ini harap dibawa ketika berobat</p>
                <p>2. Apabila kartu ini disalahgunakan akan dikenakan sangsi</p>
                <p>3. Apabila ada perubahan atau kehilangan kartu, segera lapor ke resepsionis.</p>
                <p></p>
              </td>
            </tr> -->
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END CONTENT -->
  <!-- END WRAPPER -->
  <!-- END MAIN -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START FOOTER -->
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
