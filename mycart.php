<?php
session_start();

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
//     header("location: login.php");
//     exit;
// }
include "loading.php";
// session_destroy();
// $showAlert = false;
// $showError = false;
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     include 'dbconnect/_dbconnect.php';

//     $username = $_POST['name'];
//     $firstname = $_POST["fname"];
//     $lastname = $_POST["lname"];
//     $number = $_POST["number"];
//     $email = $_POST["email"];
//     $address = $_POST["address"];
//     $state = $_POST["state"];
//     $city = $_POST["city"];
//     $tripname = $_POST['item_name'];
//     $transaction = $_POST['rand'];
//     $zipcode = $_POST["zipcode"];
//     $couplename = $_POST["couplename"];
//     $couplegmail = $_POST["couplegmail"];


//     // (`srno`, `fname`, `lname`, `number`, `email`, `address`, `city`, `state`, `zipcode`, `dt`)

//     $email__id = true;
//     if ($email__id) {
//         $sql = "INSERT INTO `orders` VALUES ('null', '$username','$firstname', '$lastname', '$number', '$email', '$address', '$city', '$state', '$zipcode','$tripname','$transaction','$couplename','$couplegmail', current_timestamp())";

//         $result = mysqli_query($conn, $sql);
//         if ($result) {
//             $showAlert = true;
//         }
//     }
//     if ($showAlert == true) {
//         echo "
//         <script>window.location.href='thankyou.php';</script>";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Quest ✈️ | Cart</title>
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
            background: linear-gradient(100deg, #e9f8e9, #a1b6b0);
        }
    </style>
    <br>
    <br>
    <div class="container">
        <dvi class="row ">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>Cart</h1>
            </div>

            <div class="col-lg-12 my-4">

                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $total = 0;
                        $key = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                // print_r($value);
                                $total = $total + $value['Price'];
                                $sr = $key + 1;
                                echo "<tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]</td>
                                <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='1'></td>
                                <td>
                                    <form action='manage_cart.php' method='POST'>    
                                        <button name='remove_item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                </td>
                                <div class=cart_container>
                                <td><img src=$value[img]></td>
                                </div>
                                </tr>
                                ";
                            }
                        }
                        ?>
                        <style>
                            .cart_container {
                                width: 100%;
                            }

                            td img {
                                max-width: 400px !important;
                                width: 100%;
                            }
                        </style>

                    </tbody>
                </table>

            </div>
            <!-- <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    
                    <h5 class="text-right">
                        <?php echo $total ?>
                    </h5>
                    <br>
                    <form action="">
                        <button class="btn btn-primary btn-b1">Make purchase</button>
                    </form> 
                </div>
            </div> -->
        </dvi>
    </div>

    <div class="container " style="align-items:center;">


        <!-- <div class="my-4 g-5 ">



            </div> -->
        <div class="container">
            <h4 class="mb-3 ">Billing</h4>
            <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" name="fname" class="form-control" id="firstName" placeholder="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" name="lname" class="form-control" id="lastName" placeholder="" value=""
                            required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" value="<?php 
                            if(isset($_SESSION['loggedin'])){
                                
                                echo $_SESSION['name'];
                            }else{
                                echo 'Please Login';
                            }
                            ?>" name="name"
                                style="pointer-events:none;" class="form-control" id="username" readonly
                                placeholder="Username" required>
                            <div class="invalid-feedback">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="zip" class="form-label">Trip Name</label>
                        <input type="text" readonly name="item_name" style="pointer-events:none;" value="<?php if ($total == 0) {
                            echo "no item selected";
                        } else {
                            echo $value['Item_Name'];
                        }
                        ?>" class="form-control" id="zip" placeholder="trip" required>
                        <div class="invalid-feedback">
                            <!-- Zip code required. -->
                        </div>
                    </div>





                    <div class="col-12">
                        <label for="number" class="form-label">Number</label>
                        <input type="text" name="number" value="<?php 
                        if(isset($_SESSION['loggedin'])){

                            echo $_SESSION['number']; 
                        }
                        else{
                            echo 'Please Login';
                        }
                        ?>" pattern="[0-9]{10}"
                            readonly class="form-control" placeholder="Your Number" required>
                        <div class="invalid-feedback">
                            Please enter a valid phone number.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" readonly value="<?php 
                        if(isset($_SESSION['loggedin'])){
                            
                            echo $_SESSION['emailid']; 
                        }
                        else{
                            echo 'Please Login';
                        }
                        ?>" name="email"
                            class="form-control" id="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Your address"
                            required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="col-4">
                        <label for="address" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
                        <div class="invalid-feedback">
                            Please enter your Current City.
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="address" class="form-label">State</label>
                        <input type="text" name="state" class="form-control" id="state" placeholder="State" required>
                        <div class="invalid-feedback">
                            Please enter your Current State.
                        </div>
                    </div>

                    <div class="col-4">
                        <label for="zipcode" class="form-label">Zip Code</label>
                        <input type="number" class="form-control" name="zipcode" id="zipcode" placeholder="Zipcode"
                            required>
                        <div class="invalid-feedback">
                            Please enter your Postal Code.
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label style="margin: top 10px;" for="checkbox">For couple you have to mention Name,And for
                            family you all are Welcome.</label>
                        <br>
                        <input type="checkbox" id="checkbox">

                        <div id="additionalField" style="display:none;">
                            <label for="lastName" class="form-label">Enter Full Name</label>
                            <div class="col-md-12">
                                <input type="text" name="couplename" class="form-control" id="couple_name"
                                    placeholder="">
                            </div>
                            <div class="col-md-12">
                                <label for="couplegmail" class="form-label">Enter Email</label>
                                <input type="email" name="couplegmail" class="form-control" id="couple_email"
                                    placeholder="">
                            </div>
                            <script>
                                document.getElementById("checkbox").addEventListener("change", function () {
                                    var additionalField = document.getElementById("additionalField");
                                    if (this.checked) {
                                        additionalField.style.display = "block";
                                    } else {
                                        additionalField.style.display = "none";
                                    }
                                });
                            </script>
                        </div>

                    </div>

                </div>

                <hr class="my-4">

                <?php if ($total == 0) {
                    echo '<style>
                        .payment_button a{
                            display:none;
                        }
                        .pleaseadditem{
                            display:auto;
                        }
                        .pleaseadditem_2{
                            display:none;
                        }
                        
                        </style>';
                } else if ($key == 1) {
                    echo '<style>
                        .payment_button a{
                            display:none;
                        }
                        .pleaseadditem_2{
                            display:auto;
                        }
                        .pleaseadditem{
                            display:none;
                        }
                        </style>';
                } else if ($key < 1) {
                    echo '<style>
                        .payment_button a{
                            display:auto;
                        }
                        .pleaseadditem_2{
                            display:none;
                        }
                        .pleaseadditem{
                            display:none;
                        }
                        </style>';
                } else if ($key > 1) {
                    echo '<style>
                        .payment_button a{
                            display:none;
                        }
                        .pleaseadditem_2{
                            display:auto;
                        }
                        .pleaseadditem{
                            display:none;
                        }
                        </style>';
                }

                ?>

                <p style="text-decoration:underline">Total Payable Amount = ₹<?php echo $total ?></p>
                <p class="pleaseadditem text-center border rounded danger p-2 w-10 bg-info text-light "
                    style="font-size:20px;">Please add item</p>
                <p class="pleaseadditem_2 text-center border rounded danger p-2 w-10 bg-info text-light "
                    style="font-size:20px;">You can only go to one place at a time please remove one</p>
                <p class="please_login text-center border rounded danger p-2 w-10 bg-info text-light "
                    style="font-size:20px;">Please login before making any purchase.</p>
                <?php
                    if(isset($_SESSION['loggedin'])){
                        echo '<style>
                        .payment_button a{
                            display:auto !important;
                        }
                        .please_login{
                            display:none !important;
                        }
                        </style>';
                    }
                    else{
                        echo '<style>
                        .payment_button a{
                            display:none !important;
                        }
                        .please_login{
                            display:auto !important;
                        }
                        </style>';
                    }
                 ?>
                    <div style="margin-bottom:30px;" class="payment_button">
                    <a href="javascript:void(0)" class="w-100 btn btn-primary btn-lg buynow"
                        data-productname="<?php echo $value['Item_Name'] ?>"
                        data-username="<?php 
                        if(isset($_SESSION['loggedin'])){
                            echo $_SESSION['name'] ;
                        }
                       ?>" data-number="<?php 
                       if(isset($_SESSION['loggedin'])){
                        echo $_SESSION['number'];
                        }
                        ?>"
                        data-amount="<?php echo $value['Price'] ?>" data-email="<?php 
                        if(isset($_SESSION['loggedin'])){
                            echo $_SESSION['emailid'];
                        }
                         ?>"
                        type="submit">Make Payment</a>
                </div>
            </form>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>

        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
        $(".buynow").click(function () {

            var amount = $(this).attr('data-amount');
            var productname = $(this).attr('data-productname');
            var username = $(this).attr('data-username');
            var email = $(this).attr('data-email');
            var number_u = $(this).attr('data-number');
            var zipcode = jQuery('#zipcode').val();
            var firstName = jQuery('#firstName').val();
            var lastName = jQuery('#lastName').val();
            var address = jQuery('#address').val();
            var city = jQuery('#city').val();
            var state = jQuery('#state').val();
            var couple_name = jQuery('#couple_name').val();
            var couple_email = jQuery('#couple_email').val();

            var fields = ['#firstName', '#lastName', '#address', '#city', '#state', '#zipcode'];

            // Loop through each field
            for (var i = 0; i < fields.length; i++) {
                var fieldValue = jQuery(fields[i]).val().trim(); // Get field value
                if (fieldValue === "") {
                    jQuery(fields[i]).addClass('is-invalid'); // Add invalid class
                    return; // Stop further execution
                } else {
                    jQuery(fields[i]).removeClass('is-invalid'); // Remove invalid class
                }
            }

            var options = {
                "key": "rzp_test_fso9edcL8x4bpm", // Enter the Key ID generated from the Dashboard
                "amount": 100,//amount*100
                "name": "Explore Quest Private Limited",
                "description": "productname",
                "image": "https://explorequest.42web.io/logo/explorequest.png",
                "handler": function (response) {
                    var paymentid = response.razorpay_payment_id;
                    $.ajax({
                        url: "payment-process.php",
                        type: "POST",
                        data: {
                            product_amount: amount,
                            product_name: productname,
                            user_name: username,
                            user_email: email,
                            payment_id: paymentid,
                            user_number: number_u,
                            add_zipcode: zipcode,
                            first_name: firstName,
                            last_name: lastName,
                            cust_address: address,
                            cust_city: city,
                            cust_state: state,
                            couple_n: couple_name,
                            couple_e: couple_email
                        },
                        "prefill": {
                            "name": "username",
                            "email": "email",
                            "contact": "number"
                        },
                        success: function (finalresponse) {
                            if (finalresponse == 'done') {
                                window.location.href = "thankyou.php"
                            }
                            else {
                                alert('Please check console to find error');
                                console.log(finalresponse);
                            }
                        }
                    })
                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            e.preventDefault();
        });
        $('#firstName').on('input', function () {
            if ($(this).val().trim() !== "") {
                $(this).removeClass('is-invalid');
            }
        });

        $('#zipcode').on('input', function () {
            if ($(this).val().trim() !== "") {
                $(this).removeClass('is-invalid');
            }
        });
        $('#lastName').on('input', function () {
            if ($(this).val().trim() !== "") {
                $(this).removeClass('is-invalid');
            }
        });
        $('#address').on('input', function () {
            if ($(this).val().trim() !== "") {
                $(this).removeClass('is-invalid');
            }
        });
        $('#city').on('input', function () {
            if ($(this).val().trim() !== "") {
                $(this).removeClass('is-invalid');
            }
        });
        $('#state').on('input', function () {
            if ($(this).val().trim() !== "") {
                $(this).removeClass('is-invalid');
            }
        });

    </script>


    </div>


    <script>// Example starter JavaScript for disabling form submissions if there are invalid fields

    </script>
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