<?php require "ui/uiFunctionLibrary.php"; ?>
<html>
<?php printTitle(); ?>
<head>
<title>Tweeter</title>
</head>
<body>
<?php printHeader(); ?>
<br>
<?php require_once $_SERVER['DOCUMENT_ROOT']."/feed/feed.php"; ?>
<center>This is our brand new index.php</center>
<br>
<?php printFooter(); ?>
</body>
</html>