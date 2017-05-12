<?php require_once $_SERVER['DOCUMENT_ROOT']."/ui/uiFunctionLibrary.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT']."/db/dbFunctionLibrary.php"; ?>
<html>
<head>
<?php printTitle(); ?>
</head>
<body>
<?php
printHeader();
$conn = connectToDb();
if(empty($_POST['isim'])) die("Nick?"); else $isim=$_POST['isim'];
$isim_my = mysqli_real_escape_string($conn, $isim);
if(empty($_POST['sifre'])) die("Password?"); else $sifre=$_POST['sifre'];
$sifre_my = mysqli_real_escape_string($conn, $sifre);
if(empty($_POST['age'])) die("Age?"); else $age=intval($_POST['age']);
if(empty($_POST['email'])) die("E-mail?"); else $email=$_POST['email'];
$email_my = mysqli_real_escape_string($conn, $email);
$res  = mysqli_query($conn,"INSERT INTO User (username,password,age,email) VALUES ('$isim_my', '$sifre_my', $age, '$email')");
if($res) echo "<center>You are registered. <a href=\"/login/login.php\">Click here</a> to login.</center>";
else echo "<center>Credentials were not valid.</center>";
mysqli_free_result($res);
?>
</body>
<?php printFooter(); ?>