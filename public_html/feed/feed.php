<?php error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/ui/uiFunctionLibrary.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/profile/profileFunctionLibrary.php"; ?>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/follow/followFunctions.php"; ?>
<center>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/login/loginFunctions.php";
    if (!isLoggedIn())
        echo "Please log in to see the feed from your followers.<br>"; // boolean
    else {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/feed/feedsFunctionLibrary.php";
        if (!empty($_POST['text'])) {
            if (sendFeed($_POST['text']))
                echo "<b>Your message is successfully shared.</b><br><br>";
            else
                echo "ERROR: We could not share your message. There was a server error.";
        }
        $idsToFetchFeeds = getFollowings(getLoggedInUserId());
        $idsToFetchFeeds[sizeof($idsToFetchFeeds)] = getLoggedInUserId();
        $feeds = getFeedsFromUserIds($idsToFetchFeeds);
        $outText = "<div></div>";
        foreach ($feeds as $res) {
            $outText .= $res;
        }
        /*    
        for ($i = 0; $i < sizeof($feeds); $i++) {
            $outText .= $feeds[$i] . "<br><br>";
        }
        */
                echo '<div class="container"><div class="row"><div class="col-md-5 ">
<div id="ffs">
  <form  method="post">
  <input type="text" name="text" class="txt" id="text" style="width:55%;" placeholder="Your message">
  <input class="button-three" type="submit" id="login" formaction="index.php" value="Share" >
  </form>
</div></div><div class="col-md-7 ">
';
        echo $outText;
        echo "</div></div></div><br><br>";

    }
    ?>
</center>