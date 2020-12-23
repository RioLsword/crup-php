<?php

$conn=mysqli_connect("localhost","root","","test");
$result=mysqli_query($conn,"SELECT * FROM mahasiswa");


if(isset($_POST["cari"])){
	$keyword=$_POST["keyword"];

	$query="SELECT * FROM mahasiswa WHERE 
			nama LIKE '%$keyword%' 
		";	
	$hasil=mysqli_query($conn,$query);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar mahasiswa</h1>
	<form method="post" action="cari.php">
		<label>Cari</label>
		<input type="text" name="keyword" autofocus autocomplete="off" placeholder="Masukan kata pencarian ...">
		<button type="submit" name="cari">Cari</button>
	</form>
	<a href="tambah.php">Tambah Data</a>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Jurusan</th>
			<th>Email</th>
			<th>Gambar</th>
		</tr>
		<?php $i=1;?>
		<?php while($mhs=mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td><?= $i ?></td>
			<td>
				<a href="hapus.php?id=<?= $mhs["id"];?>">Hapus</a> |
				<a href="uabh.php?id=<?= $mhs["id"];?>">Ubah</a>
			</td>
			<td><?= $mhs["nama"];?></td>
			<td><?= $mhs["nim"];?></td>
			<td><?= $mhs["jurusan"];?></td>
			<td><?= $mhs["email"];?></td>
			<td><?= $mhs["gambar"];?></td>
		</tr>
		<?php $i++ ?>
		<?php } ?>
	</table>

</body>
</html>