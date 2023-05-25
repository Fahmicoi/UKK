<html>
<head>
 <title>Aplikasi CRUD Inventaris Barang | SMK Telkom Lampung</title>
 <style>
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

.ubah{
    background-color: CD1818;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 7px;
}

.hapus {
    background-color: #F79327;
    color: white;
    padding:14px 25px ;
    text-align: center;
    text-decoration: none;
    display: inline-block ;
    border-radius: 7px;
}

.logoutbt{
    background-color: #5D9C59;
    color: white;
    padding:14px 25px ;
    text-align: center;
    text-decoration: none;
    display: inline-block ;
    border-radius: 7px;
    margin-top: 5px;
    margin-bottom: 10px;
}

.tambahbt{
    background-color: #5D9C59;
    color: white;
    padding:14px 25px ;
    text-align: center;
    text-decoration: none;
    display: inline-block ;
    border-radius: 7px;
    margin-top: 20px;
    margin-bottom: -15px;
    margin-left: 5px;s
}
 </style>
</head>
<body style="font-family:arial">

<b>
 <center><h2>Aplikasi Inventaris Barang <br /> SMK Telkom Lampung</h2></center>
 <hr />
<b>
 <b>Data Barang</b>
 <table style="width:100%" class="table1">
  <tr>
   <th>No</th>
   <th>Id</th>
   <th>Nama</th>
   <th>Jenis</th>
   <th>Jumlah</th>
   <th>Kondisi</th>
   <th>Keterangan</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>
  
  <?php 
  include "koneksi.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from barang");
  while($r = mysqli_fetch_array($data)){
   $id_barang = $r['id_barang'];
   $nama_barang = $r['nama_barang'];
   $jenis_barang = $r['jenis_barang'];
   $jumlah_barang = $r['jumlah_barang'];
   $kondisi_barang = $r['kondisi_barang'];
   $keterangan = $r['keterangan'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $id_barang; ?></td>
   <td><?php echo $nama_barang; ?></td>
   <td><?php echo $jenis_barang; ?></td>
   <td><?php echo $jumlah_barang; ?></td>
   <td><?php echo $kondisi_barang; ?></td>
   <td><?php echo $keterangan; ?></td>
   
  <td align=right width=70px><a class="ubah" href="ubah.php?id=<?php echo $id_barang;?>">Ubah</a></td>
  
  <td align=right width=70px><a class="hapus" href="hapus.php?id=<?php echo $id_barang;?>">Hapus</a></td>
  </tr>
  <?php 
  }
  ?>
 </table> 
</div>
</body>
<br>
<div class="logout">
    <a class="logoutbt" href="logout.php" style="margin-left:10px;">logout</a>
    <a class="tambahbt" href="tambah.php">Tambah Baru</a><br>
<div> 
</html>
