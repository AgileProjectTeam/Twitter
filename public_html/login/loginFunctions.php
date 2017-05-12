<?php
function isLoggedIn() {
  if(!isset($_COOKIE['currentuserid'])) return false;
  return true;
}
function getLoggedInUserId() {
  if(isLoggedIn()) return intval($_COOKIE['currentuserid']);
  return false;
}
?>