<html>
<head>
 <title>Aplikasi CRUD Inventaris Barang | SMK Telkom Lampung</title>
 <style>
    body{
        background-color: #F0F8FF;
    }

 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}

.login-container{
    border: 1px solid #444;
    border-radius: 5px;
    width: 75%;
    margin: 0 auto;
    margin-top: 150px;
}

.logout{
    padding-top: 10px;
}
 </style>
</head>
<body style="font-family:arial">
<div class="login-container">
 <center><h2>Aplikasi Inventaris Barang <br /> SMK Telkom Lampung</h2></center>
 <hr />
 <a href="tambah.php"><input type="button" value="+ Tambah Data Baru"></a><br /><br />
 <b>Data Barang</b>
 <table style="width:100%" class="table1">
  <tr>
   <th>No</th>
   <th>Kode</th>
   <th>Nama</th>
   <th>Harga</th>
   <th>Stok</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>
  
  <?php 
  include "koneksi.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from barang");
  while($r = mysqli_fetch_array($data)){
   $id_barang = $r['id_barang'];
   $nama_barang = $r['nama_barang'];
   $harga_barang = $r['harga_barang'];
   $stok_barang = $r['stok_barang'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $id_barang; ?></td>
   <td><?php echo $nama_barang; ?></td>
   <td><?php echo $harga_barang; ?></td>
   <td><?php echo $stok_barang; ?></td>
  <td align=right width=70px><a href="ubah.php?id=<?php echo $id_barang;?>"><input type="button" value="Ubah"></a></td>
  <td align=right width=70px><a href="hapus.php?id=<?php echo $id_barang;?>"><input type="button" value="Hapus"></a></td>
  </tr>
  <?php 
  }
  ?>
 </table> 
</body>
<div class="logout">
<a href="logout.php"><input type="button" value="Logout"></a>
</html>