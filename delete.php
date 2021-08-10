<?php

include 'koneksi.php';

$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM blog WHERE id_blog='$id'");

if($delete){
    echo "Proses Delete Berhasil!";
    header("location:index.php");
}
else{
    header("location:index.php");
}