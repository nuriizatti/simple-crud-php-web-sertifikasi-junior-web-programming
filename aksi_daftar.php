
<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form

$namaLomba = $_POST['namaLomba'];
$penyelenggara = $_POST['penyelenggara'];
$deadline = $_POST['deadline'];
$deskripsi = $_POST['deskripsi'];
$email = $POST['email'];
$link = $_POST['link'];


// menginput data ke database
mysqli_query($koneksi,"insert into daftar values('','$namaLomba','$penyelenggara','$deadline','$deskripsi','$email','$link')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
 


?>
