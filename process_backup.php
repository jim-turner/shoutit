<?php
include 'database.php';

//Check to see if form was submitted

//if(isset($_POST['submit'])){
  //  $user = mysqli_real_escape_string($con, $_POST['user']);
//    $message = mysqli_real_escape_string($con, $_POST['message']);
  
    //set timezone
 //   date_default_timezone_set('America/New_York');
 //   $time = time();
    
    //Validate input
 //  if(!isset($user) || $user == '' || !isset($message) || $messages == ''){
   //    $error = "Please fill in your name and a message";
   //     header("Location: index.php?error=".urlencode($error));
     
  //  } else {


$user = $_POST['user'];
$message = $_POST['message'];
$time = $_POST['time'];

echo user;



       // $query = "INSERT INTO shouts (user, message, time)
        //    VALUES ('$user', '$message', '$time')";

//$result = mysqli_query($conn, $query);
        
      //  if(!mysqli_query($con, $query)){
       //     die('Error; ' . mysqli_error($con));
      //  } else {
       //     header("Location: index.php");
       //     exit();
        }
    }
}

?>

