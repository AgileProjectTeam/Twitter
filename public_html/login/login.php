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
<tr><td style="width:5%;"><b>Nick: </b></td><td><input type="text" name="isim" id="username" style="width:90%;"></td></tr>
<tr><td style="width:5%;"><b>Password: </b></td><td>        <input type="password" name="sifre" id="password" style="width:90%;"></td></tr>

<tr>
<td>


<input class="button-three" type="submit" id="login" formaction="onClickedLogin.php" value="Login" > 

</td></tr>
</table>
</form></center>
<br>
</body>
<?php printFooter(); ?>
</html>