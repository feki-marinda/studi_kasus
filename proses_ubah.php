<?php
include_once("koneksi.php");

$id = $_GET["id_produk"];

$nama_produk = $_POST['produk_nama'];
$harga_produk = $_POST['produk_harga'];
$merk_produk = $_POST['produk_merk'];

$result = mysqli_query($conn, "UPDATE `produk` SET nama_produk='$nama_produk',harga_produk='$harga_produk',merk_produk='$merk_produk' WHERE id_produk='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:produk.php");
?>