<?php
    include 'koneksi.php';

    //Menangkap ID yang dibawa oleh href dari file index ketika kita meng-klik link hapus
    $id = $_GET['id'];

    // menghapus data dari database pada php v7 menggunakan mysqli_query dengan dua parameter yaitu KONEKSI dan SQL Delete data
    mysqli_query($koneksi,"delete from articles where articleID='$id'");
     
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
?>