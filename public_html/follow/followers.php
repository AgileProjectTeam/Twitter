<?php error_reporting(E_ALL);
ini_set('display_errors', 1); ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/ui/uiFunctionLibrary.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/profile/profileFunctionLibrary.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/follow/followFunctions.php"; ?>
<html>
<head>
<?php printTitle(); ?>
</head>
<body>
<?php printHeader(); ?>
<center>
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/login/loginFunctions.php";
if(!isLoggedIn()) echo "You are not logged in."; // boolean
else {
echo "<br><b><u>These people are following you:</b></u><br>";
   $followers = getFollowers(getLoggedInUserId());
   foreach($followers as $follower) {
      echo "<br>".printKartvizit($follower)."<br>";
    }
}
?>
</body>
</center>
<?php echo printFooter(); ?>
</html>