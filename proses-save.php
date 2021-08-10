<?php

include 'koneksi.php';

$judul_post = $_POST['judul_post'];
$isi = $_POST['isi'];
$tema_post = $_POST['tema_post'];

$simpan = mysqli_query($conn, "INSERT INTO blog (judul, isi_blog, tema, tanggal_terbit) VALUES('$judul_post','$isi','$tema_post',NOW())");

if($simpan){
    echo "Proses Simpan Berhasil!";
    header("location:index.php");
}
else{
    header("location:create.php");
}