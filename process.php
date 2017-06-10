<?php
include 'database.php'; ?>

<?php
$user = $_POST['user'];
$message = $_POST['message'];

?>


<?php
if(isset($_POST['submit'])){
    
    
    
    
  $sql = "INSERT INTO shouts (user, message)
           VALUES ('$user', '$message')";
    
    
    $result = mysqli_query($con, $sql);
      
    
    
     header("Location: index.php");  
    
    
}


        



?>

