<?php 
	include 'koneksi.php';
	$db_petshop = new database;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../Toko_Hewan/styl.css">
</head>
<body>
<div class="all">
    <div class="head">
        <h1 class="judul">Kasir Pet Shop</h1>
    </div>
 
  <div class="nav">
    <ul>
      <li><a href="home.php">HOME</a></li>
      <li><a href="menu_petshop.php">Pet Shop Menu</a></li>
      <li><a href="data_pelanggan.php">Customers Name</a></li>
      <li><a href="data_transaksi.php">Data Transaksi</a></li>
    </ul>
  </div>
  <center>
    <a href="tambah_pelanggan.php">Tambah Data</a>
<table cellspacing="0" cellpadding="8" width="100%";">
        <form action="proses.php?aksi=tambahpelanggan" method="post">
            <tr>
                <td>Customers Name : </td>
                <td><input type="text" name="nama_pelanggan"></td>
            </tr>
            <tr>
                <td>Customers Addres : </td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Phone Number : </td>
                <td><input type="text" name="no_hape"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
</center> 
    </div>
    </div>
 </body>
 </html>