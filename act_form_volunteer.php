<?php
session_start();
include "koneksi.php"; 

$goldarah = $_POST["gol_darah"];
$tgl = $_POST["tgl_donor_terakhir"];
$riwayat = $_POST["riwayat_penyakit"];
$tentang = $_POST["tentang_anda"];
$id_user = $_SESSION['user']['id_user'];

$insert = $koneksi->query("INSERT INTO volunteer 
                (id_user,gol_darah, tgl_donor_terakhir, riwayat_penyakit, tentang_anda) 
                VALUES ('$id_user','$goldarah','$tgl','$riwayat','$tentang')");

if ($insert){
    echo "<script>alert('Berhasil mendaftar menjadi volunteer!')</script>";
}
else {
    echo "<script>alert('Gagal mendaftar menjadi volunteer!')</script>";
}

?>

<script>
    location.replace("profil.php");
</script>