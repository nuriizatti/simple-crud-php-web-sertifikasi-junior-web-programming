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
<div class="main">
  <div class="container">
      <h1 class="bold"> Daftarkan Lomba Anda disini</h1> 
      </br>
      <form method="post" action="aksi_daftar.php">
          <div class="form-group">
              <table class="table">
                <tr>
                  <td>Email</td>
                  <td><input type="email" class="form-control" name="email"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required=""></td>
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
                  <td><input type="text" class="form-control"name="namaLomba"placeholder="Masukkan Nama Lomba"required></td>
                </tr>
                <tr>
                  <td>Penyelenggara</td>
                  <td><input type="text" class="form-control" name="penyelenggara"placeholder="Masukkan Penyelenggara"required></td>
                </tr>
                <tr>
                <td>Deadline</td>
                  <td><input type="date" class="form-control" name="deadline"placeholder=""required>
                  </td>
                </tr>
                <tr>
                  <td>Deskripsi</td>
                  <td><textarea class="form-control"name="deskripsi" id="exampleFormControlTextarea1" rows="8"placeholder="Masukkan Deskripsi Lomba" required></textarea></td>
                </tr> 
                <tr>
                  <td>Link Info Lanjut</td>
                  <td><input type="url" class="form-control" name="link" placeholder="Masukkan link"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input class="btn btn-primary" type="submit" value="SIMPAN"></td>
                </tr>   
            </table>
          </div>
      </form>
 
  </div>
</div>

<?php include('footer.php'); ?> 
<!-- navbar -->
<!-- penutup navbar-->
</body>
</html>
