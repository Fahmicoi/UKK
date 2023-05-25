<?php
// include database connection file
include "koneksi.php";

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama_barang=$_POST['nama_barang'];
    $jenis_barang=$_POST['jenis_barang'];
    $jumlah_barang=$_POST['jumlah_barang'];
    $kondisi_barang=$_POST['kondisi_barang'];
    $keterangan=$_POST['keterangan'];

    // update user data
    $result = mysqli_query($konek, "UPDATE barang SET nama_barang='$nama_barang',jenis_barang='$jenis_barang',jumlah_barang='$jumlah_barang',kondisi_barang='$kondisi_barang',keterangan='$keterangan' WHERE id_barang=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($konek, "SELECT * FROM barang WHERE id_barang=$id");

while($r = mysqli_fetch_array($result))
{
    $nama_barang = $r['nama_barang'];
    $jenis_barang = $r['jenis_barang'];
    $jumlah_barang = $r['jumlah_barang'];
    $kondisi_barang = $r['kondisi_barang'];
    $keterangan = $r['keterangan'];
}
?>


<html>
<head>
 <title>Aplikasi Inventaris Barang | SMK Telkom Lampung</title>
</head>
<body style="font-family:arial">
 <center><h2>Aplikasi Inventaris Barang <br /> SMK Telkom Lampung</h2></center>
 <hr />
 <b>Edit Data Barang</b>
    <br/><br/>
    <form name="update_user" method="post" action="ubah.php">
        <table border="0">
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" size="50" name="nama_barang" value="<?php echo $nama_barang;?>"></td>
            </tr>
            <tr> 
                <td>Jenis Barang</td>
                <td><input type="text" size="50" name="jenis_barang" value="<?php echo $jenis_barang;?>"></td>
            </tr>
            <tr> 
                <td>Jumlah Barang</td>
                <td><input type="text" size="50" name="jumlah_barang" value="<?php echo $jumlah_barang;?>"></td>
            </tr>
            <tr> 
                <td>Kondisi Barang</td>
                <td><input type="text" size="50" name="kondisi_barang" value="<?php echo $kondisi_barang;?>"></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" size="50" name="keterangan" value="<?php echo $keterangan;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
