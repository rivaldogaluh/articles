<!DOCTYPE html>
<html>
<head>
	<title>CRUD ARTICLES</title>
</head>
<body>

	<h2>CRUD DATA ARTICLES</h2>
	<br/>
	<a href="form_artikel.php">+ TAMBAH ARTICLES</a>
	<br/>
	<br/>
	<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Lead</th>
			<th>Content</th>
            <th>Waktu</th>
            <th colspan=2>Aksi</th>
		</tr>
		<?php 
        include 'koneksi.php';

		$no = 1;

		// Proses pengambilan data pada php v7 menggunakan syntax mysqli_query dengan dua parameter yaitu KONEKSI dan SQL select data dan dengan ketentuan ditampilkan berdasarkan data yang articleID baru dibuat yaitu dari yang lebih besar atau DESC
		$data = mysqli_query($koneksi,"SELECT * FROM articles ORDER BY articleID DESC");
        
        while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['judul']; ?></td>
				<td><?php echo $d['penulis']; ?></td>
				<td><?php echo $d['lead']; ?></td>
                <td><?php echo $d['content']; ?></td>
                <td><?php echo $d['waktu']; ?></td>
				<td>
					<a href="form_edit_artikel.php?id=<?php echo $d['articleID']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['articleID']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>