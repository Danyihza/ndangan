<?php 
//koneksi
include 'konek.php';

if(isset($_GET["gagal"])){
  echo "<script>alert('Gagal Menghapus Data!!!');history.go(-1);</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-Certificate Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- The Modal -->
<div class="modal fade" id="modalku">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Ini adalah Bagian Header Modal -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Peserta</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Ini adalah Bagian Body Modal -->
        <div class="modal-body">
            <form action="prosesdaftar.php" method="POST">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input class="form-control" type="text" name="name" placeholder="Masukkan Nama Peserta" onkeypress="return event.charCode < 48 || event.charCode  >57" maxlength=100 required/>
                </div>

                <div class="form-group">
                    <label for="No HP">No HP</label>
                    <input class="form-control" type="text" name="nohp" placeholder="Masukkan No HP" maxlength=13 onkeypress="return hanyaAngka(event)" required />
                </div>
                <br>

                <!-- Ini adalah Bagian Footer Modal -->
                <div class="modal-footer">
                <input type="submit" class="btn btn-success " name="register" value="Tambah" />
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
        
        
        
      </div>
    </div>
  </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <a class="navbar-brand" href="#">E-Certificate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Data Peserta<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" class="sr-only" data-toggle="modal" data-target="#modalku">Tambah Peserta</a>
            </li>
            </ul>
        </div>
    </nav>
	
<center><h3>Data Peserta</h3> </center>
<br>
 
</body>
<body>
    <div class="container">
        <table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama</th>
					<th>No Telepon</th>
                    <th>Aksi</th>
				</tr>
			</thead>
			<tbody>
            <?php
                  include 'konek.php';
                  $query = "select * from core";
                  $sql = mysqli_query($koneksi, $query);
                  while ($row=mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$row['nama']."</td>";
                    echo "<td>".$row['no_hp']."</td>";?>
                    <td><a onclick="return confirm('Apakah Anda Ingin Menghapus Data ini?')" class="btn btn-danger" href="proseshapus.php?id=<?php echo $row['id']; ?>">Hapus</a></td>
                    </tr>
                 <?php }
                  ?> 
			</tbody>
		</table>
    </div>

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