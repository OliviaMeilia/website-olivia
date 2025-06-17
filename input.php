<html>
<body style="background-color: #3E3862;">
<h1 style="color: #E6C4E7 ;text-align: center;">Input Data Pegawai</h1>
<form method="post" action="isian1.php">
<div style="place-items: center;">
<table border="1" style="background-color: #746488;">
<tr><td><center>Nama</center></td><td><center>Email</center></td><td><center>Jabatan</center></td><td><center>Jam Kerja</center></td></tr>
<?php
$n = $_POST['jum'];
for ($i = 1; $i <= $n; $i++) {
    echo "<tr><td>
              <input type='text' name='txtnama{$i}'>
              </td><td>
              <input type='text' name='txtemail{$i}'>
              </td><td>
              <input type='text' name='txtjabat{$i}'>
              </td><td>
              <select name='cbjam{$i}'>
              <option value='Shift 1'>Shift 1</option>
              <option value='Shift 2'>Shift 2</option>
              <option value='Shift 3'>Shift 3</option>
              </select>
              </td></tr>";
}
?>
</table>
<br />
<input type="hidden" name="jum2" value="<?php echo $n; ?>">
<input type="submit" value="Submit">
</div>
</form>
</body>
</html>
