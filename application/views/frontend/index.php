<!DOCTYPE html>
<html lang="en">
<head>
    <title>Klinik Pintar </title>

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
    <script src="<?php echo base_url()?>assets/frontend/js/custom.js"></script>
</head>
<body>
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
                                <li class="current-menu-item"><a href="<?php echo base_url()?>Main/index">Beranda</a></li>
                                <li><a href="<?php echo base_url()?>Main/aboutpage">Tentang Kami</a></li>
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

        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('<?php echo base_url()?>assets/frontend/images/hero.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Pelayanan Kesehatan<br>Terbaik</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Kami memilliki banyak fasilitas dan memiliki banyak fitur <br>yang sangat membantu pelayanan anda</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <a href="#" class="button gradient-bg">Baca Selanjutnya</a>
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->

                <div class="swiper-slide hero-content-wrap" style="background-image: url('<?php echo base_url()?>assets/frontend/images/about-bg.png')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Dokter yang<br>ahli dan handal</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4"></p>
                                    <p>Dokter dokter kami adalah dokter pilihan yang <br>handal dibidangnya
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <a href="#" class="button gradient-bg">Read More</a>
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->

                <div class="swiper-slide hero-content-wrap" style="background-image: url('<?php echo base_url()?>assets/frontend/images/hero.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Fasilitas yang memadai</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Dengan adanya fasilitas yang memadai dari kami <br>menunjang proses pengobatan</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <a href="#" class="button gradient-bg">Read More</a>
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
            </div><!-- .swiper-wrapper -->

            <div class="pagination-wrap position-absolute w-100">
                <div class="swiper-pagination d-flex flex-row flex-md-column"></div>
            </div><!-- .pagination-wrap -->
        </div><!-- .hero-slider -->
    </header><!-- .site-header -->


    <div class="our-departments">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-departments-wrap">
                        <h2>Departemen Kami</h2>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url()?>assets/frontend/images/cardiogram.png" alt="">

                                        <h3>Kardiologi</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Kami memiliki departemen spesialis yang menangani berbagai masalah jantung dan sistem pembuluh darah penopangnya.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url()?>assets/frontend/images/stomach-2.png" alt="">

                                        <h3>Gastrologi</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Kami memiliki departemen spesialis yang menangani berbagai penyakit pada sistem pencernaan anatomis dan faali.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url()?>assets/frontend/images/blood-sample-2.png" alt="">

                                        <h3>Lab Kesehatan</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Laboratorium kesehatan kami menggunakan fasilitas yang handal untuk menunjang pengobatan</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url()?>assets/frontend/images/teeth.png" alt="">

                                        <h3>Perawatan Gigi</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Kami memiliki departemen spesialis yang menangani berbagai masalah kesehatan gigi dan mulut.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url()?>assets/frontend/images/stretcher.png" alt="">

                                        <h3>Operasi</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Kami memiliki departemen yang menangani berbagai operasi kesehatan</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url()?>assets/frontend/images/scanner.png" alt="">

                                        <h3>Neurologi</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Kami memiliki departemen spesialis yang menangani berbagai permasalahan saraf</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-md-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url()?>assets/frontend/images/bones.png" alt="">

                                        <h3>Ortopedi</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Kami memiliki departemen spesialis yang menangani berbagai penyait atau cedera yang terjadi pada sistem gerak tubuh</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-lg-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url()?>assets/frontend/images/blood-donation-2.png" alt="">

                                        <h3>Pediatri</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Kami memiliki departemen spesialis yang menangani kesehatan bayi dan anak</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url()?>assets/frontend/images/glasses.png" alt="">

                                        <h3>Oftalmology</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Kami memiliki departemen spesialis yang menangani pencegahan dari kerusakan,cedera dan penyakit mata</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Testimoni</h2>
                </div>
            </div>
        </div>

        <!-- Swiper -->
        <div class="testimonial-slider">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="testimonial-bg-shape">
                            <div class="swiper-container testimonial-slider-wrap">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Setelah saya pergi ke Klinik Pintar, minus mata saya makin lama makin berkurang, makasia Klinik Pintar.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="<?php echo base_url()?>assets/frontend/images/imam.jpg" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Imam PDS <span>Universitas Sumatera Utara</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Setelah saya pergi ke Klinik Pintar, minus mata saya makin lama makin berkurang, makasia Klinik Pintar.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="<?php echo base_url()?>assets/frontend/images/imam.jpg" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Imam PDS <span>Universitas Sumatera Utara</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Setelah saya pergi ke Klinik Pintar, minus mata saya makin lama makin berkurang, makasia Klinik Pintar.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="<?php echo base_url()?>assets/frontend/images/imam.jpg" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Imam PDS <span>Universitas Sumatera Utara</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Setelah saya pergi ke Klinik Pintar, minus mata saya makin lama makin berkurang, makasia Klinik Pintar.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="<?php echo base_url()?>assets/frontend/images/imam.jpg" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Imam PDS <span>Universitas Sumatera Utara</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->
                                </div><!-- .swiper-wrapper -->

                                <div class="swiper-pagination-wrap">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="swiper-pagination position-relative flex justify-content-center align-items-center"></div>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .container -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .testimonial-slider -->
    </section><!-- .testimonial-section -->

    

    
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