<?php
session_start();

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
//     header("location: login.php");
//     exit;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Quest ✈️ | Orders</title>
    <link rel="shortcut icon" href="logo/explorequest.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php

    include ("navbar.php");

    ?>
    <style>
        .hidden {
            position: relative;
            background: linear-gradient(100deg, #e9f8e9, #a1b6b0);
        }
    </style>
    <br>
    <br>
    <div class="container">
        <div class="row ">

            <table class="table col-lg-12">
                <h2 class="text-center border">All Orders</h2>
                <table>
                    <thead class="text-center">

                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Trip Name</th>
                            <th scope="col">transaction Id</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        if(isset($_SESSION['loggedin'])){
                        // Include connection script
                        include 'dbconnect/_dbconnect.php';

                        // Fetch all orders
                        $sql = "SELECT username, number, email, productname ,paymentid FROM customer_orders WHERE email ='$_SESSION[emailid]'";
                        $result = mysqli_query($conn, $sql);

                        // Check if there are any orders
                        if (mysqli_num_rows($result) > 0) {
                            // Output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["username"] . "</td>";
                                echo "<td>" . $row["number"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["productname"] . "</td>";
                                echo "<td>" . $row["paymentid"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td class='text-center' colspan='5'>No orders found.</td></tr>";
                        }
                    }
                    if(!isset($_SESSION["loggedin"])){
                        echo "
                        <tr><td class='text-center' colspan='5'>Please Login.</td></tr>
                        ";
                    }
                        ?>
                    </tbody>
                </table>
            </table>
    </div>
    </div>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 40px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>


    <style>
        .container {
            max-width: 960px;
        }
    </style>


    <?php
    include ("footer.php");
    ?>

</body>

</html>