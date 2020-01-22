<?php 
include 'konek.php';

if (isset($_POST["register"])) {
    # code...
    $nama=$_POST['name'];
    $nohp=$_POST['nohp'];
}

    $cekdulu= "select * from core where nama='$nama' or no_hp='$nohp'"; //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan
    $prosescek= mysqli_query($koneksi, $cekdulu);
    if(mysqli_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
        echo "<script>alert('Peserta Sudah Terdaftar!!');history.go(-1) </script>";
    }
    else{
        $sql="INSERT INTO core (nama,no_hp) VALUES('$nama','$nohp')";
        $result=mysqli_query($koneksi, $sql); 
        
        header('Location: daftar.php');
    }




?>