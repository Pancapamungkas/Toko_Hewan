<?php 
class database{
    var $host = 'localhost';
    var $name = 'root';
    var $pw = '';
    var $db = 'db_petshop';

    function _construct(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        mysqli_select_db($koneksi, $this->db);
    }
    // koneksi petshop
    function tampilpetshop(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $data = mysqli_query($koneksi, "SELECT * FROM menu_petshop");
        $hasil = [];
        while($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
        }
      
        // koneksi pelanggan
        function tampilpelanggan(){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM pelanggan");
            $hasil = [];
            while($d = mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }

        // koneksi data_transaksi
        function tampiltransaksi(){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT transaksi.id_transaksi, transaksi.kuantitas, transaksi.total_pembayaran, pelanggan.id_pelanggan, pelanggan.nama_pelanggan, 
            pelanggan.alamat, pelanggan.no_hape, menu_petshop.id_petshop, menu_petshop.barang_petshop, menu_petshop.harga FROM pelanggan INNER JOIN transaksi ON 
            pelanggan.id_pelanggan= transaksi.id_pelanggan INNER JOIN menu_petshop ON menu_petshop.id_petshop= transaksi.id_petshop ORDER by id_transaksi");
             $hasil = [];
            while($d = mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }

        //tambah data petshop
        function tambahpetshop($barang_petshop, $harga){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            mysqli_query($koneksi, "INSERT INTO menu_petshop VALUES('', '$barang_petshop', '$harga')");
        }

         //tambah data pelanggan
         function tambahpelanggan($nama_pelanggan, $alamat, $no_hape){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('', '$nama_pelanggan', '$alamat', '$no_hape')");
        }

          // Koneksi data transaksi
          function tambahtransaksi($id_pelanggan, $id_petshop, $kuantitas, $total_pembayaran){
            $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
            mysqli_query($koneksi, "INSERT INTO transaksi VALUES('', '$id_pelanggan', '$id_petshop', '$kuantitas', '$total_pembayaran')");
    
        }
}
?>