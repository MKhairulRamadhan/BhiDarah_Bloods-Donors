<?php
session_start();
include "koneksi.php"; 

$goldarah = htmlentities(strip_tags(trim($_POST["gol_darah_butuh"])));
$alamat = htmlentities(strip_tags(trim($_POST["alamat_rs"])));
$penyakit = htmlentities(strip_tags(trim($_POST["penyakit_recipient"])));
$hubungan = htmlentities(strip_tags(trim($_POST["hubungan"])));
$pesan = htmlentities(strip_tags(trim($_POST["pesan_anda"])));
$namafoto = htmlentities(strip_tags(trim($_FILES['gambar']['name'])));
$lokasifoto = htmlentities(strip_tags(trim($_FILES['gambar']['tmp_name'])));
$id_user = htmlentities(strip_tags(trim($_SESSION['user']['id_user'])));

    //jika foto dirubah
    if (!empty($lokasifoto)) {
      move_uploaded_file($lokasifoto, "image/recipient/".$namafoto);

      $hasil = $koneksi->query("INSERT INTO recipient (id_user, gol_darah_butuh, alamat_rs, penyakit_recipient,hubungan, pesan_anda, gambar) VALUES ('$id_user', '$goldarah','$alamat','$penyakit','$hubungan','$pesan','$namafoto')");

      if ($hasil) {
        echo "<script>alert('Berhasil mengisi form recipient!')</script>";
      }else{
        echo "<script>alert('Gagal mengisi form recipient!')</script>";
      }
     
    }else{
        $hasil = $koneksi->query("INSERT INTO recipient (id_user, gol_darah_butuh, alamat_rs, penyakit_recipient,hubungan, pesan_anda) VALUES ('$id_user', '$goldarah','$alamat','$penyakit','$hubungan','$pesan')");

        if ($hasil) {
            echo "<script>alert('Berhasil mengisi form recipient!')</script>";
        }else{
            echo "<script>alert('Gagal mengisi form recipient!')</script>";
        }
    }

   


?>

<script>
    location.replace("profil.php");
</script>