<?php  
  session_start();
  include "koneksi.php";
?>

<!DOCTYPE html>
<html class="no-js">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>About Us | Bhi.darah</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">  

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="assets/css/aboutUs1.css">

</head>


<body>

   <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>Bhi.Darah@gmail.com</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>(+62)852 7083 7552</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->

  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand logo" href="index.php"><img src="logo.png"><span>Bhi.Darah</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="data_volunteer.php">Data Volunteer</a></li>
            <li><a href="artikel.php">Article</a></li>         
            <li><a href="about_us.php">About Us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Form <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="form_volunteer.php">Form Volunteer</a></li>                
                <li><a href="form_recipient.php">Form Receipent</a></li>                
              </ul>
            </li> 
            <?php if (isset($_SESSION['user'])) {?>
            <li><a href="profil.php"><?php echo $_SESSION['user']['nama_user']?></a></li>
            <?php }else{ ?>
              <li><a href="login.php">Login</a></li>
            <?php }  ?>            
            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->

  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->

  <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>About Us</h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>            
            <li class="active">About Us</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

    <section class="featured">
    <div class="container">
      <div class="row mar-bot20">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-12 mar-top30">

          <div class="align-center">
            <i class="fa fa-flask fa-5x"></i>
            <h2 class="slogan">APA ITU BHI-DARAH?</h2>
            <p>
                bhi-darah adalah platform dimana orang yang membutuhkan donor darah segera dengan orang yang ingin mendonrkan darahnya secara sukarela dipertemukan. Selain itu, bhi-darah juga memberi pengetahuan tentang manfaat, tips, dan keuntungan dalam mendonorkan darah. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start testimonial -->
  <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="mu-testimonial-area">
              <div class="testimonial-center">
                <div>
                  <h2>About Us?</h2>
                  <p>
                  Website bhi-darah ini akan sangat membantu banyak orang. Dengan semua fitur-fitur yang bisa diakses disegala tempat, simple dan efektif membuat user akan mudah menggunakannya.
                  </p>
                  <br/>
                  <h2>Mission</h2>
                  <p>
                  Banyak orang sakit yang membutuhkan donor darah secara tiba-tiba tetapi terkadang persedian terbatas. Sedangkan disisi lain, banyak orang baik didunia ini yang ingin mendonorkan darah mereka dengan sukarela tetapi tidak mengetahui ke jiwa mana akan disumbangkan darahnya. Oleh karena itu, kami membantu orang yang membutuhkan donor darah untuk mendapatkan kontak orang-orang baik yang bersedia menyumbangkan darahnya tentunya sesuai kesepakatan mereka.
              </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial -->

  <!-- about -->
  <section id="section-about" class="section appear clearfix mar-bot40">
    <div class="container-fluid">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
          <div class="section-header">
            <h2>Our Team</h2>
            <p>
                Bhi-darah dikembangkan oleh 5 orang mahasiswa unsyiah yang sedang menduduki semester 4. Awalnya website ini dibuat karena merupakan projek dari salah satu matakuliah. Akan tetapi, ini akan terus dikembangkan sebisa mungkin hingga semua orang bisa merasakan manfaatnya.  
            </p>
          </div>
        </div>
      </div>

      <div class="row align-center">
        <div class="col-md-2 col-md-offset-1">
          <div class="team-member">
            <figure class="member-photo"><img src="image/team/member1.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Jason Doe</h4>
              <span>User experiences</span>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="team-member">
            <figure class="member-photo"><img src="image/team/member2.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Timothy Clark</h4>
              <span>Web developer</span>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="team-member">
            <figure class="member-photo"><img src="image/team/member3.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Vicky Tan</h4>
              <span>Web designer</span>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="team-member">
            <figure class="member-photo"><img src="image/team/member4.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Kevin Peterson</h4>
              <span>UI designer</span>
            </div>
          </div>
        </div>
        <div class="col-md-2">
            <div class="team-member">
              <figure class="member-photo"><img src="image/team/member4.jpg" alt="" /></figure>
              <div class="team-detail">
                <h4>Kevin Peterson</h4>
                <span>UI designer</span>
              </div>
            </div>
          </div>
      </div>

    </div>
  </section>
  <!-- /about -->

 <!-- Start footer -->
 <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about_us.php">About Us</a></li>
                  <li><a href="data_volunteer.php">Data Volunteer</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <h4>Help</h4>
                <ul>
                  <li><a href="index.php#mu-about-us">Who We Are..?</a></li>
                  <li><a href="index.php#mu-abtus-counter">Statistic</a></li>
                  <li><a href="index.php#mu-latest-courses">News & Event</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>Bhi.Darah, Ulee Kareng, Banda Aceh, INDONESIA</p>
                  <p>Phone: (+62) 852 7083 7552</p>
                  <p>Website: www.Bhi.Darah </p>
                  <p>Email: Bhi.Darah@gmail.com </p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; Bhi.Darah Unsyiah Univesity</p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->


  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 


</body>

</html>
