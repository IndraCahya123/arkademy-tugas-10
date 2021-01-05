<?php 

require('controller.php');

if(isset($_POST['submit'])){
    if (tambahData($_POST) > 0) {
        echo ("<script>
        alert('Data Berhasil Ditambahkan');
        document.location.href = 'index.php';
    </script>");
    } else {
        echo ("<script>
        alert('Data Gagal Ditambahkan');
        document.location.href = 'index.php';
    </script>");
    }
    
}

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
    <div class="container p-0">
        <h1 style="text-align: center;">Tambah Data Produk</h1> <br>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Produk</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Nama Produk" name="nama_produk" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Keterangan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" rows="3" placeholder="Tulis tentang penjelasan produk" required></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Harga</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Harga Produk" name="harga" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Jumlah Produk" name="jumlah" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>