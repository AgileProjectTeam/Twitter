<?php require $_SERVER['DOCUMENT_ROOT']."ui/uiFunctionLibrary.php"; ?>
<html>
<head>

<?php printTitle(); ?>
<link rel="stylesheet" href="style.css" />

</head>
<body>
<?php printHeader(); ?>
<center><form action="/ui/OnClickLoginOrRegister.php" method="post">
<table border="1" style="table-layout: fixed;">
<tr><td><b>Username: </b></td><td><input type="text" name="name" style="width:200px;"></td></tr>
<tr><td><b>Password: </b></td><td>        <input type="password" name="name" style="width:200px;"></td></tr>
<tr><td></td><td><input type="submit" name="type" value="GiriÅ Yap"> <input type="submit" name="type" value="Ãye Ol"></td></tr>
</table>
</form></center>
<?php printFooter(); ?>
</body>
</html>