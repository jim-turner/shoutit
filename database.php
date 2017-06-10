<?php
//Connect to MySQL
$con = mysqli_connect ("localhost", "root", "root", "shoutit");

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}

?>