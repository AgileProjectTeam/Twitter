<?php
error_reporting(-1);
ini_set('display_errors', 'On');
require_once $_SERVER['DOCUMENT_ROOT']."/ui/uiFunctionLibrary.php";
require_once $_SERVER['DOCUMENT_ROOT']."/db/dbFunctionLibrary.php";
require_once $_SERVER['DOCUMENT_ROOT']."/profile/profileFunctionLibrary.php";
$conn = connectToDb();
if(empty($_POST['isim'])) die("İsim?"); else $isim=$_POST['isim'];
$isim_my = mysqli_real_escape_string($conn, $isim);
if(empty($_POST['sifre'])) die("Şifre?"); else $sifre=$_POST['sifre'];
$sifre_my = mysqli_real_escape_string($conn, $sifre);
$res  = mysqli_query($conn,"SELECT 1 FROM User WHERE username='$isim_my' AND password='$sifre_my'");
$returnText="";
if(mysqli_num_rows($res)>0) { 
  $returnText = "<center>Your credentials were correct. Now you are logged in.</center>";
  setcookie("currentuserid", getUserIdFromName($isim), time() + (86400 * 30), "/");
  $_COOKIE['currentuserid']=getUserIdFromName($isim);
}
else { echo "<center>Credentials were not valid.</center>"; }
mysqli_free_result($res);

echo "<html><head>";

printTitle();
echo "</head><body>";
printHeader();
echo $returnText;
echo "</body>";
printFooter(); ?>