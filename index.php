<!DOCTYPE html>
<html lang="en">

<?php 
//koneksi
include 'konek.php';

if(isset($_GET["data_kosong"])){
  echo "<script>alert('Maaf, Nomor Telepon Tidak Terdaftar!!');history.go(-1);</script>";
}

?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Certificate</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/coming-soon.min.css" rel="stylesheet">

</head>

<body>

<div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="mp4/bg.mp4" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <form action="generator.php" method="post">
      <div class="row h-100">
        <div class="col-12 my-auto">
        <p class="ml-5 text-white fixed-bottom">Copyright <i class="fas fa-copyright"></i> 2020 | Create by blablabla </p> <br>        
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-3">E-Certificate</h1>
            <p class="mb-5">Try Out SBMPTN 2020 <strong>by HIMASAKRA</strong></p>
            <div class="input-group input-group-newsletter">
              <input type="text" name="no_hp" class="form-control" maxlength=13 onkeypress="return hanyaAngka(event)" placeholder="Masukkan No HP..." required>
              <div class="input-group-append">
                <button class="btn btn-secondary" name="download" method='POST' type="submit">Download</button> 
                                             
            </div>      
            </div>
          </div>
        </div>
        </form>
      </div>
</div>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/coming-soon.min.js"></script>

  <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>

</body>

</html>
