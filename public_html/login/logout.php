<?php require $_SERVER['DOCUMENT_ROOT']."/ui/uiFunctionLibrary.php"; ?>
<?php unset($_COOKIE['currentuserid']); setcookie('currentuserid', null, -1, '/'); ?>
<html>
<head>
<?php printTitle(); ?>
</head>
<body>
<?php printHeader(); ?>
<center>
You have successfully logged out.
</center>
</body>
<?php printFooter(); ?>
</html>