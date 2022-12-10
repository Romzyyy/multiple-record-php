<?php

if(isset($_POST['simpan'])){

$koneksi = mysqli_connect("localhost","root","","multiple") 
or die(mysqli_connect_error());
 
$jum = $_POST['jum'];  

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];

for ($i=0; $i<$jum; $i++)
{
    mysqli_query($koneksi,"insert into produk set
    kode_barang = '$kode_barang[$i]',
    nama_barang = '$nama_barang[$i]',
    harga = '$harga[$i]'") or die(mysqli_error($koneksi));
}
    echo "<script>alert('Data telah tersimpan');
    document.location='form-input.php'</script>";
}
 
?>