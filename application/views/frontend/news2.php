<!DOCTYPE html>
<html lang="en">
<head>

    <title>KlinikPintar</title>

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
                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="<?php echo base_url()?>Main/detailpage5"><img src="<?php echo base_url()?>assets/frontend/images/cabai.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Cabai Bisa Jadi Terobosan Baru Pengobatan Kanker</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">12 Desember 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Rezky Purnama</a></div>

                                        <div class="post-comments"><a href="#">22 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Kanker masih menjadi ancaman menakutkan bagi penduduk dunia. Tidak sedikit yang menganggap kanker sebagai vonis kematian. Namun sebuah studi terbaru yang diterbitkan di Journal of Physical Chemistry B, menyebut cabai bisa jadi solusi pengobatan kanker.</p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="<?php echo base_url()?>Main/detailpage5">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="<?php echo base_url()?>Main/detailpage6"><img src="<?php echo base_url()?>assets/frontend/images/hiv.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Ilmuwan Tiongkok Ciptakan DNA Bayi yang Tahan dengan Virus HIV</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">13 Desember 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Ananda Sinaga</a></div>

                                        <div class="post-comments"><a href="#">13 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Seorang ilmuwan dari Tiongkok, belum lama ini mengklaim telah menciptakan bayi-bayi pertama melalui rekayasa genetika.

                                    He Jiankui, ilmuwan University of Science and Technology of China di Shenzhen itu, mengklaim telah mengubah DNA anak perempuan kembar untuk mencegah masuknya infeksi HIV di masa depan.</p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="<?php echo base_url()?>Main/detailpage6">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="pagination d-flex flex-wrap align-items-center p-0">
                                <li> <a href="news.php">01</a></li>
                                <li class="active"><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                            </ul>
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
                                    <h3 class="entry-title"><a href="detail4.php">Nanorobot Asal Cina Mampu Mengecilkan Tumor</a></h3>

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
                                    <h3 class="entry-title"><a href="detail6.php">Ilmuwan Tiongkok Ciptakan DNA Bayi yang Tahan dengan Virus HIV</a></h3>

                                    <div class="posted-date">13 Desember 2018</div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .cat-links -->


                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Opening Hours</h2>

                        <ul class="p-0 m-0">
                            <li>Monday - Thursday <span>8.00 - 19.00</span></li>
                            <li>Friday <span>8.00 - 18.30</span></li>
                            <li>Saturday <span>9.30 - 17.00</span></li>
                            <li>Sunday <span>9.30 - 15.00</span></li>
                        </ul>
                    </div>

                    <div class="emergency-box">
                        <h2 class="d-flex align-items-center">Emergency</h2>

                        <div class="call-btn text-center">
                            <a class="d-flex justify-content-center align-items-center button gradient-bg" href="#"><img src="<?php echo base_url()?>assets/frontend/images/emergency-call.png"> +34 586 778 8892</a>
                        </div>

                        <p>Hubungi nomor diatas jika dalam kondisi darurat atau kritis</p>
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
                            <h2>Contact</h2>

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