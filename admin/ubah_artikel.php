<?php
  session_start();
  include "../koneksi.php";

  $ambil = $koneksi->query("SELECT * FROM artikel WHERE id_artikel = '$_GET[id]'");
  $pecah = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin | Bhi.Darah
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
   <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="../assets/css/roboto.css" />
  <link rel="stylesheet" href="../assets/css/font-awesome.css">

  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <style>
    .label-nih{
      font-size: 9px;
      color: white;
    }
  </style>
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Bhi.Darah Admin
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./profil.php">
              <i class="material-icons">person</i>
              <p>Profil Admin</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./event_slider.php">
              <i class="material-icons">content_paste</i>
              <p>Event dan Slider</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./user_list.php">
              <i class="material-icons">library_books</i>
              <p>List User</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./volunteer_list.php">
              <i class="material-icons">library_books</i>
              <p>List Volunteer</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./recipient_list.php">
              <i class="material-icons">library_books</i>
              <p>List Recipient</p>
            </a>
          </li>
          <li class="nav-item active">
                <a class="nav-link" href="./artikel.php">
                    <i class="material-icons">unarchive</i>
                    <p>Artikel</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="">User Profile</a>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ubah Artikel</h4>
                  <p class="card-category">Bhi.Darah</p>
                </div>
                <div class="card-body">
                  <form method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label-nih">Judul</label>
                          <input type="text" name="judul" class="form-control" value="<?php echo $pecah['judul_artikel'] ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="">
                          <label>Gambar</label>
                          <input type="file" accept="image/*" name="gambar" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Isi Artikel</label>
                          <div class="form-group">
                            <textarea class="form-control ckeditor" name="isi" id="ckedtor" rows="5" required><?php echo $pecah['isi_artikel'] ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary pull-right">Ubah Artikel</button>
                    <div class="clearfix"></div>
                  </form>
                  <?php 
                    if (isset($_POST['ubah'])) {
                      $nama = $_FILES['gambar']['name'];
                      $lokasi = $_FILES['gambar']['tmp_name'];

                      $judul = htmlentities(strip_tags(trim($_POST["judul"])));
                      $isi_artikel = htmlentities(strip_tags(trim($_POST["isi"])));
                      $tgl = date('Y-m-d');
                      if (!empty($lokasi)) {
                        move_uploaded_file($lokasi, "../image/artikel/".$nama);

                        $koneksi->query("UPDATE artikel SET gambar_artikel = '$nama', judul_artikel = '$judul', isi_artikel = '$isi_artikel', tgl_artikel = '$tgl' WHERE id_artikel = '$_GET[id]' ");
                      }else{
                        $koneksi->query("UPDATE artikel SET judul_artikel = '$judul', isi_artikel = '$isi_artikel', tgl_artikel = '$tgl' WHERE id_artikel = '$_GET[id]' ");
                      }

                      echo "<div class='alert alert-info'>Artikel Telah Diubah</div>";
                      echo " <meta http-equiv='refresh' content='l;url=artikel.php'>";

                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                </div>
                <div class="card-body">
                  <img style="margin-top: 40px;" width="350px" src="../image/artikel/<?php echo $pecah['gambar_artikel'] ?>" alt="artikel">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="">
                  Bhi.Darah
                </a>
              </li>
              <li>
                <a href="">
                  About Us
                </a>
              </li>
              <li>
                <a href="">
                  News
                </a>
              </li>
              <li>
                <a href="">
                  Event
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="../index.php" target="_blank">Bhi.Darah</a> Syiah Kuala Univercity.
          </div>
        </div>
      </footer>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title" >Admin</li>
          <p style="font-size: 18px; color: white; text-align: center"><?php echo $_SESSION['admin']['nama_user'] ?></p>
        <li class="header-title">Images</li>

        <img style="width: 100%; height: 70%; border-radius: 5px;" class="img" src="../image/profil/<?php echo $_SESSION['admin']['gambar_user'] ?>" >


        <li class="button-container">
          <a href="logout.php" class="btn btn-primary btn-block">LogOut</a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>