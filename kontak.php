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
    <div class="shadow-sm p-3 mb-5 bg-white rounded">
    <h4 class="text-center">Kontak</h4>
<!--form kontak-->
      <form method="#" action="#">
          <div class="form-group">
              <table class="table" border="0">
                <tr>
                  <td>Email</br>
                  <input type="email" class="form-control" name="email"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex : zaenab@gmail.com" required="">
                  </td>
                </tr>
                <tr>      
                  <td>Nama Lengkap<br>
                  <input type="text" class="form-control"name=""placeholder="ex: Zaenab">
                  </td>
                </tr>
                <tr>
                  <td>Tulis Masukan</br>
                  <textarea class="form-control"name="deskripsi" id="exampleFormControlTextarea1" rows="8"placeholder="Tulis Masukan dan Pesan" required></textarea>
                  </td>
                </tr> 
                <tr>
                  <td>
                  <input class="btn btn-primary" type="submit" value="SIMPAN">
                  </td>
                </tr>   
            </table>
          </div>
     </form>

<!--penutup kontak-->
  </div>
  </div>
<!--tutup container-->

<!--footer diload dari halaman berbeda-->
<?php include('footer.php'); ?> 
</body>
</html>
