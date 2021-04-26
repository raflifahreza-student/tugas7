<!DOCTYPE html>
<html>
<head>
	<title>List Kontak</title>
</head>
<body>
	<table border="1">
	<h2>List Kontak</h2>
	<tr><th>NO</th><th>NAMA</th><th>GENDER</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
	<?php
	include 'koneksi.php';
		$kontak = mysqli_query($koneksi, "SELECT * from kontak");
		$no=1;
		foreach ($kontak as $row){
			$jkel = $row['jkel']=='P'?'Perempuan':'Laki laki';
			echo "<tr>
				<td>$no</td>
				<td>".$row['nama']."</td>
				<td>".$jkel."</td>
				<td>".$row['email']."</td>
				<td>".$row['alamat']."</td>
				<td>".$row['kota']."</td>
				<td>".$row['pesan']."</td>
				</tr>";
			$no++;
		}
	?>
	</table>
	<form method="post" action="tambahkontak.php"> <!-- untuk mendeklarasi akses ke file tambahkontak.php -->
	<table>
		<tr>
			<td><button type="submit" name="tambah">Tambah Daftar Nama Kontak</button></td> <!-- membuat buton tambah kontak -->
			<td><b><a href="logout.php">Keluar</a></b></td> <!-- membuat link untuk keluar -->
		</tr>
	</table>
</body>
</html>
