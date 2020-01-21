<?php 
include 'konek.php';

if (isset ($_POST["register"])) {
    # code...
    $nama=$_POST['name'];
    $nohp=$_POST['nohp'];
}
$sql="INSERT INTO core (nama,no_hp) VALUES('$nama','$nohp')";
$result=mysqli_query($koneksi, $sql); 

header('Location: regis.php');

?>