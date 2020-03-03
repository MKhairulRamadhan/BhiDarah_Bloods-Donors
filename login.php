<?php  
  session_start();
  include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>LogIn | Bhi.darah</title>

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

    <link rel="stylesheet" type="text/css" href="assets/css/login.css">

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

  <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Sign In</h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>               
            <li class="active">Sign In</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

  <!-- login -->
  <div class="container container-edit">
    <div class="row">
      <div>
      <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1">
        
        <div class="account-wall">
          <img class="profile-img" src="logIn.png"
          alt="LogIn">
           <?php 
             // jika tombol login ditekan
            if (isset($_POST['submit'])){
              // lakukan query cek akun dari tabel pelanggan

              $email = mysqli_real_escape_string($koneksi,$_POST['email']);
              $password = mysqli_real_escape_string($koneksi,$_POST['password']);

              $ambil = $koneksi->query("SELECT * FROM user WHERE email_user = '$email' AND  password_user = sha1('$password') ");

              // ngitung akun yang terambil
              $akunYangCocok = $ambil->num_rows;

              if($akunYangCocok > 0){
                $akun = $ambil->fetch_assoc();
                if ($akun['role'] == "admin") {
                  // simpan di session admin
                  $_SESSION['admin'] = $akun;
                  echo "<div style='text-align: center' class='alert alert-info'>Login sukses</div>";
                  echo "<meta http-equiv='refresh' content='1;url=admin/profil.php'>";
                }else{
                  // anda sudah login
                  // simpan di session user
                  $_SESSION['user'] = $akun;
                  echo "<div style='text-align: center' class='alert alert-info'>Login sukses</div>";
                  echo "<meta http-equiv='refresh' content='1;url=profil.php'>";
                }
              }else{
                echo "<div style='text-align: center' class='alert alert-danger'>Login gagal</div>";
              }
            }
          ?>
          <form class="form-signin" method="post" action="">
            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
            Sign in</button>
            <label class="checkbox pull-left">
              <input type="checkbox" value="remember-me">
              Remember me
            </label>
            <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
            <a href="signup.php" class="text-center new-account">Create an account </a>

          </form>
        </div>
        </div>
      </div>
    </div>
  </div>

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