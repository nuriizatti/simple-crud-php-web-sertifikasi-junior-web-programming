<!DOCTYPE html>
<html>
<head>
	<title>Informasi Lomba</title>
	<!-- ini adalah code agar page responsif-->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- ini adalah link layout -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/jquery.slim.min.js"></script>
  <script src="assets/js/bootstrap.bundle.js"></script>

</head>
<body>

<!-- navbar -->
<?php include('header.php'); ?> 
<!-- penutup navbar-->
</br>
<!--banner-->
<div class="container">
    <div class="shadow-sm p-3 mb-5 bg-yellow rounded">
       <h1 class="bold"> Daftarkan Lomba Anda disini</h1> 
       </br>
       <h5> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
       </br>
       <a class="btn btn-info" href="daftar.php" role="button">Daftarkan Lomba</a>
    </div>


    
    <h5 class="text-center">Berikut adalah Daftar Lomba Terbaru</h5><br>
<!--cardview-->
    <div class="row">
          <!--memanggil isi tabel-->  
          <?php
          include 'koneksi.php'; 
          $tampil = mysqli_query($koneksi,"SELECT * FROM daftar ORDER BY deadline ASC LIMIT 0, 6"); //mengambil semua data pada tabel daftar
          while($t = mysqli_fetch_array($tampil)){
          ?>
        <div class=" col-sm-4"style='padding-bottom: 30px;'> 
          <div class="card" >
            <div class="card-body ">
              <h5 class="card-title"><?php echo $t['namaLomba']; ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?php echo $t['penyelenggara']; ?></h6>
              <h6 class="card-subtitle mb-2 card-sub-2">Deadline <?php echo date('d F Y', strtotime($t["deadline"]));   ?></h6>
              <p class="card-text"><?php echo $t['deskripsi']; ?></p>
              <a href="<?php echo $t['link'];?>" class="card-link"><?php echo $t['link'];?></a></br>    
            </div>
          </div>
        </div>
            <?php 
            }
            ?>
    </div>
    <a class="btn btn-dark" href="lomba.php" role="button" style="float:right;">Lihat Lebih</a><br><br>
<!--penutup card-->
</div>
<!--tutup container-->

<!--footer diload dari halaman berbeda-->
<?php include('footer.php'); ?> 
</body>
</html>
