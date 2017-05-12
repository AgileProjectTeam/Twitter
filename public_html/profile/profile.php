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
if(!isLoggedIn()) echo "You need to be logged in to see this profile."; // boolean
else {
$profileName=$_GET['name'];
$profileId=getUserIdFromName($profileName);
echo "<b><font style=\"font-size:35px\">";
printKartvizit($profileId);
echo "</font></b>";
echo "<br><br><br>";
echo "<br><b><u>Age of $profileName:</b></u><br><br>";
if(getAge($profileId)>0) echo getAge($profileId)."<br>"; else echo "Not specified<br>";
echo "<br><b><u>Followers of $profileName:</b></u><br><br>";
   $followers = getFollowers($profileId);
   foreach($followers as $follower) {
      echo "<br>".printKartvizit($follower)."<br>";
    }
echo "<br><b><u>Followings of $profileName:</b></u><br><br>";
   $followings = getFollowings($profileId);
   foreach($followings as $following) {
      echo "<br>".printKartvizit($following)."<br>";
    }
}
?>
</body>
</center>
<?php echo printFooter(); ?>
</html>