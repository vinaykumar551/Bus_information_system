<?php

$con = mysqli_connect("localhost", "root", "", "bustransport") or die(mysqli_error($con));
$select_query = "DELETE FROM feedback WHERE name = '$_GET[name]' ";
 if($con-> query($select_query)){
     echo "Deleted";
 header("refresh:1; url=index.php"); }
 else{
     echo "Not Deleted";
      header("refresh:1; url=index.php");
 }
?>
