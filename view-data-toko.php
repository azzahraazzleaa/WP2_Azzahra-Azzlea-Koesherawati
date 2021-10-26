<!DOCTYPE html>
<html>
<head>
 <title>Data pembelian</title>
</head>
<body>
 <center>
 <table bgcolor='green'>
 <tr>
 <th colspan="3">
 Data pembelian
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <td>nama</td>
 <td>:</th>
 <td>
 <?= $nama; ?>
 </td>
 </tr>
 <tr>
 <td>no hp</td>
 <td>:</td>
 <td>
 <?= $nohp; ?>
 </td>
 </tr>
 <tr>
 <td>merk sepatu</td>
 <td>:</td>
 <td>
 <?= $merksepatu; ?>
 </td>
 </tr>
 <tr>
 <td>Harga</td>
 <td>:</td>
 <td>
 <?=$harga; ?>
 </td>
 </tr>
 <tr>
 <td>ukuran sepatu</td>
 <td>:</td>
 <td>
 <?=$ukuran; ?>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <button color=blue><a href="<?= base_url('toko') 
?>">Kembali</a></button>
 </td>
 </tr>
 </table>
 </center>
</body>
</html>