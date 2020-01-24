<?php 
include 'konek.php';

    $id=$_POST['id'];
    echo $id;
    die;
    ?>
<!-- if (isset($_POST["update"])) {
    # code...
    $nama=addslashes($_POST['editname']);
    $nohp=$_POST['editnohp'];
}       

    // $cekdulu= "select * from core where nama='$nama' or no_hp='$nohp'"; //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan
    // $prosescek= mysqli_query($koneksi, $cekdulu);
    // if(mysqli_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
    //     echo "<script>alert('Peserta Sudah Terdaftar!!');history.go(-1) </script>";
    // }
    // else{
        
        $query2 = "UPDATE core SET nama='$nama' AND no_hp= '$nohp' WHERE id= '".$id."'";
        $sql2 = mysqli_query($koneksi, $query2);
        echo "berhasil";
        
        //header('Location: daftar.php');
    ?> -->
