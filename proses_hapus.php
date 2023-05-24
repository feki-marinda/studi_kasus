<?php
include_once("koneksi.php");

$id = $_GET["id_produk"];

$result = mysqli_query($conn, "DELETE FROM produk WHERE id_produk='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:produk.php");
?>