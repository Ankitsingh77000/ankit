<?php
date_default_timezone_set('Asia/Kolkata');

$showAlert = false;
$signshowError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sign_submit'])) {

    include 'dbconnect/_dbconnect.php';

    $username = $_POST["fname"];
    $emailid = $_POST["emailid"];
    $number = $_POST["number"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $existSql = "SELECT * FROM `users` WHERE name = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

    $existEmailSql = "SELECT * FROM `users` WHERE emailid = '$emailid'";
    $resultEmail = mysqli_query($conn, $existEmailSql);
    $numExistEmailRows = mysqli_num_rows($resultEmail);

    if ($numExistRows > 0) {
        $signshowError = "username Already Exists.";
    } elseif ($numExistEmailRows > 0) {
        $signshowError = "Email Already Exists.";
    } else {
        $exists = false;
        if (($password == $cpassword)) {
            $sql = "INSERT INTO `users` ( `name`, `emailid`,`number`, `gender`, `password`, `dt`) VALUES ( '$username','$emailid','$number', '$gender', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
                sleep(1);
                // header("location: login.php");
            }
        } else {
            $signshowError = "Password do not match.";
        }
    }
}

$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {

    include 'dbconnect/_dbconnect.php';

    // $username = $_POST["username"];
    $emailid = $_POST["emailid"];
    $password = $_POST["password"];
    // $cpassword = $_POST["cpassword"];
    $exists = false;


    $sql = "SELECT * FROM users WHERE emailid='$emailid' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        // $_SESSION['name'] = $username;
        header("location: index.php");
    } else {
        $showError = "Invalid Credentials";
    }
    if ($num == 1) {
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

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<header class="hidden1" >
        <nav>
            <a href="index.php"><img src="logo/explorequest.png" alt="websitelogo" class="logo"></a>
            <ul>
                <li style=" color:#0b372dbb;">
                    <?php 
                    if (isset($_SESSION['loggedin'])){

                        echo $_SESSION['name'];
                    }
                    else{
                        echo '';
                    }
                    ?>
                </li>
                <li>
                    <?php
                        if (!isset($_SESSION['loggedin'])){
                            echo '<a href="login.php">Login</a>';
                        }
                        else{
                            // echo $_SESSION['name'];
                        } 
                    ?>
                </li>
                <li>
                    <!-- <a href="signup.php">Sign up</a> -->
                </li>
                <!-- <li>
                    <?php
                    $count=0;
                    if(isset($_SESSION['cart'])){
                        $count=count($_SESSION['cart']);
                    }
                    ?>
                    <a href="mycart.php" class="cart" style="margin:5px;">Cart (<?php echo $count ?>)</a>
                </li> -->
            </ul>
        </nav>
    </header>
    <style>
        .hidden1 li a{
            font-size: 15px;
        }
        @media (max-width:725px){
            .hidden1 li a{
                font-size: 10px;
            }
        }
    </style>
    <!-- <header style="">
        <nav>
            <a href="index.php"><img src="logo/explorequest.png" alt="websitelogo" class="logo"></a>
            <ul>
                <li>
                    <a style="font-size:14px" href="login.php">Login </a>
                </li>
               
            </ul>
        </nav>



    </header> -->
    <?php
    if ($showAlert) {
        echo '
    <div class="container">
    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>Account created Successfully.
    </div>
    </div>';
    }
    if ($showError) {
        echo '
    <div class="container">
    <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong>' . $showError . '
    </div>
    </div>';
    }
    if ($signshowError) {
        echo '
    <div class="container">
    <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong>' . $signshowError . '
    </div>
    </div>';
    }
    if($login){
        echo '
        <div class="container">
        <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>You are logged in.
        </div>
        </div>';
        }
    ?>

    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login</div>
            <div class="title signup">Signup</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <!-- Login form  -->

                <form action="login.php" method="post" class="login">
                    <div class="field">
                        <input type="email" name="emailid" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="login_submit" value="Login">
                    </div>
                    <div class="signup-link">Not a member? <a href="">Signup now</a></div>
                </form>
                <!-- Signup form -->

                <form action="login.php" method="post" class="signup" onsubmit="return validateForm()">
                    <div class="field">
                        <input type="text" for="fname" maxlength="20" name="fname" placeholder="Enter Your Username"
                            required>
                    </div>
                    <div class="field">
                        <input type="email" for="email" maxlength="40" name="emailid" placeholder="Enter Your Email id"
                            required>
                    </div>
                    <div class="field">
                        <input type="numberInput" id="numberInput" pattern="[0-9]{10}" maxlength="10" name="number"
                            placeholder="Mobile Number" required>
                    </div>
                    <label for="gender" style="margin-top: 10px;">Gender :</label>
                    <select type="gender" name="gender" style="width: 75%;height: 30px; text-align: center;margin: 4px;"
                        id="" required placeholder="Select Gender">
                        <option value="" disabled selected>Please Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <div class="field">
                        <input type="password" maxlength="25" name="password" placeholder="Enter Password" required>
                    </div>
                    <div class="field">
                        <input type="password" maxlength="25" name="cpassword" placeholder="Retype Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="sign_submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function validateForm() {
            var numberInput = document.getElementById('numberInput');
            var errorSpan = document.getElementById('error');
            var inputValue = numberInput.value;

            if (inputValue === '' || isNaN(inputValue) || inputValue < 1 || inputValue > 100 || inputValue.length > 10) {
                errorSpan.textContent = "Please enter a number between 1 and 100 with a maximum of 10 digits.";
                return false;
            } else {
                errorSpan.textContent = "";
                return true;
            }
        }

        function validateForm() {
            var gender = document.getElementById("gender").value;
            if (gender === "") {
                alert("Please select a gender");
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html,
        body {
            display: grid;
            height: 100%;
            width: 100%;
            place-items: center;
            background: -webkit-linear-gradient(left, #003366, #004080, #0059b3, #0073e6);
        }

        ::selection {
            background: #1a75ff;
            color: #fff;
        }

        .wrapper {
            overflow: hidden;
            max-width: 390px;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
        }

        .wrapper .title-text {
            display: flex;
            width: 200%;
        }

        .wrapper .title {
            width: 50%;
            font-size: 35px;
            font-weight: 600;
            text-align: center;
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .slide-controls {
            position: relative;
            display: flex;
            height: 50px;
            width: 100%;
            overflow: hidden;
            margin: 30px 0 10px 0;
            justify-content: space-between;
            border: 1px solid lightgrey;
            border-radius: 15px;
        }

        .slide-controls .slide {
            height: 100%;
            width: 100%;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            line-height: 48px;
            cursor: pointer;
            z-index: 1;
            transition: all 0.6s ease;
        }

        .slide-controls label.signup {
            color: #000;
        }

        .slide-controls .slider-tab {
            position: absolute;
            height: 100%;
            width: 50%;
            left: 0;
            z-index: 0;
            border-radius: 15px;
            background: -webkit-linear-gradient(left, #003366, #004080, #0059b3, #0073e6);
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        input[type="radio"] {
            display: none;
        }

        #signup:checked~.slider-tab {
            left: 50%;
        }

        #signup:checked~label.signup {
            color: #fff;
            cursor: default;
            user-select: none;
        }

        #signup:checked~label.login {
            color: #000;
        }

        #login:checked~label.signup {
            color: #000;
        }

        #login:checked~label.login {
            cursor: default;
            user-select: none;
        }

        .wrapper .form-container {
            width: 100%;
            overflow: hidden;
        }

        .form-container .form-inner {
            display: flex;
            width: 200%;
        }

        .form-container .form-inner form {
            width: 50%;
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .form-inner form .field {
            height: 50px;
            width: 100%;
            margin-top: 20px;
        }

        .form-inner form .field input {
            height: 100%;
            width: 100%;
            outline: none;
            padding-left: 15px;
            border-radius: 15px;
            border: 1px solid lightgrey;
            border-bottom-width: 2px;
            font-size: 17px;
            transition: all 0.3s ease;
        }

        .form-inner form .field input:focus {
            border-color: #1a75ff;
            /* box-shadow: inset 0 0 3px #fb6aae; */
        }

        .form-inner form .field input::placeholder {
            color: #999;
            transition: all 0.3s ease;
        }

        form .field input:focus::placeholder {
            color: #1a75ff;
        }

        .form-inner form .pass-link {
            margin-top: 5px;
        }

        .form-inner form .signup-link {
            text-align: center;
            margin-top: 30px;
        }

        .form-inner form .pass-link a,
        .form-inner form .signup-link a {
            color: #1a75ff;
            text-decoration: none;
        }

        .form-inner form .pass-link a:hover,
        .form-inner form .signup-link a:hover {
            text-decoration: underline;
        }

        form .btn {
            height: 50px;
            width: 100%;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }

        form .btn .btn-layer {
            height: 100%;
            width: 300%;
            position: absolute;
            left: -100%;
            background: -webkit-linear-gradient(right, #003366, #004080, #0059b3, #0073e6);
            border-radius: 15px;
            transition: all 0.4s ease;
            ;
        }

        form .btn:hover .btn-layer {
            left: 0;
        }

        form .btn input[type="submit"] {
            height: 100%;
            width: 100%;
            z-index: 1;
            position: relative;
            background: none;
            border: none;
            color: #fff;
            padding-left: 0;
            border-radius: 15px;
            font-size: 20px;
            font-weight: 500;
            cursor: pointer;
        }
    </style>
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });

    </script>
</body>

</html>