<!DOCTYPE html>
<html lang="en">
<head>

    <title>KlinikPintar</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/style.css">
</head>
<body class="single-page">
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                   <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="<?php echo base_url()?>Main/index" rel="home"><img class="d-block" src="<?php echo base_url()?>assets/frontend/images/logo.png" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li><a href="<?php echo base_url()?>Main/index">Beranda</a></li>
                                <li class="current-menu-item"><a href="<?php echo base_url()?>Main/aboutpage">Tentang Kami</a></li>
                                <li><a href="<?php echo base_url()?>Main/servicespage">Layanan</a></li>
                                <li><a href="<?php echo base_url()?>Main/newspage">Berita</a></li>
                                <li><a href="<?php echo base_url()?>Main/contactpage">Kontak</a></li>
                                <li><a href="<?php echo base_url()?>Main/dokterpage">Dokter</a></li>

                                <?php if($this->session->userdata('password')) { ?>
                                <li><a href="<?php echo base_url()?>Main/logout">Logout</a></li>
                                <?php } else {?>
                                <li><a href="<?php echo base_url()?>Main/loginpage">Masuk</a></li>
                                <?php } ?>
                            
                            </ul>
                        </nav><!-- .site-navigation -->
                      
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Tentang Kami</h1>

                </div>
            </div>
        </div>

        <img class="header-img" src="<?php echo base_url()?>assets/frontend/images/about-bg.png" alt="">
    </header><!-- .site-header -->

    <div class="med-history">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-lg-6">
                    <h2>Sejarah KlinikPintar</h2>

                    <p class="justify-content-center">Kehadiran Klinik Pintar di kecamatan Medan Area tidak dapat dilepaskan dari keinginan masyarakat pada waktu itu.Atas kerjasama dengan RSU (Rumah Sakit Umum ) Sekitar, pada tanggal 15 Mei 1980 dibukalah Klinik Pintar, pada awalnya menggunakan rumah salah satu tenaga medis klinik pintar.Adanya Klinik Pengobatan ini merupakan sumbangan nyata dari klinik pintar kepada masyarakat di bidang pelayanan kesehatan. 31 Agustus 1980 pembangunan gedung Klinik pintar dimulai, berlokasi di sebelah utara Medan Area, diresmikan tanggal 15 mei 1982 dan digunakan hingga sekarang. Petugas yang langsung ditunjuk oleh Klinik Pintar Ngesti Waluyo Parakan untuk melayani adalah Yohanes Sukatra. Kemudian pada tahun 2012 Balai Pengobatan pintar berubah status dari Balai Pengobatan menjadi Klinik Pintar dilayani oleh 2 (dua ) orang tenaga medis, 1 (satu) orang tenaga paramedis, 1 (satu) orang tenaga Administrasi dengan sarana prasana yang cukup memadahi.</p>
<br>
<br>SEJARAH KEPEMIMPINAN

<br><li>Awal berdiri Balai Pengobatan dipimpin oleh seorang perawat</li>
<li>Yohanes Sukatra (Perawat) dengan seorang tenaga adminstrasi</li>
<li>Dr. Jeniwati ( 2010 – sekarang )</li></p>
                </div>
 
                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <img class="responsive" src="<?php echo base_url()?>assets/frontend/images/about.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="faq-stuff">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Pertanyaan yang sering diajukan</h2>
                </div>

                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <div class="accordion-wrap type-accordion">
                        <h3 class="entry-title d-flex justify-content-between align-items-center active">Apakah ada batasan atau limit untuk setiap perawatan yang dapat ditanggung biayanya?<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>Ya. Batasan untuk setiap perawatan adalah seperti yang tertera pada web, sementara manfaat pemulihan dapat dinikmati setelah 3 hari sejak keluar rumah sakit</p>
                        </div>

                        <h3 class="entry-title d-flex justify-content-between align-items-center">Apakah kertas struk/nota pembayaran dapat dianggap sebagai kuitansi?<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>Struk atau nota pembayaran bukan merupakan kuitansi asli sehingga pengajuan klaim dengan struk/nota pembayaran tidak bisa mendapatkan penggantian.</p>
                        </div>

                        <h3 class="entry-title d-flex justify-content-between align-items-center">Apabila kuitansi yang dikeluarkan oleh dokter merupakan gabungan dari jasa dokter dan obat, perlukah saya meminta dokter untuk memisahkan biaya jasa dokter dan biaya obat?<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>Untuk semua kuitansi yang merupakan gabungan dari biaya jasa dokter dan obat, mintalah dokter/klinik untuk merinci secara terpisah besarnya biaya jasa dokter dan biaya obat. Informasi tersebut diperlukan Great Eastern Life untuk memastikan biaya yang terjadi wajar dan lazim.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="professional-box">
                                <h2 class="d-flex align-items-center">Profesional</h2>

                                <img src="<?php echo base_url()?>assets/frontend/images/cardiogram-2.png" alt="">

                                <p>Tenaga medis kami ahli dalam bidang masing-masing.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="quality-box">
                                <h2 class="d-flex align-items-center">Berkualitas</h2>

                                <img src="images/hospital.png" alt="">

                                <p>Kami memberikan anda kenyamanan dan kemudahan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><a href="#"><img src="<?php echo base_url()?>assets/frontend/images/logo.png" alt=""></a></h2>

                           <p>KlinikPintar merupakan web klinik yang memiliki fitur fitur yang berguna untuk penguna agar lebih mempermudahnya dalam pelayanan medis .</p>


<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Kontak</h2>

                           <ul class="p-0 m-0">
                            <li><span>Alamat:</span>Fasilkom-TI</li>
                            <li><span>Telepon:</span>+6281265188118</li>
                            <li><span>E-mail:</span>MedArt@gmail.com</li>
                           </ul>
                        </div>
                    </div><!-- .col -->

                   <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-links">
                            <h2>Link Serbaguna</h2>

                            <ul class="p-0 m-0">
                                <li><a href="<?php echo base_url()?>Main/index">Beranda</a></li>
                                <li><a href="<?php echo base_url()?>Main/aboutpage">Tentang Kami</a></li>
                                <li><a href="<?php echo base_url()?>Main/servicespage">Layanan</a></li>
                                <li><a href="<?php echo base_url()?>Main/contactpage">Kontak</a></li>
                                <li><a href="<?php echo base_url()?>Main/aboutpage">FAQ</a></li>
                                <li><a href="<?php echo base_url()?>Main/servicespage">Testimonials</a></li>
                            </ul>
                        </div><!-- .foot-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='<?php echo base_url()?>assets/frontend/js/jquery.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>assets/frontend/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>assets/frontend/js/swiper.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>assets/frontend/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>assets/frontend/js/circle-progress.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>assets/frontend/js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>assets/frontend/js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>assets/frontend/js/custom.js'></script>
</body>
</html>