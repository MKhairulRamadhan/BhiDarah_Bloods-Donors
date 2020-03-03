<?php  
  session_start();
  include "koneksi.php";

  if (!isset($_SESSION['user'])) {
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
  }

  $id_user = $_SESSION['user']['id_user'];
  $ambil = $koneksi->query("SELECT * FROM user WHERE id_user = '$id_user' ");
  $pecah = $ambil->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Profil | Bhi.darah</title>

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

    <style>
    #leftPanel{
    background-color:#0079ac;
    color:#fff;
    text-align: center;
    }

    #rightPanel{
        min-height:415px;
    }

    /* Credit to bootsnipp.com for the css for the color graph */
    .colorgraph {
    height: 5px;
    border-top: 0;
    background: #c4e17f;
    border-radius: 5px;
    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    }

    .hilangkan{
        visibility:hidden;
    }
    </style>
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
           <h2>Profil</h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>               
            <li class="active">Profil In</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

<p class="hilangkan" >hidden</p>   <!--untuk memberikan break-->

 <!-- Start profil -->
 <div class="container">
  <br>
  <br>
  <div class="row" id="main">
    <div class="col-md-4 well" id="leftPanel">
      <div class="row">
        <div class="col-md-12">
          <div style="height: 300px;">

            <script type='text/javascript'>
              function preview_image(event) 
              {
              var reader = new FileReader();
              reader.onload = function()
              {
              var output = document.getElementById('output_image');
              output.src = reader.result;
              }
              reader.readAsDataURL(event.target.files[0]);
              }
            </script>

            <div class="img-circle img-thumbnail" style=" overflow: hidden;">
              <img width="160" height="190" src="./image/profil/<?php echo $pecah['gambar_user'] ?>" alt="Texto Alternativo" id="output_image">
            </div>

            <h2><?php echo $pecah['nama_user']?></h2>
            <p><?php echo $pecah['email_user'] ?></p>
            <div class="btn-group">

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8 well" id="rightPanel">
      <div class="row">
        <div class="col-md-12">
          <form action="" method="post" enctype="multipart/form-data" >
            <h2>Ubah Profil Anda</h2>
            <hr class="colorgraph">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="nama" class="form-control input-lg" value="<?php echo $pecah['nama_user']?>" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="email" name="email" class="form-control input-lg" value="<?php echo $pecah['email_user']?>" readonly>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="nohp" class="form-control input-lg" value="<?php echo $pecah['no_hp_user']?>" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="date" name="tanggal" class="form-control input-lg" value="<?php echo $pecah['tgl_user']?>" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" name="alamat" class="form-control input-lg" value="<?php echo $pecah['alamat_user']?>" tabindex="4" required>
            </div>
            <div class="form-group">
              <input style="padding-top: 0" type="file" accept="image/*" name="gambar" class="form-control input-lg" onchange="preview_image(event)">
            </div>
            <hr class="colorgraph">
            <div class="row">
              <div class="col-xs-12 col-md-6 ">
                <button type="submit" name="save" class="btn btn-success btn-block btn-lg">Save</button>
              </div>
              <div class="col-xs-12 col-md-6">
                <a href="logout.php" class="btn btn-danger btn-block btn-lg">Logout</a>
              </div>
            </div>
          </form>
            <?php 
              if (isset($_POST['save'])) {
              $namaFoto = $_FILES['gambar']['name'];
              $lokasifoto = $_FILES['gambar']['tmp_name'];

              $nama = htmlentities(strip_tags(trim($_POST["nama"])));
              $tanggal = htmlentities(strip_tags(trim($_POST["tanggal"])));
              $nohp = htmlentities(strip_tags(trim($_POST["nohp"])));
              $alamat = htmlentities(strip_tags(trim($_POST["alamat"])));

              //jika foto dirubah
              if (!empty($lokasifoto)) {
                move_uploaded_file($lokasifoto, "image/profil/".$namaFoto);

                $koneksi->query("UPDATE user SET nama_user='$nama', tgl_user = '$tanggal', no_hp_user = '$nohp', alamat_user = '$alamat', gambar_user = '$namaFoto' WHERE id_user = '$id_user' ");
              }else{
                $koneksi->query("UPDATE user SET nama_user='$nama', tgl_user = '$tanggal', no_hp_user = '$nohp', alamat_user = '$alamat' WHERE id_user = '$id_user'");
              }
                echo "<script>alert('profil telah diubah');</script>";
                echo "<script>location='profil.php';</script>";
              }   
            ?>
        </div>
      </div>

      <?php
          $ambil = $koneksi->query("SELECT * FROM volunteer WHERE id_user = '$id_user' ");
          $volunteer = $ambil->num_rows;
          if ($volunteer > 0) {
            $pecah = $ambil->fetch_assoc();
      ?>
      <div class="row" style="margin-top: 50px;">
        <div class="col-md-12">
          <form action="" method="post" enctype="multipart/form-data" >
            <h2>Volunteer</h2>
            <hr class="colorgraph">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="goldarah" class="form-control input-lg" value="<?php echo $pecah['gol_darah']?>" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="date" name="tgl_donor" class="form-control input-lg" value="<?php echo $pecah['tgl_donor_terakhir']?>">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="riwayat" class="form-control input-lg" value="<?php echo $pecah['riwayat_penyakit']?>" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="tentang" class="form-control input-lg" value="<?php echo $pecah['tentang_anda']?>" required>
                </div>
              </div>
            </div>
          </form>
          
        </div>
      </div>
      <?php } ?>
      <div class="col-xs-12 col-md-6 ">
        <button type="submit" name="save" class="btn btn-success btn-block btn-lg">Save</button>
      </div>
    </div>
    </div>
  </div>
<!-- End profil --> 

<p class="hilangkan" >hidden</p>   <!--untuk memberikan break-->
<p class="hilangkan" >hidden</p>   <!--untuk memberikan break-->

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