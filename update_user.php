<?php 
    session_start();
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
        header("location: login.php");
        exit;
      }
      include 'dbconnect/_dbconnect.php';
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
      }

      $sql = "UPDATE users SET name='$name',emailid='$email',number='$number' WHERE emailid='{$_SESSION['emailid']}'";
      if($conn->query($sql) === TRUE) {
        
        header('location: login.php');
        session_destroy();
        
        exit();
      }
      else{
        echo "Error updation record: " .$conn->error;
      }
?>