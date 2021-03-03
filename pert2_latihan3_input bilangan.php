<html>
<head>
<title>Operasi Aritmatika Dengan PHP</title>
</head>
<body>
<h2>Operasi Aritmatika Dengan PHP</h2>
<form action = "pert2_latihan3_hasil perhitungan.php" method = "post">
<table width = "10%" border = 0>
<tr>
<td align = "center"><font color = "red" size = 5>Nilai I</font></td>
<td></td>
<td align = "center"><font color = "red" size = 5>Nilai II</font></td>
<td></td>
</tr>

<tr>
<td><input type = "text" name = "nilai1"></td>
<td>
<select name = "operator">
<option value = "tambah">+</option>
<option value = "kurang">-</option>
<option value = "kali">*</option>
<option value = "bagi">/</option>
</select>
</td>

<td><input type = "text" name = "nilai2"></td>
<td><input type = "submit" name = "hitung" value = "submit"></td>
</tr>
</table>
</form>
</body>
</html>