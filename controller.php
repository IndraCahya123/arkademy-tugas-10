<?php

$host = 'sql207.epizy.com';
$username = 'epiz_27616806';
$password = "5DYCUxtEfjz9";
$db = 'epiz_27616806_arkademy';

$conn = mysqli_connect($host, $username, $password, $db, 3306);

function lihatData($query)
{
    global $conn;

    $data = mysqli_query($conn, $query);
    
    $rows = [];

    if($data === null){
        return $rows;
    }else{    
        while($row = mysqli_fetch_assoc($data)){
            $rows[] = $row;
        }
        return $rows;
    }
}

function tambahData($data){
    global $conn;

    $nama_produk = htmlspecialchars($data['nama_produk']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $harga = htmlspecialchars($data['harga']);
    $jumlah = htmlspecialchars($data['jumlah']);

    $query = "INSERT INTO produk VALUES
                ('', '$nama_produk', '$keterangan', '$harga', '$jumlah');";
    
    $tambah = mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahData($data){
    global $conn;

    $id = $data['id'];
    $nama_produk = htmlspecialchars($data['nama_produk']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $harga = htmlspecialchars($data['harga']);
    $jumlah = htmlspecialchars($data['jumlah']);

    $query = "UPDATE produk SET 
                nama_produk = '$nama_produk',
                keterangan = '$keterangan',
                harga = '$harga',
                jumlah = '$jumlah'
                WHERE id = $id
                ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusData($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");

    return mysqli_affected_rows($conn);
}