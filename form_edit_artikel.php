<?php
    include "koneksi.php";

    //Menangkap ID yang dibawa oleh href dari file index ketika kita meng-klik link edit
    $id = $_GET['id'];

    //Proses pengambilan data php v7 ini menggunakan perintah mysqli_query dengan dua parameters yaitu KONEKSI dan SQL select data
    $data = mysqli_query($koneksi,"SELECT * FROM articles WHERE articleID='$id'");

    //Fungsi dari mysqli_fetch_array yaitu untuk mengambil data array yang sesuai dengan kriteria diatas yaitu articleID nya sama, dan hanya mengambil data satu orang tanpa menggunakan looping
    $d = mysqli_fetch_array($data);
    $time=date("d M Y, H:i"); 
?>
<h1>Form Update Berita</h1>
<br/>
<a href="index.php">- KEMBALI</a>
<br/>
<br/>
<form method="post" action="update_artikel.php">
	<table>
    <table width="100%">
        <input type="hidden" name="id" value="<?php echo $d['articleID']; ?>">
        <tr>
            <td width="18%">Judul</td>
            <td width="2%">:</td>
            <td width="80%"><input type="text" name="title" value="<?php echo $d['judul']; ?>"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name="author" value="<?php echo $d['penulis']; ?>"></td>
        </tr>
        <tr>
            <td>Lead</td>
            <td>:</td>
            <td><textarea name="abstract" rows="4" cols="45"><?php echo $d['lead']; ?></textarea></td>
        </tr>
        <tr>
            <td>Content</td>
            <td>:</td>
            <td><textarea name="content" rows="8" cols="45" ><?php echo $d['content']; ?></textarea></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
            <input type="submit" name="Submit" value="Save" class="tombol">
            </td>
        </tr>	
	</table>
</form>