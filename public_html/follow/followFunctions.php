<?php
require_once $_SERVER['DOCUMENT_ROOT']."/profile/profileFunctionLibrary.php";
function follow($followerid, $followingid){
  $followerid=intval($followerid);
  $followingid=intval($followingid);
  $conn = connectToDb();
  $res  = mysqli_query($conn,"INSERT INTO Follow (follower,following) VALUES ($followerid, $followingid)");
  if($res) return TRUE;
  return FALSE;
}

function unfollow($followerid, $followingid){
  $followerid=intval($followerid);
  $followingid=intval($followingid);
  $conn = connectToDb();
  $res  = mysqli_query($conn,"DELETE FROM Follow WHERE follower=$followerid AND following=$followingid");
  if($res) return TRUE;
  return FALSE;
}

function getFollowers($id){
  $id=intval($id);
  $conn = connectToDb();
  $res = mysqli_query($conn,"SELECT DISTINCT follower FROM Follow WHERE following=$id");
  $out=[];
  if($res) {
       $i=0;
       while($fieldinfo=mysqli_fetch_object($res)) {
         $out[$i] = $fieldinfo->follower;
         $i=$i+1;
       }
       mysqli_free_result($res);
  }
  return $out;
}

function getFollowings($id){
  $id=intval($id);
  $conn = connectToDb();
  $res = mysqli_query($conn,"SELECT DISTINCT following FROM Follow WHERE follower=$id");
  $out=[];
  if($res) {
       $i=0;
       while($fieldinfo=mysqli_fetch_object($res)) {
         $out[$i] = $fieldinfo->following;
         $i=$i+1;
       }
       mysqli_free_result($res);
  }
  return $out;
}

function isFollowing($sourceId, $targetId) {
   return in_array($targetId, getFollowings($sourceId));
}

function printKartvizit($id) {
   if(isLoggedIn()) {
      echo getUsername($id);
      if(isFollowing(getLoggedInUserId(),$id)) echo " <a href=\"/follow/unfollow.php?target=$id\">Unfollow</a>";
      else echo " <a href=\"/follow/follow.php?target=$id\">Follow</a>";
   } else {
      echo getUsername($id);
   }
}
?>