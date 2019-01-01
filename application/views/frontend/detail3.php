<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/bootstrap.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/swiper.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/style.css">
</head>
<body class="single-page blog-page">
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
                                <li><a href="<?php echo base_url()?>Main/aboutpage">Tentang Kami</a></li>
                                <li><a href="<?php echo base_url()?>Main/servicespage">Layanan</a></li>
                                <li class="current-menu-item"><a href="<?php echo base_url()?>Main/newspage">Berita</a></li>
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
                    <h1>Berita Kesehatan</h1>
                </div>
            </div>
        </div>

        <img class="header-img" src="<?php echo base_url()?>assets/frontend/images/news-bg.png" alt="">
    </header><!-- .site-header -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="the-news">
                    <div class="row">
                        <div class="col-12 col-lg-10">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="<?php echo base_url()?>assets/frontend/images/sariawan.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Awas, Sariawan Rentan Muncul Saat Stres</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">9 Desember 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Dinul William</a></div>

                                        <div class="post-comments"><a href="#">11 Komentar</a></div>
                                        <br>&nbsp;
                                        <p class="justify">
                                        "Sariawan bisa terjadi karena ada masalah, stres. Saat stres ini membuat imunitas rendah. Ketika menurunnya sistem pertahanan lokal maka bisa terjadi sariawan,"
                                        <br>
                                        Siapa yang tidak pernah mengalami sariawan? Gangguan di mulut ini begitu menyebalkan sehingga kita sulit menikmati makanan. Bahkan hanya untuk sekadar berbicara.
                                        <br>
                                        Parahnya lagi, sariawan seenaknya nangkring di rongga mulut selama beberapa hari, bahkan sampai dua pekan.
                                        <br>
                                        Sebagian besar orang mengira sariawan disebabkan kekurangan vitamin C. Anggapan ini tak sepenuhnya salah. Namun ada penyebab lain seperti stres karena akan memacu asam lambung sehingga mukosa di mulut menjadi bereaksi dan rusak.
                                        <br>
                                        Kebiasaan buruk saat stres juga memicu munculnya sariawan di mulut. Misalnya seperti menggigit bibir, makan-makanan berlemak dan pedas. Lantaran inilah bisa menyebabkan iritasi di mulut sehingga lesi bermunculan.
                                        <br>
                                        Langkah menyembuhkan sariawan karena stres bisa dengan mengelola emosi dan tekanan pikiran. Penenangan dari stres bisa dengan cara yoga, olah raga, atau melakukan kegiatan yang menyenangkan lain.</p>
                                    </div>
                                </header>

                               

                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="sidebar">
                   

                    <div class="popular-posts">
                        <h2 class="widget-title">Berita Populer</h2>

                        <ul class="p-0 m-0">
                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="<?php echo base_url()?>Main/detailpage4"><img src="<?php echo base_url()?>assets/frontend/images/iconnanorobot.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="<?php echo base_url()?>Main/detailpage4">Nanorobot Asal Cina Mampu Mengecilkan Tumor</a></h3>

                                    <div class="posted-date">10 Desember 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="<?php echo base_url()?>Main/detailpage5"><img src="<?php echo base_url()?>assets/frontend/images/iconcabai.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="detail5.php">Cabai Bisa Jadi Terobosan Baru Pengobatan Kanker</a></h3>

                                    <div class="posted-date">12 Desember 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="<?php echo base_url()?>Main/detailpage6"><img src="<?php echo base_url()?>assets/frontend/images/iconhiv.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="<?php echo base_url()?>Main/detailpage6">Ilmuwan Tiongkok Ciptakan DNA Bayi yang Tahan dengan Virus HIV</a></h3>

                                    <div class="posted-date">13 Desember 2018</div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .cat-links -->

                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Jam Buka</h2>

                      <ul class="p-0 m-0">
                            <li>Senin - Kamis <span>8.00 - 19.00</span></li>
                            <li>Jumat <span>8.00 - 18.30</span></li>
                            <li>Sabtu <span>9.30 - 17.00</span></li>
                            <li>Minggu <span>9.30 - 15.00</span></li>
                        </ul>
                    </div>

                    <div class="emergency-box">
                        <h2 class="d-flex align-items-center">Darurat</h2>

                        <div class="call-btn text-center">
                            <a class="d-flex justify-content-center align-items-center button gradient-bg" href="#"><img src="<?php echo base_url()?>assets/frontend/images/emergency-call.png"> +34 586 778 8892</a>
                        </div>

                        <p>Hubungi Nomor diatas jika dalam kondisi kritis atau darurat</p>
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

                            
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Info Kontak</h2>

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