<html>
<head>
<title>Penggunaan Switch - Case</title>
</head>
<body>
Hari ini :
<?php
$nama_hari = date ("1");
Switch ($nama_hari){
Case "Sunday";
Print("Minggu");
print "Waktu untuk istirahat";
Break;

Case "Monday";
Print ("Senin <br>");
print "Meeting awal minggu jam 08.00";
Break;

Case "Tuesday";
Print ("Selasa <br>");
print "Pembukaan Workshop Diklat";
Break;

Case "Wednesday";
Print ("Rabu <br>");
print ("Seminar Launching Window Vista di JHCC");
Break;

Case "Thrusday";
Print ("Kamis <br>");
print "Pertemuan dengan Mahasiswa";
Break;

Case "Friday";
Print ("Jum'at");
print "Jogging Bersama";
Break;

Default :
Print ("Sabtu <br>");
print "Survey harga ke Dusit, Mangga Dua";
}
?>
</body>
</html>