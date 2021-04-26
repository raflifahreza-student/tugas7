<?php
	session_start();
	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<form>
		<label>Username :</label>
		<input type="text" name="fusername"><br>
		<label>Password :</label>
		<input type="password" name="fpassword">
		<button type="submit" name="fmasuk">Login</button>
	</form>

	<?php
		if (isset($_POST['fmasuk'])) { //Untuk mendeklarasikan jika tombol fmasuk atau login ditekan
			$username = $_POST['fusername']; //Untuk mendeklarasikan nilai username yang ditampung
			$password = $_POST['fpassword']; //Untuk mendeklarasikan nilai password yang ditampung
			$query = mysqli_query($koneksi,"SELECT * FROM tab_login WHERE username = '$username' AND password = md5('$password')");//query yang digunakan untuk mengakses tabel user
			$cek = mysqli_num_rows($query); //cek nilai yang ada didalam 	 

			if ($cek==1) {
				$_SESSION['userweb'].$username;//pengecekan nilai username
				header ("location:index.php"); //merupakan fila yang bertujuan apabila benar
				exit;
			}
			else {
				echo "Maaf username dan password anda tidak terdaftar";
				
			}
		}
	?>
</body>
</html>
