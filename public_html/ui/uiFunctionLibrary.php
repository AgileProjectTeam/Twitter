<?php

function printTitle() {
    echo '<title>Tweeter</title>';
    echo '<meta charset="utf-8" />';
    echo '<link rel="stylesheet" href="style.css" />';
    echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';
    echo "<style>";
    include "style.php";
    echo "</style>";
}

function printHeader() {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/profile/profileFunctionLibrary.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/follow/followFunctions.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/login/loginFunctions.php";
    echo '<table style="table-layout: fixed;"><tr>';
    printHeaderElement("Homepage", "/");
    if (isLoggedIn())
        printHeaderElement("Logout", "/login/logout.php");
    else
        printHeaderElement("Login", "/login/login.php");
    printHeaderElement("Register", "/login/register.php");
    $followingCount = sizeof(getFollowings(getLoggedInUserId()));
    $followerCount = sizeof(getFollowers(getLoggedInUserId()));
    $startText = "";
    $endText = "";
    if (!isLoggedIn()) {
        $startText = "<s>";
        $endText = "</s> (Offline)";
    }
    printHeaderElement("{$startText}Followings ($followingCount)$endText", "/follow/followings.php");
    printHeaderElement("{$startText}Followers ($followerCount)$endText", "/follow/followers.php");
    //echo "<td>Following (y)</td>";
    //printHeaderElement("My Page", "");
    if (!isLoggedIn())
        echo "<td>{$startText}My Page{$endText}</td>";
    else
        echo "<td><a href=\"/profile/profile.php?name=" . rawurlencode(getUsername(getLoggedInUserId())) . "\">" . getUsername(getLoggedInUserId()) . "</a></td>";
    echo '</tr></table><br><div class="container">';
}

function printHeaderElement($inText, $inLink) {
    echo "<td><a href=\"$inLink\">$inText</a></td>";
}

function printFooter() {
    echo '</div><br><footer><center>Bazi hakklar saklidir.</center></footer>';
}

?>