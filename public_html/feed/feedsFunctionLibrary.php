<?php

function getFeedsFromUserIds($idArray) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/profile/profileFunctionLibrary.php";
    $idArrayImploded = implode(', ', $idArray);
    $conn = connectToDb();
    $res = mysqli_query($conn, "SELECT text, sender, DATE_FORMAT(time_, '%D %M %Y') as date FROM Message WHERE sender IN ($idArrayImploded) ORDER BY id DESC LIMIT 100");
    $out = [];
    $out_p = [];
    $out["0"] = '<div class=""><div class="">';
    if ($res) {
        $i = 1;
        while ($fieldinfo = mysqli_fetch_array($res)) {
            $out[$i] = "<div class='col-md-12 '><div class='box effect1'><h4>" . getUsername($fieldinfo['sender']) . " . <span>" . $fieldinfo['date'] . "</span> </h4><br> " . $fieldinfo['text'] . " </div></div>";
            $i++;
        }
        $i++;
        $out[$i] = '</div></div>';
        mysqli_free_result($res);
    }
    return $out;
}


function sendFeed($text) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/login/loginFunctions.php";
    if (!isLoggedIn())
        return false;
    $id = getLoggedInUserId();
    $conn = connectToDb();
    $text_my = mysqli_real_escape_string($conn, $text);
    $res = mysqli_query($conn, "INSERT INTO Message (text, sender) VALUES ('$text_my', $id)");
    if ($res)
        return true;
    else
        return false;
}

?>