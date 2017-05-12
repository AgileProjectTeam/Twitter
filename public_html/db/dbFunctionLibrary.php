<?php
function connectToDb() {
   /*try {
      $conn = new PDO("mysql:host=localhost;dbname=id1092878_twitter", "id1092878_agile", "agile123");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e)
   {
       echo "Connection failed: " . $e->getMessage();
       die();
   }
   return $conn;*/
   $conn = new mysqli("localhost", "id1092878_agile", "agile123", "id1092878_twitter");
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
   return $conn;
}
?>