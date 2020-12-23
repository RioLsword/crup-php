<?php
$conn=mysqli_connect("localhost","root","","test");
$id=$_GET["id"];
$result=mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id=$id");
$mhs=mysqli_fetch_assoc($result);

if(isset($_POST["submit"])){
	$nama=htmlspecialchars($_POST["nama"]);
	$nim=htmlspecialchars($_POST["nim"]);
	$jurusan=htmlspecialchars($_POST["jurusan"]);
	$email=htmlspecialchars($_POST["email"]);
	$gambar=htmlspecialchars($_POST["gambar"]);

	$query="UPDATE mahasiswa SET
			nama='$nama',
			nim='$nim',
			jurusan='$jurusan',
			email='$email',
			gambar='$gambar'

			WHERE id=$id
				";

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
		<input type="text" name="id" id="id"  value="<?= $mhs["id"];?>">
		<p>
		<label>Nama</label>
		<input type="text" name="nama" id="nama" value="<?= $mhs["nama"];?>">
		</p>
		<p>
		<label>Nim</label>
		<input type="text" name="nim" id="nim"  value="<?= $mhs["nim"];?>">
		</p>
		<p>
		<label>Jurusan</label>
		<input type="text" name="jurusan" id="jurusan"  value="<?= $mhs["jurusan"];?>">
		</p>
		<p>
		<label>Email</label>
		<input type="text" name="email" id="email"  value="<?= $mhs["email"];?>">
		</p>
		<p>
		<label>Gambar</label>
		<input type="text" name="gambar" id="gambar"  value="<?= $mhs["gambar"];?>">
		</p>
		<button type="submit" name="submit">Tambah Data</button>
	</form>

</body>
</html>