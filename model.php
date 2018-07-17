<?php

    function getMedia(){
// $conn = mysqli_connect('localhost', 'schahnaz', 'root', 'symfonyDay2');
require_once("config.php");

 // Performing SQL query
 $query='SELECT * FROM media';
 $result = mysqli_query($conn, $query);

 // Filling up the array
 $media = array();
 while ($row = mysqli_fetch_array($result))
 {
  $media[] = $row;
 }

 // Closing connection
 mysqli_close($conn);
 return $media;
}

