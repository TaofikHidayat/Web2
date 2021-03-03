<?php
//ambil nilai dari form input
$bil1 = $_POST['nilai1'];
$bil2 = $_POST['nilai2'];
$opr = $_POST['operator'];

//proses
switch($opr) {
case "tambah":
$hasil = $bil1 + $bil2;
$tanda = "+";
break;

case "kurang":
$hasil = $bil1 - $bil2;
$tanda = "-";
break;

case "kali":
$hasil = $bil1 * $bil2;
$tanda = "*";
break;

case "bagi":
$hasil = $bil1 / $bil2;
$tanda = "/";
break;
}

//output
echo "<h3> Hasil Perhitungan Operasi Aritmatika Dengan PHP :</h3>";
echo "<b>$bil1</b> $tanda <b>$bil2</b> = <b>$hasil</b><br>";
echo "<br><a href = 'pert2_latihan3_input bilangan.php'>hitung lagi</a>";
?>