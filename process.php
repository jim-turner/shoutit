<?php
include 'database.php'; ?>

<?php
$user = $_POST['user'];
$message = $_POST['message'];

?>



<?php
if(isset($_POST['submit'])){
    mysqli_query($con, "INSERT INTO shouts (user, message)
           VALUES ('$user', '$message')");
  }   
    
?>

