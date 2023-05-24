<?php
include "koneksi.php";
$query = mysqli_query($conn,"SELECT*FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
   -->
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>Manajemen Produk</h2><br>
    <a href="tambah.php" class="btn btn-primary">Tambah Produk</a><br><br>


<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Merk</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php if(mysqli_num_rows($query)>0) {?>
            <?php
                $no=1;
                while ($data = mysqli_fetch_array($query)) {
                ?>
        <tbody>
            <tr>
            <td><?php echo $no;?></td>
                    <td><?php echo $data["nama_produk"];?></td>
                    <td><?php echo $data["harga_produk"]?></td>
                    <td><?php echo $data["merk_produk"]?></td>
                    <td>
                        <a href="ubah.php?id_produk=<?php echo $data["id_produk"]; ?>">Edit</a> | 
                        <a href="proses_hapus.php?id_produk=<?php echo $data["id_produk"]; ?>"> Delete </a>
                    </td>
                    
            </tr>
    
                <?php $no++; }?>
        <?php }?>
    </table>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>