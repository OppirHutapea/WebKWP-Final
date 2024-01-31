<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css')}}">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>KwP</title>
  <meta name="author" content="Velile Vamba">
  <meta content="" name="lorem100">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/free.min.css">
<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/brand.min.css">
<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/flag.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
	<style type="text/css">
		.carousel-item {
		  height: 60vh;
		  min-height: 350px;
		  background: no-repeat center center scroll;
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}

    .main {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.main .wrap {
  margin: 2rem;

  transform-style: preserve-3d;
  transform: perspective(100rem);

  cursor: pointer;
}

.main .container {
  --rX: 0;
  --rY: 0;
  --bX: 50%;
  --bY: 80%;

 
  border: 1px solid var(--background-color);
  border-radius: 1.6rem;
  padding: 4rem;

  display: flex;
  align-items: flex-end;

  position: relative;
  transform: rotateX(calc(var(--rX) * 1deg)) rotateY(calc(var(--rY) * 1deg));

  background: linear-gradient(hsla(0, 0%, 100%, .1), hsla(32, 57, 84));
  background-position: var(--bX) var(--bY);
  background-size: 40rem auto;
  box-shadow: 0 0 3rem .5rem hsla(0, 0%, 0%);

  transition: transform .6s 1s;
}

.main .container::before,
.main .container::after {
  content: "";

  width: 2rem;
  height: 2rem;
  border: 1px solid #fff;

  position: absolute;
  z-index: 2;

  opacity: .6;
  transition: .3s;
}

.main .container::before {
  top: 2rem;
  right: 2rem;

  border-bottom-width: 0;
  border-left-width: 0;
}

.main .container::after {
  bottom: 2rem;
  left: 2rem;

  border-top-width: 0;
  border-right-width: 0;
}

.main .container--active {
  transition: none;
}

.main .container--2 {
  filter: hue-rotate(80deg) saturate(140%);
}

.main .container--3 {
  filter: hue-rotate(160deg) saturate(140%);
}

.main .container p {
  color: hsla(0, 0%, 100%, .6);
  font-size: 0.8rem;
  text-align: left;
}

.main .wrap:hover .container::before,
.main .wrap:hover .container::after {
  width: calc(100% - 4rem);
  height: calc(100% - 4rem);
}

.main .abs-site-link {
  position: fixed;
  bottom: 20px;
  left: 20px;
  color: hsla(0, 0%, 0%);
  font-size: 1.6rem;
} 

/*****************************************/
.solutions {
  /* The image used */
  background-image: url(assets/img/slider-2.jpg);

  /* Set a specific height */
  min-height: 500px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.solutions .wrapper{
  width: 100%;
  max-width: 100%;
  margin: auto;
}

.solutions h1{
  color: #fff;
  font-weight: normal;
  text-align: center;
  font-size: 48px;
}

.solutions .panels{
  list-style-type: none;
  padding: 0;
}

.solutions .panels li{

  margin: 0;
  display: block;
  box-sizing: border-box;
  float: left;
}

.solutions .panels li div{
  padding: 10% 0;
  text-align: center;
  color: #fff;
  font-size: 11px;
  letter-spacing: 2px;
  cursor: pointer;
  height: 50vh;
}

/*// ANIMATION STYLES //*/

.solutions .panels div.back {
  transform: rotateY(90deg);
}

.solutions .panels div.front {
  position: absolute;
}

.solutions .panels li:hover div.front {
  animation: twirl 0.2s ease-in forwards;
}
.solutions .panels li:hover div.back {
  animation: twirl 0.2s 0.2s ease-out forwards reverse;
}

@keyframes twirl {
  0%{ transform: rotateY(0deg)}
  100% {transform: rotateY(90deg)}
}

.why-us {
  /* The image used */
  background-image: url(assets/img/slider-2.jpg);

  /* Set a specific height */
  min-height: 350px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

	</style>
</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        
        <!-- <h1 class="text-light"><a href="index.html"><span>Our-Compnay Associate</span></a></h1> -->
        <a href="#faq"><img src="{{asset('assets/img/logo_bersama.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Program</a></li>
          <li><a href="#faq">Kerjasama</a></li>
          <li><a href="#team">Panitia</a></li>
		      <li><a href="#contact">F&Q</a></li>
          <li><a href="#pendaftaran"> Pendaftaran</a></li>
        </ul>
            
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section >
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url(assets/img/footer-bg.png)">
          <div class="carousel-caption">
            <h2 class="display-4">Peningkatan Kapasitas Kewirausahaan Pemuda</h2>
            <p class="lead">Pemuda Berdaya, Menuju Berdikari: Meningkatkan Kapasitas dan Kemandirian Wirausaha Pemuda di Kawasan Danau Toba</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url(assets/img/slider-2.jpg)">
          <div class="carousel-caption ">
            <h2 class="display-4">Wirausaha Pemuda</h2>
            <p class="lead">Pemuda Berdaya, Menuju Berdikari</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url(assets/img/slider-2.jpg)">
          <div class="carousel-caption covid-block">
            <h2 class="display-4">Program Peningkatan Kapasitas Kewirausahaan Pemuda</h2>
            <p class="lead" >Pemuda Berdaya: Menuju Berdikari, Mengukir Kemandirian Wirausaha Pemuda di Destinasi Pariwisata Danau Toba</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
  </section><!-- #hero -->
  

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/Business.PNG" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
            <h3>Program Kolaborasi dan Kerjasama antara:</h3>
            <p class="">
              Kementerian Koordinator Bidang Pembangunan Manusia dan Kebudayaan
            </p>
            <p>
              Friedrich Ebert Stiftung (FES) Indonesia
            </p>
            <p>
              Institut Teknologi Del
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h1>Program</h1>
          <p>
            Maksud diselenggarakan Program Peningkatan Kapasitas Kewirausahaan Pemuda di Kawasan Destinasi Danau Toba adalah untuk menggali, 
            mengembangkan, dan memajukan potensi kewirausahaan pemuda di Kawasan Danau Toba melalui 
            intervensi kegiatan peningkatan kapasitas usaha, serta pemahaman mendalam akan peran sentral pemuda sebagai penggerak ekonomi.
          </p>
        </div>
        <h4>Tujuan</h4>
        <ol>
          <li>
            Meningkatkan kapasitas kewirausahaan pemuda di Kawasan Danau Toba, mencakup keterampilan 
            manajerial, inovasi, pemasaran, dan aspek-aspek lain yang diperlukan untuk sukses berwirausaha.
          </li>
          <li>
            Mendorong pemuda untuk menjadi agen perubahan pembangunan ekonomi lokal, mengukir kemandirian, dan menjadi pionir wirausaha di Danau Toba.
          </li>
          <li>
            Memberdayakan ekonomi lokal melalui kreativitas dan inovasi pemuda di Kawasan Danau Toba, sehingga potensi pariwisata tidak hanya dinikmati, 
            tetapi juga memberikan dampak positif pada tingkat penghidupan masyarakat setempat.
          </li>
          <li>
            Mengurangi tingkat pengangguran pemuda di Kawasan Danau Toba dengan memberikan pelatihan, 
            dukungan, dan peluang wirausaha, sehingga pemuda dapat aktif berkontribusi dalam pembangunan ekonomi.
          </li>
          <li>
            Membangun kolaborasi yang kuat antara pemerintah, lembaga non-pemerintah, lembaga pendidikan, 
            lembaga swasta untuk mendukung dan menciptakan sinergi dalam pengembangan kewirausahaan pemuda.
          </li>
        </ol>
        <h4>Luaran Akhir Program</h4>
        <p>
          20 wirausaha pemuda di Kawasan Danau Toba yang akan mendapatkan pelatihan dan pendampingan intensif selama 5 bulan untuk mengembangkan produk (barang atau jasa).
        </p>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section class="call-to-action">
      <div class="container">
        
        <div class="text-center">
          
        <div class="section-title">
          <h2 style="color: #fff;">Our approach</h2>
        </div>

          <p>
            Program Peningkatan Kapasitas Kewirausahaan Pemuda di Kawasan Danau Toba, Sumatera Utara adalah program 
            kerjasama antara Friedrich-Ebert-Stiftung (FES) Indonesia 
            dengan Kementerian Koordinator Bidang Pembangunan Manusia dan Kebudayaan (Kemenko PMK) dengan Institut Teknologi Del (IT Del).
          </p>

<div class="container-fluid">
  <div class="col-md-12">
      <div class="row main">
          <div class="wrap wrap--3 col-md-3">
            <h6 style="color: #fff; text-align: left;">Maksud </h6>
              <div class="container container--3 ">
                  <p>
                    Maksud diselenggarakan Program Peningkatan Kapasitas Kewirausahaan Pemuda di Kawasan Destinasi Danau Toba adalah untuk menggali, 
                    mengembangkan, dan memajukan potensi kewirausahaan pemuda di Kawasan Danau Toba
                  </p>
              </div>
            </div>
          
            <div class="wrap wrap--3  col-md-3">
              <h6 style="color: #fff; text-align: left;">Tujuan</h6>
              <div class="container container--3 ">
                <p>
                  Maksud diselenggarakan Program Peningkatan Kapasitas Kewirausahaan Pemuda di Kawasan Destinasi Danau Toba adalah untuk menggali, 
                  mengembangkan, dan memajukan potensi kewirausahaan pemuda di Kawasan Danau Toba
                </p>
              </div>
            </div>
          
            <div class="wrap wrap--3 col-md-3">
              <h6 style="color: #fff; text-align: left;">Luaran</h6>
              <div class="container container--3 ">
                <p>
                  Maksud diselenggarakan Program Peningkatan Kapasitas Kewirausahaan Pemuda di Kawasan Destinasi Danau Toba adalah untuk menggali, 
                  mengembangkan, dan memajukan potensi kewirausahaan pemuda di Kawasan Danau Toba
                </p>
            
              </div>
            </div>
          
      </div>
  </div>
</div>
        </div>
      </div>
    </section><!-- End Call To Action Section -->

    

    <!-- ======= Frequently Asked Questions Section ======= -->

    <section id="faq" class="solutions">
      <div class="wrapper">
        <h1>Program Kerjasama </h1>
        <ul class="panels">
          <div class="row">
          <li class="col-md-4">
            <div class="front" style="background: #203954">
              <h6>Kementerian Koordinator Bidang Pembangunan Manusia dan Kebudayaan </h6>
              <p>
                <img src="assets/img/LogoKementerian.png" class="rounded " width="100"  height="100" alt="...">
              </p>
            </div>
            <div class="back" style="background: #020a20">
              <h6>Deskripsi Tentang : </h6>
            <p>
              Kementerian Koordinator Bidang Pembangunan Manusia dan Kebudayaan
            </p>
            </div>
          </li>
          <li class="col-md-4">
            <div class="front" style="background: #203954">
              <h6>Kementerian Koordinator Bidang Pembangunan Manusia dan Kebudayaan </h6>
              <p>
                <img src="assets/img/FES.png" class="rounded " width="100"  height="100" alt="...">
              </p>
            </div>
            <div class="back" style="background: #020a20">
              <h6>sdsdsds</h6>
            <p>
              dskasdlksdasd
            </p>
            </div>
          </li>
          <li class="col-md-4">
            <div class="front" style="background: #203954">
              <h6>Kementerian Koordinator Bidang Pembangunan Manusia dan Kebudayaan </h6>
              <p>
                <img src="assets/img/ITDEL.png" class="rounded " width="100"  height="100" alt="...">
              </p>
            </div>
            <div class="back" style="background: #020a20">
              <h6>sdsdsds</h6>
            <p>
              dskasdlksdasd
            </p>
            </div>
          </li>
        </div>
        
         
        </ul>
      </div>
    </section>
<!-- End Frequently Asked Questions Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" style="text-align: center;">
        <div class="section-title">
          <h2>Panitia</h2>
          <div class="about-section">
            <p>Deskripsi Singkat</p>
          </div>
          
          <h2 style="text-align:center">Our Team</h2>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="assets/img/LogoKementerian.png" alt="Jane" style="width:100%">
                <div class="container">
                  <h2>Oppir Hutapea</h2>
                  <p class="title">Mentor</p>
                  <p>Semangat</p>
                  <p>oppir@gmail.com</p>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="assets/img/LogoKementerian.png" alt="Mike" style="width:100%">
                <div class="container">
                  <h2>Oppir Hutapea</h2>
                  <p class="title">Mentor</p>
                  <p>Semangat</p>
                  <p>oppir@gmail.com</p>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="assets/img/ITDEL.png" alt="John" style="width:100%">
                <div class="container">
                  <h2>Oppir Hutapea</h2>
                  <p class="title">Mentor</p>
                  <p>Semangat</p>
                  <p>oppir@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="assets/img/oppir.png" alt="Jane" style="width:100%">
                <div class="container">
                  <h2>Oppir Hutapea</h2>
                  <p class="title">Mentor</p>
                  <p>Semangat</p>
                  <p>oppir@gmail.com</p>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="assets/img/oppir.png" alt="Mike" style="width:100%">
                <div class="container">
                  <h2>Oppir Hutapea</h2>
                  <p class="title">Mentor</p>
                  <p>Semangat</p>
                  <p>oppir@gmail.com</p>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="assets/img/oppir.png" alt="John" style="width:100%">
                <div class="container">
                  <h2>Oppir Hutapea</h2>
                  <p class="title">Mentor</p>
                  <p>Semangat</p>
                  <p>oppir@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Our Team Section -->

    <section id="pendaftaran" class="why-us" style="color: #fff;">
      <div class="container" style="text-align: center;">
        <div class="section-title">
          <h2 style=" color: #fff;">Cara Pendaftaran</h2>
          <p>
            Dengan menargetkan peserta yang telah memiliki usaha berjalan dan memenuhi kriteria spesifik di atas, program ini bertujuan memberikan dukungan 
            yang lebih terfokus dan relevan sesuai dengan tingkat pengembangan usaha masing-masing peserta.
            Program ini diharapkan dapat menjadi katalisator bagi pertumbuhan dan kemandirian wirausaha pemuda di Danau Toba.
          </p>
          <div class="text-center">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <a href="https://forms.gle/WtMBkFbgWgqTipHs9/" target="_blank">Silahkan Klik Tautan berikut untuk mendaftar</a> </button>
          </div>
        </div>
      </div>
    </section><!-- End of Pendaftaran -->

    <!-- F&Q -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2> F & Q</h2>
        </div>
        <section class="container my-5" id="maincontent">
          <section id="accordion">
            <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-17" aria-expanded="false" data-toggle="collapse" href="#faq-17" role="button">
              <div class="position-relative">
                <h2 class="h4 m-0 pr-3">
                  Apa saja kriteria untuk memastikan bahwa pemuda dan wirausaha yang 
                  diusulkan sesuai dengan kriteria yang diharapkan penyelenggara?
                </h2>
                <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
                  <i class="fa fa-plus"></i>
                </div>
              </div>
            </a>
            <div class="collapse" id="faq-17" style="">
              <div class="card card-body border-0 p-0">
                <p>
                  <ul>
                    <li>Seleksi Administrasi</li>
                    <li>Seleksi Substantif</li>
                    <li>Seleksi Presentasi dan Wawancara</li>
                    <li>Pengumuman Peserta Terseleksi</li>
                  </ul>  
                </p>
      
              </div>
            </div>
      
            <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-18" aria-expanded="false" data-toggle="collapse" href="#faq-18" role="button">
              <div class="position-relative">
                <h2 class="h4 m-0 pr-3">
                  Berapa lama waktu yang dibutuhkan untuk pendampingan dan pelatihan?
                </h2>
                <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
                  <i class="fa fa-plus"></i>
                </div>
              </div>
            </a>
            <div class="collapse" id="faq-18" style="">
              <div class="card card-body border-0 p-0">
                <p>Kurang Lebih 8 Bulan</p>
                <p>
                </p>
              </div>
            </div>
      
            <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-19" aria-expanded="false" data-toggle="collapse" href="#faq-19" role="button">
              <div class="position-relative">
                <h2 class="h4 m-0 pr-3">
                  Apa luaran dari program ini?
                </h2>
                <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
                  <i class="fa fa-plus"></i>
                </div>
              </div>
            </a>
            <div class="collapse" id="faq-19" style="">
              <div class="card card-body border-0 p-0">
                <p>
                  Luaran akhir program ini adalah terdapat 20 wirausaha pemuda
                   di Kawasan Danau Toba yang akan mendapatkan pelatihan dan pendampingan
                   intensif selama 5 bulan untuk mengembangkan produk (barang atau jasa)!</p>
                <p>
                </p>
              </div>
            </div>
      
            <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-20" aria-expanded="false" data-toggle="collapse" href="#faq-20" role="button">
              <div class="position-relative">
                <h2 class="h4 m-0 pr-3">
                  Seperti apa target peserta yang menjadi sasaran?
                </h2>
                <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
                  <i class="fa fa-plus"></i>
                </div>
              </div>
            </a>
            <div class="collapse" id="faq-20">
              <div class="card card-body border-0 p-0">
                <p>
                  <ul>
                    <li>
                      Pemuda (usia 22-35 tahun) yang memiliki usaha berjalan minimal 6 Bulan.
                    </li>
                    <li>
                      Memiliki Usaha Jasa atau Produk Inovatif dan Kreatif.
                    </li>
                    <li>
                      Lokasi Usaha di Kawasan Danau Toba: Kabupaten Toba, Samosir, Karo,
                       Tapanuli Utara, Simalungun, Humbanghasundutan, Dairi, dan Pakpak Bharat.
                    </li>
                    <li>
                      Bersedia dan berkomitmen mengikuti rangkaian kegiatan Menuju Berdikari.
                    </li>
                  </ul>
                </p>
                <p>
                </p>
              </div>
            </div>
          </section>
        </section>
      </div>
    </section>
    
    <!-- ======= Map Section ======= -->
    <section class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15945.469382960306!2d99.1486328!3d2.3832152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1706590349849!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Website KwP</span></strong>. Team
      </div>
      
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>