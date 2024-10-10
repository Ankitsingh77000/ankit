<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'dbconnect/_dbconnect.php';

    // $server = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "users";
    // $conn = mysqli_connect($server, $username, $password, $database);
    // if(!$conn){
    // //     echo "success";
    // // }
    // // else{
    //     die("Error". mysqli_connect_error());
    // }

    //main
    
    // $username = $_POST["username"];
    $emailid = $_POST["emailid"];
    $password = $_POST["password"];
    // $cpassword = $_POST["cpassword"];
    $exists = false;

    
    $sql = "SELECT * FROM users WHERE emailid='$emailid' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        // $_SESSION['name'] = $username;
        header("location: index.php");
    }
    else{
        $showError = "Invalid Credentials";
    }
    if($num==1){
        $sql = "SELECT name, emailid, number, gender FROM users WHERE emailid ='$emailid';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        // Assigning values to session variables
        $_SESSION['name'] = $row['name'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['emailid'] = $row['emailid'];
        $_SESSION['number'] = $row['number'];
    
        // Assigning values to local variables
        $name = $row['name'];
        $gender = $row['gender'];
        $emailid = $row['emailid'];
        $number = $row['number'];


    // $sql = "SELECT gender FROM users WHERE emailid='$emailid'";
    // $result = mysqli_query($conn, $sql);

    // $row = mysqli_fetch_assoc($result);
    // $gender = $row['gender'];

    // $_SESSION['gender'] = $gender;
    
    // $sql = "SELECT emailid FROM users WHERE emailid='$emailid'";
    // $result = mysqli_query($conn, $sql);

    // $row = mysqli_fetch_assoc($result);
    // $emailid = $row['emailid'];

    // $_SESSION['emailid'] = $emailid;

    // $sql = "SELECT name FROM users WHERE emailid='$emailid'";
    // $result = mysqli_query($conn, $sql);

    // $row = mysqli_fetch_assoc($result);
    // $username = $row['name'];

    // $_SESSION['name'] = $username;
    }


}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Explore Quest ✈️ | Login</title>
  <link rel="shortcut icon" href="logo/explorequest.png" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<header style="" >
    <nav>
      <a href="index.php"><img src="logo/explorequest.png" alt="websitelogo" class="logo"></a>
      <ul>
        <li>
          <a style="font-size:14px" href="login.php">Login</a>
        </li>
        <li>
          <a style="font-size:14px" href="signup.php">Sign up</a>
        </li>
      </ul>
    </nav>
    
    <?php
    if($login){
    echo '
    <div class="container">
    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>You are logged in.
    </div>
    </div>';
    }
    if($showError){
    echo '
    <div class="container">
    <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong>'. $showError.'
    </div>
    </div>';
    }
    ?>
    

</header>


<div class="login-container">
    <h2>Login</h2>
    
    <form action="login.php" method="post">
        <!-- <input type="text" name="username" placeholder="Name" required> -->
        <input type="email" for="email" name="emailid" placeholder="Email Id" required>
        <input type="password" name="password" placeholder="Password" required>
        <!-- <input type="password" name="cpassword" placeholder="Retype Password" required> -->
        <button type="submit">Login</button>
    </form>

</div>



    <style>
        body {
            background :linear-gradient(100deg, #e9f8e9, #a1b6b0);

            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    
        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding:30px;
            max-width: 500px;
            width: 100%;
            box-sizing: border-box;
        }
    
        .login-container h2 {
            text-align: center;
        }
    
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
    
        .login-container button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
    
        .login-container button:hover {
            background-color: #0056b3;
        }
        
    </style>
</body>
</html>