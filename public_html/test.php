<?php
require_once $_SERVER['DOCUMENT_ROOT']."/profile/profileFunctionLibrary.php";
echo "test<br>";
echo "Returned:".getUsername(5);
echo "<br>testended";
require_once $_SERVER['DOCUMENT_ROOT']."/follow/followFunctions.php";
echo "<br>Unfollow test started<br>";
if(unfollow(1,2)) echo "Unfollowed";
else echo "Could not followed";
echo "<br>List followers test started<br>";
print_r(getFollowings(1));
echo "<br>Get user ID from user name test started<br>";
echo "User id of Salih is: ".getUserIdFromName("Salih");
require_once $_SERVER['DOCUMENT_ROOT']."/login/loginFunctions.php";
echo "<br>'Is logged in' test started:<br>";
if(isLoggedIn()) echo "true"; else echo "false";
echo "<br>'Logged in user id viewer' test is started:<br>";
echo getLoggedInUserId();
?>