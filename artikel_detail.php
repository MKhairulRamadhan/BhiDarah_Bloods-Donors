<?php 
  session_start();
  include "koneksi.php";
  $ambil = $koneksi->query("SELECT * FROM artikel WHERE id_artikel = '$_GET[id]'");
  $pecah = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home | Bhi.darah</title>

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
           <h2>Blog Single</h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>               
            <li class="active">Blog Single</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                    <div class="col-md-12">
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img">
                          <a href="#"><img alt="img" src="image/artikel/<?php echo $pecah['gambar_artikel'] ?>"></a>
                          <figcaption class="mu-blog-caption">
                            <h3><a href="#"><?php echo $pecah['judul_artikel'] ?></a></h3>
                          </figcaption>                      
                        </figure>
                        <div class="mu-blog-meta">
                          <a href="#">By Admin</a>
                          <a href="#"><?php echo $pecah['tgl_artikel'] ?></a>
                          <span><i class="fa fa-comments-o"></i>87</span>
                        </div>
                        <div class="mu-blog-description">
                          <p style="text-align: justify;"><?php echo $pecah['isi_artikel'] ?>.</p>
                          
                        </div>

                      </article>
                    </div>                                   
                  </div>
                </div>
                <!-- end course content container -->
              
                <!-- start related course item -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-related-item">
                      <h3 style="text-align: center;">Artikel Terbaru</h3>
                      <div class="mu-related-item-area">
                        <div id="mu-related-item-slide">
                         <?php 
                            $ambil = $koneksi->query("SELECT * FROM artikel");
                            $batas = mysqli_num_rows($ambil);
                            while ($pecah = $ambil->fetch_assoc()) {
                              if (!($batas>4)) {
                          ?>
                          <div class="col-md-6">
                            <article class="mu-blog-single-item">
                              <figure class="mu-blog-single-img">
                                <a href="artikel_detail.php?id=<?php echo $pecah['id_artikel'] ?>"><img height="250" alt="img" src="image/artikel/<?php echo $pecah['gambar_artikel'] ?>"></a>
                                <figcaption class="mu-blog-caption">
                                  <h3><a href="artikel_detail.php?id=<?php echo $pecah['id_artikel'] ?>"><?php $pecah['judul_artikel'] ?></a></h3>
                                </figcaption>                      
                              </figure>
                              <div class="mu-blog-meta">
                                <a href="">By Admin</a>
                                <a href=""><?php echo $pecah['tgl_artikel'] ?></a>
                                <!-- <span><i class="fa fa-comments-o"></i>87</span> -->
                              </div>
                              <div class="mu-blog-description" style="max-height: 130px; overflow: hidden; text-align: justify;">
                                  <?php echo $pecah['isi_artikel'] ?>
                                </div">
                              </article>
                              <a class="mu-read-more-btn" href="artikel_detail.php?id=<?php echo $pecah['id_artikel'] ?>" style="margin-bottom: 30px; background-color: darkgray;">Read More</a> 
                          </div>
                          <?php } $batas--; } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end start related course item -->
                <!-- start blog comment -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-comments-area">
                      <?php 
                        $ambil = $koneksi->query("SELECT * FROM komentar JOIN user WHERE komentar.id_user = user.id_user AND komentar.id_artikel = '$_GET[id]' ");
                        $banyak = mysqli_num_rows($ambil);
                      ?>
                      <h3><?php echo $banyak; ?> Komentar</h3>
                      <div class="comments">
                        <ul class="commentlist">
                          <?php 
                            while ($pecah = $ambil->fetch_assoc()) {
                          ?>
                          <li>
                            <div class="media">
                              <div class="media-left">    
                                <img alt="img" src="image/profil/<?php echo $pecah['gambar_user'] ?>" class="media-object news-img">
                              </div>
                              <div class="media-body">
                               <h4 class="author-name"><?php echo $pecah['nama_user'] ?></h4>
                               <span class="comments-date"> Di post <?php echo $pecah['tgl_komentar'] ?></span>
                               <p><?php echo $pecah['isi_komentar'] ?></p>
                              </div>
                            </div>
                          </li>
                          <?php } ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- end blog comment -->
                <?php if (isset($_SESSION['user'])): ?>
                  
                <!-- start respond form -->
                <div class="row">
                  <div class="col-md-12">
                    <div id="respond">
                      <h3 class="reply-title">Tinggalkan Komentar</h3>
                      <form id="commentform" method="post" action="">
                        <p class="comment-notes">
                          Alamat email anda tidak akan dipublikasikan, is yang bertanda<span class="required">*</span>
                        </p>
                        <p class="comment-form-author">
                          <label for="author">Nama <span class="required">*</span></label>
                          <input type="text" required="required" readonly value="<?php echo$_SESSION['user']['nama_user']?>">
                        </p>
                        <p class="comment-form-email">
                          <label for="email">Email <span class="required">*</span></label>
                          <input type="email" required="required" readonly aria-required="true" value="<?php echo $_SESSION['user']['email_user'] ?>">
                        </p>
                        <p class="comment-form-comment">
                          <label for="comment">Komentar</label>
                          <textarea required="required" aria-required="true" rows="8" cols="45" name="komentar"></textarea>
                        </p>
                        <p class="form-submit">
                          <input type="submit" class="mu-post-btn" name="submit" value="Kirim">
                        </p>        
                      </form>
                      <?php 
                        if (isset($_POST['submit'])) {
                          $id_user = $_SESSION['user']['id_user'];
                          $tanggal = date('Y-m-d');
                          $isi = htmlentities(strip_tags(trim($_POST['komentar'])));
                          $koneksi->query("INSERT INTO komentar (id_user, id_artikel, tgl_komentar, isi_komentar) VALUES ('$id_user', '$_GET[id]', '$tanggal', '$isi') ");

                           echo "<meta http-equiv='refresh' content='1;url=artikel_detail.php?id=".$_GET['id']."'>";
                        }
                      ?>
                    </div>
                  </div>
                </div>
                <?php endif ?>
                <!-- end respond form -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Popular News</h3>
                    <div class="mu-sidebar-popular-courses">
                      <?php 
                        $ambil = $koneksi->query("SELECT * FROM artikel"); 
                        $batas = mysqli_num_rows($ambil);
                        while ($pecah = $ambil->fetch_assoc()) {
                          if (!($batas > 3)) {
                      ?>
                      <div class="media">
                        <div class="media-left">
                          <a href="artikel_detail.php?id=<?php echo $pecah['id_artikel'] ?>">
                            <img class="media-object" src="image/artikel/<?php echo $pecah['gambar_artikel'] ?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="artikel_detail.php?id=<?php echo $pecah['id_artikel'] ?>"><?php echo $pecah['judul_artikel'] ?></a></h4>  
                        </div>
                      </div>
                      <?php } $batas--; } ?>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                  
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

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