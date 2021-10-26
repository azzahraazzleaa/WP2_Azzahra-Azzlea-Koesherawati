<html>
<head>
 <title>toko sepatu</title>
</head>
<body>
 <center>
 <form action="<?= base_url('toko/cetak'); ?>"
method="post">
 <table bgcolor='green'>
 <tr>
 <th colspan="3">
 Form Input Data sepatu
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>nama</th>
 <th>:</th>
 <td>
 <input type="text" name="nama" id="nama">
 </td>
 </tr>
 <tr>
 <th>no hp</th>
 <td>:</td>
 <td>
 <input type='text' name="nohp" id="nohp">
 </td>
 </tr>
 <tr>
 <th>merk sepatu</th>
 <td>:</td>
 <td>
 <select name="merksepatu" id="merksepatu">
 <option value="">Pilih</option>
 <option value="nike">nike</option>
 <option value="addidas">addidas</option>
 <option value="kickers">kickkers</option>
 <option value="eiger">eiger</option>
 <option value="bucherri">bucherri</option>
 </select>
 </td>
 </tr>
 <tr>
 <th>ukuran sepatu</th>
 <td>:</td>
 <td>
 <select name="ukuran" id="ukuran">
 <option value="">Pilih</option>
 <option value="30">30</option>
 <option value="32">32</option>
 <option value="35">35</option>
 <option value="40">40</option>
 <option value="44">44</option>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html>