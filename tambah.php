<?php
$conn=mysqli_connect("localhost","root","","test");

if(isset($_POST["submit"])){
	$nama=htmlspecialchars($_POST["nama"]);
	$nim=htmlspecialchars($_POST["nim"]);
	$jurusan=htmlspecialchars($_POST["jurusan"]);
	$email=htmlspecialchars($_POST["email"]);
	$gambar=$_POST["gambar"];



	

	$query="INSERT INTO mahasiswa VALUES('','$nama','$nim','$jurusan','$email','$gambar')";
	mysqli_query($conn,$query);	


	if(mysqli_affected_rows($conn)>0){
		header('Location:index.php');
	}
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Input Mahasiswa</title>
</head>
<body>
	<form method="POST" action="">
		<p>
		<label>Nama</label>
		<input type="text" name="nama" id="nama" required="">
		</p>
		<p>
		<label>Nim</label>
		<input type="text" name="nim" id="nim" required="">
		</p>
		<p>
		<label>Jurusan</label>
		<input type="text" name="jurusan" id="jurusan" required="">
		</p>
		<p>
		<label>Email</label>
		<input type="text" name="email" id="email" required="">
		</p>
		<p>
		<label>Gambar</label>
		<input type="text" name="gambar" id="gambar" required="">
		</p>
		<button type="submit" name="submit">Tambah Data</button>
	</form>

</body>
</html>