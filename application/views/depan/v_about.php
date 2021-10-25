<!DOCTYPE >
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forum Riyadi Bersaudara</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon2-01.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone" style="color: aqua;"></span><a  href="tel:08129292929">08129292929</a>
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open" style="color: aqua;"></span><a  href="mailto:forindra@gmail.com">forindra@gmail.com</a>
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin" style="color: aqua;"></span><a href="https://www.google.com/maps/place/Universitas+Gunadarma/@-6.3686382,106.8312514,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ec0846d18769:0x87eb6f64d1a8a3b2!8m2!3d-6.3686382!4d106.8334401">Jl.Margonda Raya 100, INA. 11001</a>
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="300px;" height="50px;" src="<?php echo base_url().'theme/images/logo2.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">About</a>
                                </li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="<?php echo site_url('about');?>">Organisasi</a>
                                     <a class="dropdown-item" href="<?php echo site_url('guru');?>">Anggota</a>
                                     <div class="dropdown-divider"></div>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kegiatan
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="<?php echo site_url('pengumuman');?>">Organisasi</a>
                                     <a class="dropdown-item" href="<?php echo site_url('agenda');?>">Agenda</a>
                                     <div class="dropdown-divider"></div>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Berita</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">UMKM</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Galeri</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                                </li> -->

                                <form action="<?= site_url('home/cari'); ?>" method="GET" class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                                </li>
                                <!-- <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('admin/register');?>">Registrasi</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('admin/login');?>">Login</a>
                                </li>
                                <!-- <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo site_url('admin/login');?>">Login</a> -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
      <section>
</section>
<!--//END HEADER -->
<!--//END ABOUT IMAGE -->
<!--============================= WELCOME TITLE =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>Profile Forindra</h2>
                <p>Dimulai dengan pertemanan 3 teman sahabat. (Agung, Agus, dan Edo) Agung berinisiatif membangun komunitas  yang semua
                anggotanya memiliki unsur nama "RIYADI", gagasan tersebut pun di sambut positif oleh Agus dan Edo melalui akun grup facebook.
                <br>
                </p>
                <p>Dengan semangat tiga sahabat ini mulai menuangkan ide, saran, dan perencanaan pembentukan komunitas Forum Riyadi Indonesia Bersaudara.
                melalui media sosial  Facebook.
                tiga sahabat ini belum pernah bertatap muka dan berkomunikasi setiap harinya hanya melalui jaringan facebook.
                </p>
                <h2>Visi</h2>
                <p>Sebagai bagian komponen masyarakat Indonesia yang dapat meningkatkan persatuan dan kesatuan bangsa, Menjunjung tinggi nilai-nilai
                Persaudaraan dan Silaturahmi serta menjadi masyarakat yang peduli terhadap lingkungan, sosial, budaya, pendidikan, ekonomi dan bermanfaat
                bagi masyarakat maupun anggota tanpa membedakan suku, agama, ras dan golongan.</p>
                <h2>Misi</h2>
                <p>- Meningkatkan persatuan dan kesatuan bangsa melalui jalinan silaturahmi yang erat antar anggota.
    - Sebagai ajang pertukaran informasi dan sarana saling tolong menolong antar anggota dengan semangat persaudaraan.
    - Menciptakan system ekonomi mandiri yang saling menguntungkan antar anggota.
    - Membentuk jiwa solidaritas tinggi, memiliki rasa peduli, tanggung jawab, giat, tekun, pantang menyerah, sabar dan serius.
    - Meningkatkan kepedulian terhadap lingkungan hidup dan sesama manusia hingga tercipta sesuatu yang bermanfaat bagi anggota pada khususnya dan masyarakat pada umumnya.
    - Menjunjung tinggi prilaku yang berbudaya Indonesia, serta akhlak yang baik sesuai tuntunan hidup beragama.
    - Melestarikan nama “Riyadi” pada Generasi mendatang</p>
                </div>
                <div class="col-md-5">
                    <img src="<?php echo base_url().'theme/images/welcome-img.jpg'?>" class="img-fluid" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->
    <!--============================= TESTIMONIAL =============================-->
    <!-- <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Testimonial</h2>
                </div>
                <div class="col-md-12">
                    <div class="single-item">
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">MSCHOOL benar-benar mengagumkan. Saya sangat senang bisa bergabung dengan MSCHOOL dan menjadi siswa terbaik tahun 2018.</p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-1.png'?>" class="img-fluid" alt="#">
                                <p><span>Hernandez Alvaro</span>Siswa Terbaik 2018</p>
                            </div>
                        </div>
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">MSCHOOL benar-benar mengagumkan. Saya sangat senang bisa bergabung dengan MSCHOOL dan menjadi siswa terbaik tahun 2017. </p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-2.png'?>" class="img-fluid" alt="#">
                                <p><span>Elanoar Rigby</span>Siswa Terbaik 2017</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--//END TESTIMONIAL -->
<!--============================= DETAILED CHART =============================-->
<!-- <div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_1.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_guru;?></span> Berita
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_siswa;?></span> Anggota
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_3.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_files;?></span> Download
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_4.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_agenda;?></span> Agenda</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--//END DETAILED CHART -->
<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <iframe style="margin-top: 60px; " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1962923730835!2d106.83125141476985!3d-6.368638195391543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec0846d18769%3A0x87eb6f64d1a8a3b2!2sGunadarma%20University%20Campus%20D!5e0!3m2!1sen!2sid!4v1585167439829!5m2!1sen!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
                <div class="col-md-3">
                    <div class="sitemap" style="float:right">
                        <h3>Menu</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">Profile</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Berita </a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="sitemap" style="margin-left: 80px;">
                      <h3>Sitemap</h3>
                      <ul>
                          <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                          <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span>  Jl. Margonda Raya No.100, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424</p>
                        <p>Email : Forindra@gmail.com
                            <br> Phone : 0812 9292 0929</p>
                            <ul class="footer-social-icons">
                                <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr style="margin-top: 30px;">
                <p align="center" style="color: #ccc; margin-top:30px; margin-bottom:-50px;">copyright <a style="color:cornflowerblue">Forindra</a> © <?php echo date('Y');?> by <a style="color:cornflowerblue;" href="https://www.linkedin.com/in/eka-nugroho-70935a153/" target="_blank">M Eka Nugroho</a>. All rights reserved.</p>
            </div>
        </footer>
        <!--//END FOOTER -->
                <!-- jQuery, Bootstrap JS. -->
                <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
                <!-- Plugins -->
                <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
                <!-- Subscribe -->
                <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
                <!-- Script JS -->
                <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
            </body>

            </html>
