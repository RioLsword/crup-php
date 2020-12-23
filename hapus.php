<?php
$conn=mysqli_connect("localhost","root","","test");
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$id");
header('location:index.php');

?>