<?php require $_SERVER['DOCUMENT_ROOT']."/ui/uiFunctionLibrary.php"; ?>
<html>
<head>
<?php printTitle(); ?>
</head>
<body>
<?php printHeader(); ?>


<br>

<center><form method="post">
<table border="1" style="table-layout: fixed;">
<tr><td style="width:5%;"><b>Nick: </b></td><td><input type="text" name="isim" id="username" style="width:250px;"></td></tr>
<tr><td style="width:5%;"><b>Password: </b></td><td>        <input type="password" name="sifre" id="password" style="width:250px;"></td></tr>
<tr><td style="width:5%;"><b>Age: </b></td><td>        <input type="number" step="1" name="age" id="age" style="width:250px;"></td></tr>
<tr><td style="width:5%;"><b>E-mail address: </b></td><td>        <input type="text" name="email" id="email" style="width:250px;"></td></tr>

<tr>
<td>
<input class="button-three" type="submit" id="register" formaction="onClickedRegister.php" value="Register">
</td></tr>
</table>
</form></center>
<br>
</body>
<?php printFooter(); ?>
</html>