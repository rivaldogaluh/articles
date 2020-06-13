<?php
    include "koneksi.php";
   
    $judul= $_POST['title'];
    $penulis = $_POST['author'];
    $lead = $_POST['abstract'];
    $isi = $_POST['content'];
    $time = date("Y-m-d H:i:s");
    $lead = str_replace("\r\n","<br>",$lead);
    $content = str_replace("\r\n","<br>",$isi);
    
    //Pada script php v7 ini kita mengolah data INSERT menggunakan perintah mysqli_query dengan dua parameter yang dibutuhkan yaitu KONEKSI dan SQL INSERT
    $query = mysqli_query($koneksi,"INSERT INTO articles (judul, penulis, lead, content, waktu) values('$judul', '$penulis', '$lead', '$isi','$time')");
    
    if($query){
        echo "<h3 align=center>Proses Penambahan Artikel Berhasil</h3>";
        echo "<a href='index.php'>LIST ARTICLES</a>";
    }else{
        echo "<h2 align=center>Proses Penambahan Artikel Gagal!!!</h2>";
    }
?> 