<?php

include 'koneksi.php';

$id_blog = $_POST['id_blog'];
$judul_post = $_POST['judul_post'];
$isi = $_POST['isi'];
$tema_post = $_POST['tema_post'];

$update = mysqli_query($conn, "UPDATE blog SET judul='$judul_post', isi_blog='$isi', tema='$tema_post' WHERE id_blog='$id_blog'");

if($update){
    echo "Proses Update Berhasil!";
    header("location:index.php");
}
else{
    header("location:edit.php");
}