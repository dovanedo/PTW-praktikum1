<!DOCTYPE html>
<!--
	Delex by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8"/>

  <!-- Site Title-->
  <title>@yield('title', config("app.name"))</title>

  <!-- Mobile Specific Metas-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

  <!-- Google-fonts -->
  <link href='http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css'>
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}"/>
  <!-- Fonts-style -->
  <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}"/>
  <!-- Fonts-style -->
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}"/>
  <!-- Modal-Effect -->
  <link href="css/component.css" rel="stylesheet">
  <!-- owl-carousel -->
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
  <!-- Template Styles-->
  <link rel="stylesheet" href="css/style.css"/>
  <!-- Template Color-->
  <link rel="stylesheet" type="text/css" href="css/green.css" media="screen" id="color-opt" />



</head>

<body data-spy="scroll" data-offset="80">

  <!-- Preloader -->
  <div class="animationload">
    <div class="loader">
        Please Wait....
    </div>
  </div> 
  <!-- End Preloader -->


  <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">ERFLOG</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home">Home</a></li>
          <li><a href="#article">Article</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>

    <!-- /HOME -->
    <section class="main-home" id="home">
      <div class="home-page-photo"></div> <!-- Background image -->
      <div class="home__header-content">
        <div id="main-home-carousel" class="owl-carousel">
          <div>
            <h1 class="intro-title">Laravel</h1>
            <p class="intro-text">Laravel adalah satu-satunya framework yang membantu Anda <br/>  untuk memaksimalkan penggunaan PHP di dalam proses pengembangan website.</p>
          </div><!--slide item like paragraph-->

          <div>
            <h1 class="intro-title">PHP</h1>
            <p class="intro-text">PHP adalah sebuah bahasa pemrograman server side scripting <br/>  yang bersifat open source.</p>
          </div><!--slide item like paragraph-->

          <div>
            <h1 class="intro-title">Framework</h1>
            <p class="intro-text">Framework adalah seperangkat struktur dan pedoman konseptual, <br/>  yang digunakan untuk membangun sesuatu yang bermanfaat.</p>
          </div><!--slide item like paragraph-->
        </div>
      </div>
    </section>
    <!-- /End HOME -->

    <!-- / ARTICLE -->
    <section id="article">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title text-center">Article</h2>
            <div class="titleHR"><span></span></div>
          </div>
        </div>

        <h1>LARAVEL</h1>  
        <p>Laravel adalah satu-satunya framework yang membantu Anda untuk memaksimalkan penggunaan PHP di dalam proses pengembangan website. 

PHP menjadi bahasa pemrograman yang sangat dinamis, tapi semenjak adanya Laravel, dia menjadi lebih powerful, cepat, aman, dan simpel. Setiap rilis versi terbaru, Laravel  selalu memunculkan teknologi baru di antara framework PHP lainnya. Laravel diluncurkan sejak tahun 2011 dan mengalami pertumbuhan yang cukup eksponensial. Di tahun 2015, Laravel adalah framework yang paling banyak mendapatkan bintang di Github. Sekarang framework ini menjadi salah satu yang populer di dunia, tidak terkecuali di Indonesia. 

Laravel fokus di bagian end-user, yang berarti fokus pada kejelasan dan kesederhanaan, baik penulisan maupun tampilan, serta menghasilkan fungsionalitas aplikasi web yang bekerja sebagaimana mestinya. Hal ini membuat developer maupun perusahaan menggunakan framework ini untuk membangun apa pun, mulai dari proyek kecil hingga skala perusahaan kelas atas.

Laravel mengubah pengembangan website menjadi lebih elegan, ekspresif, dan menyenangkan, sesuai dengan jargonnya “The PHP Framework For Web Artisans”. Selain itu, Laravel juga mempermudah proses pengembangan website dengan bantuan beberapa fitur unggulan, seperti Template Engine, Routing, dan Modularity.</p>

        <div class="row">

    <!-- CONTACT -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">Profile</h3>
            <div class="titleHR"><span></span></div>

            <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="{{ URL::asset('images/profile.jpg') }}" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3>Dovan Edo Aji Pratama</h3>
        <em>1461900047</em>
		</center>

          </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
      </div> <!-- container -->
    </section>
    <!-- End CONTACT -->

    <!-- FOOTER begings -->
    <footer id="footer">    
      <div class="footer-widgets-wrap">
        <div class="container text-center">    
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>KEEP IN TOUCH</h4>
                <div class="footer-socials">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div> <!-- end footer-content -->
            </div> <!-- end col-sm-4 -->
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>ADDRESS</h4>
                <p>Jl. Kalibader<br>
                Korlap 3, Taman, Sidoarjo</p>
                <p>+6282832597145<br>
                <a href="#">www.erflog.com</a><br>
                info@erflog.com</p>
              </div> <!-- end footer-content -->
            </div> <!-- end col-sm-4 -->
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>SUPPORT</h4>
                <p>Anda butuh dukungan? Kunjungi forum dukungan kami dan buka tiket untuk pertanyaan Anda.</p>
                <p><button type="button" class="btn btn-custom-sm">forum</button></p>
              </div>  <!-- end footer-content -->   
            </div> <!-- end col-sm-4 -->
          </div> <!-- end row -->
        </div> <!-- container -->
      </div>
      <div class="footer-bottom text-center"> <!-- Footer-copyright -->
        <p>©2021 Erflog. Design By <a href="http://templatestock.co">TEMPLATE STOCK</a></p>
      </div>
    </footer>
    <!-- End footer begings -->


    <!-- Scroll top -->
    <a href="#" class="back-to-top"> <i class="fa fa-chevron-up"> </i> </a>


    <!-- Style switcher -->
    <div id="style-switcher" style="left: 0px;">
        <div>
            <h3>Select your color</h3>
            <ul class="pattern">
                <li><a class="color1" href="#"></a></li>
                <li><a class="color2" href="#"></a></li>
                <li><a class="color3" href="#"></a></li>
                <li><a class="color4" href="#"></a></li>
                <li><a class="color5" href="#"></a></li>
                <li><a class="color6" href="#"></a></li>
                <li><a class="color7" href="#"></a></li>
                <li><a class="color8" href="#"></a></li>
                <li><a class="color9" href="#"></a></li>
                <li><a class="color10" href="#"></a></li>
                <li><a class="color11" href="#"></a></li>
                <li><a class="color12" href="#"></a></li>
            </ul>
        </div>      
        <div class="bottom">
            <a href="#" class="settings"><i class="fa fa-refresh fa-spin"></i></a>
        </div>
    </div>
    <!-- end Style switcher --> 


    <!-- JavaScript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <!-- initialize jQuery Library -->
     <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
     <!-- jquery easing -->
     <script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
     <!-- Bootstrap -->
     <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
     <!-- modal-effect -->
     <script src="{{ URL::asset('js/classie.js') }}"></script>
     <script src="{{ URL::asset('js/modalEffects.js') }}"></script>
     <!-- Counter-up -->
     <script src="{{ URL::asset('js/waypoints.min.js') }}" type="text/javascript"></script>
     <script src="{{ URL::asset('js/jquery.counterup.min.js') }}" type="text/javascript"></script>
     <!-- SmoothScroll -->
     <script src="{{ URL::asset('js/SmoothScroll.js') }}"></script>
     <!-- Parallax -->
     <script src="{{ URL::asset('js/jquery.stellar.min.js') }}"></script>
     <!-- Jquery-Nav -->
     <script src="{{ URL::asset('js/jquery.nav.js') }}"></script>
     <!-- Owl carousel -->                                                      
     <script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
     <!-- App JS -->
     <script src="{{ URL::asset('js/app.js') }}"></script>

     <!-- Switcher script for demo only -->
    <script type="text/javascript" src="{{ URL::asset('js/switcher.js') }}"></script>


  </body>
</html>
