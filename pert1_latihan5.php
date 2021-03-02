<?php
//ini adalah komentar dalam satu baris

/* kalau yang ini kometar dalam banyak baris,
yang baru akan selesaisetelah diakhiri dengan */
?>

<html>
<head>
<title>Test Penyisipan PHP Pada HTML</title>
</head>
<body>
Kapal Asing, Sialakan identifikasikan diri anda ! <br>
<?php
//Berikut ini adalah inisiasi beberapa variable
$namad = "Jean";
$namat = "Luc";
$namab = "Piccard";
$nilai1 = 25;
$nilai2 = 50;
$hasil = $nilai1*$nilai2;
$a = 2;
$b = 3;
$hsl = pow($a,$b);
?>
<b>Ini adalah kapal Federasi Planet USS Enterprise.<br>
<?php
echo "Saya $namab, $namad $namat $namab, kapten kapal.</b><br>";
echo "$nilai1 x $nilai2 = $hasil<br>";
echo "$a^$b = $hsl";
?>
</body>
</html>