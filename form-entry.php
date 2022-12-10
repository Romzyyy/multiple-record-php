<h2>Tambah Data Produk</h2>

<form method="post" action="proses-simpan.php">
<table>
<tr bgcolor="#eee">
    <th width="50">Kode</th>
    <th width="200">Nama Barang</th>
    <th width="100">Harga</th>
 
<?php
$jum = $_POST['jum']; 

for ($i=1; $i<=$jum; $i++)
{
  echo "<tr>
            <td><input type='text' name='kode_barang[]' size='8'></td>
            <td><input type='text' name='nama_barang[]' size='25'></td>
            <td><input type='text' name='harga[]' size='10'></td>
  </tr>";
}
?> 
</table>

<input type="hidden" name="jum" value="<?php echo $jum; ?>">
<input type="submit" name="simpan" value="Simpan">
<input type="button" value="Kembali" onclick="location.href='form-input.php';">

</form>



