<?php
require_once $_SERVER['DOCUMENT_ROOT']."/db/dbFunctionLibrary.php";
function getUsername($id) {
  $id=intval($id);
  $conn = connectToDb();
  $res = mysqli_query($conn,"SELECT username FROM User WHERE userid=$id");
  if($res) {
       while($fieldinfo=mysqli_fetch_object($res))
         return $fieldinfo->username;
       mysqli_free_result($res);
  }
}

function isIdValid($id) {
   return strlen(getUsername($id)) > 0;
}

function getUserIdFromName($username) {
  $conn = connectToDb();
  $username_my = mysqli_real_escape_string($conn, $username);
  $res = mysqli_query($conn,"SELECT userid FROM User WHERE username='$username_my'");
  if($res) {
       while($fieldinfo=mysqli_fetch_object($res))
         return intval($fieldinfo->userid);
       mysqli_free_result($res);
  }
}

function getAge($id) {
  $id=intval($id);
  $conn = connectToDb();
  $res = mysqli_query($conn,"SELECT age FROM User WHERE userid=$id");
  if($res) {
       while($fieldinfo=mysqli_fetch_object($res))
         return intval($fieldinfo->age);
       mysqli_free_result($res);
  }
}
?>