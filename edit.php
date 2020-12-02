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

<!-- mengambil isi tabel -->
<?php
  include 'koneksi.php';
  $id = $_GET['id'];
  $tampil = mysqli_query($koneksi,"select * from daftar where id='$id'");
  while($t = mysqli_fetch_array($tampil)){
?>
<!--banner-->
<div class="main">
  <div class="container">
      <h1 class="bold"> Edit Informasi Lomba</h1> 
      </br>
      <form method="post" action="aksi_daftar.php">
          <div class="form-group">
              <table class="table">
                <tr>
                  <td>Email</td>
                  <input type="hidden" name="id" value="<?php echo $t['id']; ?>">
                  <td><input type="email" class="form-control" name="email"id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $t['email']; ?>" required=""></td>
                <tr>
                  <td>
                  </td>
                  <td>
                    <small id="emailHelp" class="form-text text-muted">email yang digunakan sebaiknya adalah email privat untuk keperluan perubahan data lomba jika diperlukan</small>
                  </td>
                </tr>
                </tr>
                <tr>      
                  <td>Nama Lomba</td>
                  <td><input type="text" class="form-control"name="namaLomba" value="<?php echo $t['namaLomba']; ?>" required></td>
                </tr>
                <tr>
                  <td>Penyelenggara</td>
                  <td><input type="text" class="form-control" name="penyelenggara" value="<?php echo $t['penyelenggara']; ?>" required></td>
                </tr>
                <tr>
                  <td>Deadline</td>
                  <td><input type="date" class="form-control" name="deadline" value="<?php echo $t['deadline']; ?> " required>
                  </td>
                </tr>
                <tr>
                  <td>Deskripsi</td>
                  <td><textarea class="form-control"name="deskripsi" id="exampleFormControlTextarea1" rows="8" value=" <?php echo $t['deskripsi']; ?> " required></textarea></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input class="btn btn-primary" type="submit" value="SIMPAN"></td>
                </tr>   
            </table>
          </div>
      </form>
    <?php 
  }
  ?>

  </div>
</div>

<?php include('footer.php'); ?> 
<!-- navbar -->
<!-- penutup navbar-->
</body>
</html>