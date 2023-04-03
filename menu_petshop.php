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
      <li><a href="data_transaksi.php">Transaction Data</a></li>
    </ul>
  </div>
  <center>
  <a href="tambah_petshop.php">Tambah Data</a>
<table cellspacing="0" cellpadding="8"  width="100%" >
<tr>
  <th>No</th>
  <th>Menu Petshop</th>
  <th>Price</th>
</tr>
<?php
$no=1;
foreach($db_petshop->tampilpetshop() as $x){
  ?>
  <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x ['barang_petshop'];?></td>
    <td><?php echo $x ['harga'];?></td>
</tr>
<?php
}?>
</table>
</center>
</div>
</body>
</html>
