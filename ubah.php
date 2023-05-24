<?php 
include_once("koneksi.php");


$id = ''; 
if( isset( $_GET['id_produk'])) {
    $id = $_GET['id_produk']; 
} 
$query = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk='$id'");

while($produk = mysqli_fetch_array($query)){
    $nama_produk = $produk['nama_produk'];
    $harga_produk = $produk['harga_produk'];
    $merk_produk = $produk['merk_produk'];
}
?>
<form action="proses_ubah.php?id_produk=<?php echo $id ?>" method="post">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name ="produk_nama" value="<?=(isset($nama_produk)?$nama_produk:"")?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name ="produk_harga" value="<?=(isset($harga_produk)?$harga_produk:"")?>"></td>
        </tr>
        <tr>
            <td>Merk</td>
            <td><input type="text" name ="produk_merk" value="<?=(isset($merk_produk)?$merk_produk:"")?>"></td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" name ="submit" value="Ubah"></td>
        </tr>
    </table>
</form>