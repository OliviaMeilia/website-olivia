<html>
<Body>
<?php
$conn = mysqli_connect("localhost", "root", "", "input");
$n = $_POST['jum2'];
for ($i = 1; $i <= $n; $i++) {
    $vnama = $_POST["txtnama{$i}"];
    $vemail = $_POST["txtemail{$i}"];
    $vjabatan = $_POST["txtjabat{$i}"];
    $vjam = $_POST["cbjam{$i}"];
    if (!empty($vnama) && !empty($vemail) && !empty($vjabatan) && !empty($vjam)) {
        $query = mysqli_query($conn, "INSERT INTO toko(nama, email, jabatan, `jam kerja`) VALUES ('$vnama', '$vemail', '$vjabatan', '$vjam')");
        if ($query)
            echo "Input Data Sukses<br>";
        else
            echo "Input Data Gagal<br>";
    }
}
?>
</Body>
</html>
