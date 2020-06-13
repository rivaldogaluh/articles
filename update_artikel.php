<?php
    include "koneksi.php";

    $id = $_POST['id'];

    $judul= $_POST['title'];
    $penulis = $_POST['author'];
    $lead = $_POST['abstract'];
    $isi = $_POST['content'];
    $time = date("Y-m-d H:i:s");

    $lead = str_replace("\r\n","<br>",$lead);
    $content = str_replace("\r\n","<br>",$isi);

    //Pada script php v7 ini kita mengolah data UPDATE menggunakan perintah mysqli_query dengan dua parameter yang dibutuhkan yaitu KONEKSI dan SQL UPDATE. Data yang di edit merupakan data yang sesuai demgan kriteria articleID yaitu harus sama.
    $query = mysqli_query($koneksi,"UPDATE articles SET judul='$judul', penulis='$penulis', lead='$lead', content='$isi' WHERE articleID = '$id'");
    
    if($query){
        echo "<h3 align=center>Artikel Berhasil Di Update</h3>";
        echo "<a href='index.php'>LIST ARTICLES</a>";
    }else{
        echo "<h2 align=center>Artikel Gagal Di Update!!!</h2>";
    }

?>