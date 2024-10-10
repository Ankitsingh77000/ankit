<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
    header("location: login.php");
    exit;
}
unset($_SESSION['cart']);

// include 'dbconnect/_dbconnect.php';
// $notransaction =null;
// $username = $_SESSION['name'];
// $sql = "SELECT transaction FROM orders WHERE username ='$username' ORDER BY transaction DESC LIMIT 1";
// $result = mysqli_query($conn, $sql);
// $transactions = array(); // Initialize an array to store transactions

// if (mysqli_num_rows($result) > 0) {
//     // Store transactions in the array
//     while ($row = mysqli_fetch_assoc($result)) {
//         $transactions[] = $row["transaction"];
//     }
// } else {
//      $notransaction="No transactions found.";
// }

// // Assign transactions array to a global variable
// $GLOBALS['user_transactions'] = $transactions;

// // mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Quest ✈️ | ThankYou</title>
  <link rel="shortcut icon" href="logo/explorequest.png" type="image/x-icon">
</head>

<body>



    <?php
    include ("navbar.php");

    ?>

    <div class="thankyou">
        <div class="heading">
            <img src="logo/hearticon.png" alt="">
            <h1>Thank You For placing the order.!</h1>
            <p>You will get all your order information in your email address.</p>
            <p style="margin-top:20px;">Your Payment id is :
            <p>
                <p><?php 
                // echo $_SESSION['paymentid'];
                ?></p>
            <p style="color:red;"><?php 
            // foreach ($user_transactions as $transaction) {
            //     echo   $transaction ;
            // }echo $notransaction
            echo $_SESSION['paymentid'];
            ?></p>
        </div>
    </div>


    <style>
        .hidden {
            background: linear-gradient(100deg, #e9f8e9, #a1b6b0);
            margin-bottom: 0px !important;
            height: 100px;
            position: relative;
        }

        .thankyou {

            /* margin-top: 100px; */
            width: 100%;
            height: 50vh;
            background: linear-gradient(100deg, #45ced6, #3af4b9);

        }

        .heading {
            color: white;
            position: relative;
            top: 30%;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>

    <?php
    include ("footer.php");
    ?>
</body>

</html>