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
        <a href="/"><img src="{{asset('assets/img/logokerjasama.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block" >
        <ul>
          <li class="active"><a href="/" style="color:blue;">Home</a></li>
          <li><a href="#services" style="color:blue;">Program</a></li>
          <li><a href="#faq" style="color:blue;">Kerjasama</a></li>
          <li><a href="#team"style="color:blue;">Panitia</a></li>
<!--          <li><a href="#about">Tentang Kami</a></li> -->
		  <li><a href="#contact" style="color:blue;">FAQ</a></li>
		   <!-- Tautan Dropdown "Kontak Kami" -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:blue;">Kontak Kami <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <!-- Opsi "Hubungi via Email" -->
                    <li><a href="#" onclick="contactViaEmail()" style="color:blue;">Hubungi via Email</a></li>
                    <!-- Opsi "Hubungi via WhatsApp" -->
                    <li><a href="#" onclick="contactViaWhatsApp()" style="color:blue;">Hubungi via WhatsApp</a></li>
                    <li><a href="#" onclick="sosmedInstagram()" style="color:blue;">Sosial Media</a></li>
                </ul>
            </li>
		      <li><a href="/galeri" style="color:blue;">Galeri</a></li>
          <li><a href="#pendaftaran" style="color:blue;"> Pendaftaran</a></li>
        </ul>
            
      </nav><!-- .nav-menu -->

    <!-- JavaScript untuk menangani opsi dropdown -->
    <script>
        $(document).ready(function(){
    $('.dropdown-toggle').dropdown();
});

        // Fungsi untuk menghubungi via email
        function contactViaEmail() {
            // Gantikan tautan dengan tautan email Anda
            window.location.href = "mailto:kwp.dtb@gmail.com";
        }

        // Fungsi untuk menghubungi via WhatsApp
        function contactViaWhatsApp() {
            // Bitly link for WhatsApp
            var whatsappLink = "https://bit.ly/wag-kwptoba";
            // Open the Bitly link in a new window
            window.open(whatsappLink);
        }
        function sosmedInstagram(){
            var sosmedIgLink = "https://www.instagram.com/kwpdanautoba/";
            window.open(sosmedIgLink);
        }
    </script>
    </div>
  </header><!-- End #header -->