<?php
include 'konek.php';

    $id=$_GET['id'];
    $nama=$_GET['nama'];
    $nohp=$_GET['no_hp'];

    $query = "SELECT * FROM core WHERE id='".$id."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql);

        $query2 = "UPDATE core SET nama='".$nama."', no_hp='".$nohp."' WHERE id='".$id."'";
        $sql2 = mysqli_query($koneksi, $query2);
  
        if($sql2){
              header('location:daftar.php');
          }else{   
            header('location:daftar.php?gagal_edit');
          }
?>