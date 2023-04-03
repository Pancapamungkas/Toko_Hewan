<?php
include 'koneksi.php';
$db_petshop= new database;

$aksi = $_GET['aksi'];
//tambah data petshop
if($aksi == "tambahpetshop") {
    $db_petshop->tambahpetshop($_POST['barang_petshop'], $_POST['harga']);
    header("location:menu_petshop.php");
}
//tambah data pelanggan
if($aksi == "tambahpelanggan") {
    $db_petshop->tambahpelanggan($_POST['nama_pelanggan'], $_POST['alamat'], $_POST['no_hape']);
    header("location:data_pelanggan.php");
}
//tambah data transaksi
if ($aksi == "tambahtransaksi") {
    $db_petshop->tambahtransaksi($_POST['id_pelanggan'], $_POST['id_petshop'],$_POST['kuantitas'],$_POST['total_pembayaran']);
    
    header("location:data_transaksi.php");
}







?>


