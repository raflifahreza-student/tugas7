<!DOCTYPE html>
<html>
<head>
	<title>Input Kontak</title>
</head>
<body>
	<form method="post" action="simpan.php">
		<table>
			<tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
			<tr><td>JENIS KELAMIN</td><td>
				<input type="radio" name="jkel" value="L">Laki Laki
				<input type="radio" name="jkel" value="P">Perempuan
			</td></tr>
			<tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
			<tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
			<tr><td>KOTA</td><td><input type="text" name="kota"></td></tr>
			<tr><td>PESAN</td><td><input type="text" name="pesan" style="width: 300px; height: 100px;"></td></tr>
			<tr><td colspan="2"><button type="submit" value="simpan">SIMPAN DATA</button></td></tr>
		</table>
	</form>
</body>
</html>
