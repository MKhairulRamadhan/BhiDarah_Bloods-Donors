<?php 
  session_start();
  include "koneksi.php";

  if (!isset($_SESSION['user'])) {
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
  }

  $id_user = $_SESSION['user']['id_user'];

  $ambil = $koneksi->query("SELECT * FROM volunteer WHERE id_user = '$id_user'");
  $volunteer = $ambil->num_rows;
  if ($volunteer > 0) {
    echo "<script>alert('Anda Sudah Menjadi Volunteer ..!');</script>";
    echo "<script>location='profil.php'</script>";
  }

  $ambil = $koneksi->query("SELECT * FROM user WHERE id_user = '$id_user'");
  $pecah = $ambil->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Form Volunteer | Bhi.darah</title>

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

	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/form.css">
<!--===============================================================================================-->
</head>
<body>

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

  <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Volunteer</h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>               
            <li class="active">Volunteer Register</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="act_form_volunteer.php" method="POST">
				<span class="contact100-form-title">
					Volunteer Register
				</span>

				<label class="label-input100" for="first-name">Nama Anda *</label>
				<div class="wrap-input100">
					<input id="name" class="input100" type="text" name="name" value="<?php echo $pecah['nama_user'] ?>" readonly>
					<span class="focus-input100"></span>
        </div> 
        
				<label class="label-input100" for="email">Email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" value="<?php echo $pecah['email_user'] ?>" readonly>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Nomor HandPhone</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" value="<?php echo $pecah['no_hp_user'] ?>" readonly>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Golongan Darah</label>
			  			<div class="wrap-input100" >
                  <center>
                        <div>
                            <span>
                                <input required type="radio" name="gol_darah" value="A" id="A" />
                                <label for="A">A</label>
                            </span>
                            <span>
                                <input required type="radio" name="gol_darah" value="B" id="B" checked="checked" />
                                <label for="B">B</label>
                            </span>
                            <span>
                                <input required type="radio" name="gol_darah" value="AB" id="AB" />
                                <label for="AB">AB</label>
                            </span>
                            <span>
                                <input required type="radio" name="gol_darah" value="O" id="O" />
                                <label for="O">O</label>
                            </span>
                        </div>
                      </center>
                </div>

				<label class="label-input100" for="terakhir">Terakhir Donor</label>
				<div class="wrap-input100">
					<input required id="phone" class="input100" type="date" name="tgl_donor_terakhir">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="riwayat">Riwayat Penyakit *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea required id="message" class="input100" name="riwayat_penyakit" placeholder="Riwayat penyakit" ></textarea>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Tentang Anda *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea required id="message" class="input100" name="tentang_anda" placeholder="Keterangan diri anda"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button type="submit" class="contact100-form-btn">
						Daftar
					</button>
        </div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('image/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Alamat :
						</span>

						<span class="txt2">
              Lab Terpadu Universitas Syiah Kuala
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Hubungi Admin
						</span>

						<span class="txt3">
							+62 852 7083 7552
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
            <div class="txt1 p-r-25">
              <span class="lnr lnr-envelope"></span>
            </div>
  
            <div class="flex-col size2">
              <span class="txt1 p-b-20">
                Email :
              </span>
  
              <span class="txt3">
                hizbullahmaulana1@gmail.com
              </span>
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


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->


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

	<script src="assets/js/form.js"></script>
</body>
</html>
