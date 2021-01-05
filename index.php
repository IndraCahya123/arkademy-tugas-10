<?php 

require('controller.php');

$produks = lihatData("SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkademy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light p-5">
    <div class="container">
        <header class="d-flex justify-content-between align-items-center w-100 p-3 border-bottom border-dark">
            <h1 style="text-align: center;">Arkademy</h1>
            <a type="button" class="btn btn-primary" href="tambah_data.php">Tambah Data</a>
        </header>

        <main class="d-flex justify-content-center m-4">
            <table class="table" border="1">
                <thead class="thead-dark" style="text-align: center;">
                    <tr>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php foreach($produks as $produk) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $produk['nama_produk'] ?></th>
                        <td><?= $produk['keterangan'] ?></td>
                        <td><?= $produk['harga'] ?></td>
                        <td><?= $produk['jumlah'] ?></td>
                        <td style="text-align: center;">
                            <a href="update.php?id=<?= $produk['id'] ?>" type="button" class="btn btn-success">Ubah</a>
                            <a href="hapus.php?id=<?= $produk['id'] ?>" type="button" 
                            onclick="return confirm('yakin untuk menghapus data ini ?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </main>

        <footer>
        
        </footer>
    </div>
</body>
</html>