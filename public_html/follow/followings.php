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
if(!isLoggedIn()) echo "You are not logged in.";
else {
echo "<br><b><u>You are following these people:</b></u><br>";
   $followings = getFollowings(getLoggedInUserId());
   foreach($followings as $following) {
      echo "<br>".printKartvizit($following)."<br>";
   }
}
?>
</body>
</center>
<?php echo printFooter(); ?>
</html>