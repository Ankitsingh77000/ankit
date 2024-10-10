<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
        $showError = "username Already Exists.";
    } elseif ($numExistEmailRows > 0) {
        $showError = "Email Already Exists.";
    } else {
        $exists = false;
        if (($password == $cpassword)) {
            $sql = "INSERT INTO `users` ( `name`, `emailid`,`number`, `gender`, `password`, `dt`) VALUES ( '$username','$emailid','$number', '$gender', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
                sleep(1);
                header("location: login.php");
            }
        } else {
            $showError = "Password do not match.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Quest ✈️ | Sign Up</title>
    <link rel="shortcut icon" href="logo/explorequest.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


    <header style="">
        <nav>
            <a href="index.php"><img src="logo/explorequest.png" alt="websitelogo" class="logo"></a>
            <ul>
                <li>
                    <a style="font-size:14px" href="login.php">Login </a>
                </li>
                <li>
                    <a style="font-size:14px" href="signup.php">Sign up</a>
                </li>
            </ul>
        </nav>

        <?php
        if ($showAlert) {
            echo '
    <div class="container">
    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>Your account is created now you can login.
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
        ?>


    </header>

    <div class="login-container">
        <h2>Sign Up</h2>

        <form action="signup.php" method="post" onsubmit="return validateForm()">
            <input type="text" for="fname" maxlength="20" name="fname" placeholder="Enter Your username" required>
            <!-- <input type="text" for="lname" maxlength="20" name="lname" placeholder="Last Name" required> -->
            <input type="email" for="email" maxlength="40" name="emailid" placeholder="Email Id" required>
            <input type="numberInput" id="numberInput" pattern="[0-9]{10}" maxlength="10" name="number" placeholder="Mobile Number" required>
            <label for="gender" style="margin-right:10px;">Gender :</label>
            <select type="gender" style="width: 50%;" class="text-center md-12 m-4" name="gender" id="" required
                placeholder="Select Gender">
                <option value="" disabled selected>Please Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <input type="password" maxlength="25" name="password" placeholder="Password" required>
            <input type="password" maxlength="25" name="cpassword" placeholder="Retype Password" required>
            <button type="submit">Sign Up</button>
        </form>
        <style>
           
        </style>
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
    </div>



    <style>
        body {
            background: linear-gradient(100deg, #e9f8e9, #a1b6b0);

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
            padding: 30px;
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