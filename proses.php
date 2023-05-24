<?php
$nama=$_POST["nama_produk"];
$harga=$_POST["harga_produk"];
$merk=$_POST["merk_produk"];


include_once("koneksi.php");

$query= mysqli_query ($conn,"INSERT INTO `produk` (`nama_produk`,`harga_produk`,`merk_produk`) 
VALUES ('$nama','$harga','$merk');");

header("Location:produk.php")
?>