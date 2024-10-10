<?php 
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
    header("location: login.php");
    exit;
}
include 'dbconnect/_dbconnect.php';

$username = $_POST['user_name'];
$email = $_POST['user_email'];
$amount =$_POST['product_amount'];
$productname=$_POST['product_name'];
$paymentid=$_POST['payment_id'];
$number1 =$_POST['user_number'];
$zipcode = $_POST['add_zipcode'];

$firstname =$_POST['first_name'];
$lastname =$_POST['last_name'];
$address = $_POST['cust_address'];
$city =$_POST['cust_city'];
$state =$_POST['cust_state'];
$couple_name = $_POST['couple_n'];
$couple_email = $_POST['couple_e'];

$sql="insert into customer_orders (username,firstname,lastname,number,email,address,city,state,zipcode,couple_name,couple_email,productname,productamount,paymentid) values('".$username."','".$firstname."','".$lastname."','".$number1."','".$email."','".$address."','".$city."','".$state."','".$zipcode."','".$couple_name."','".$couple_email."','".$productname."','".$amount."','".$paymentid."')";
$result = mysqli_query($conn,$sql);

if($result){
    echo 'done';
    $_SESSION['paymentid']=$paymentid;
}
else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}
?>
