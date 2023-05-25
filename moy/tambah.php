<html>
<head>
 <title>Aplikasi Inventaris Barang | SMK Telkom Lampung</title>
</head>
<body style="font-family:arial">
 <center><h2>Aplikasi Inventaris Barang <br /> SMK Telkom Lampung</h2></center>
 <hr />
 <b>Tambah Data Baru</b>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" size="50" required></td>
            </tr>
            <tr> 
                <td>Jenis Barang</td>
                <td><input type="text" name="jenis_barang" size="50" required></td>
            </tr>
            <tr> 
                <td>Jumlah Barang</td>
                <td><input type="text" name="jumlah_barang" size="50" required></td>
            </tr>
            <tr> 
                <td>Kondisi Barang</td>
                <td><input type="text" name="kondisi_barang" size="50" required></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" size="50" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_barang = $_POST['nama_barang'];
        $jenis_barang = $_POST['jenis_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $kondisi_barang = $_POST['kondisi_barang'];
        $keterangan = $_POST['keterangan'];

        // include database connection file
        include "koneksi.php";

        // Insert user data into table
    $tambah_barang = "insert into barang values('','$nama_barang','$jenis_barang','$jumlah_barang','$kondisi_barang','$keterangan')";
     $kerjakan=mysqli_query($konek, $tambah_barang);
     if($kerjakan)
     {
     // Show message when user added
     echo "Barang berhasil ditambahkan. <a href='index.php'>Lihat Data Barang</a>";
     }
     else
      {
      echo "Gagal bro";
     }
    }
    ?>
</body>
</html>
