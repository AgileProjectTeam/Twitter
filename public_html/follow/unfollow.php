<?php
require_once $_SERVER['DOCUMENT_ROOT']."/ui/uiFunctionLibrary.php";
require_once $_SERVER['DOCUMENT_ROOT']."/profile/profileFunctionLibrary.php";
require_once $_SERVER['DOCUMENT_ROOT']."/follow/followFunctions.php";
require_once $_SERVER['DOCUMENT_ROOT']."/login/loginFunctions.php";
?>
<html>
<head>
<?php printTitle(); ?>
</head>
<body>
<?php printHeader(); ?>
<center>
<?php
if(isset($_GET['target'])) $target = $_GET['target']; else $target=-1;
if(!isIdValid($target)) echo "User not found.";
else if(unfollow(getLoggedInUserId(), $target)) echo "You are no longer following ".getUsername($target);
else echo "Something went wrong while unfollowing ".getUsername($target);
?>
</body>
</center>
<footer>
<?php echo printFooter(); ?>
</footer>
</html>