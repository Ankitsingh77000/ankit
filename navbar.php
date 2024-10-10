<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <header class="hidden" >
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
                <li>
                    <?php
                    $count=0;
                    if(isset($_SESSION['cart'])){
                        $count=count($_SESSION['cart']);
                    }
                    ?>
                    <a href="mycart.php" class="cart" style="margin:5px;">Cart (<?php echo $count ?>)</a>
                </li>
            </ul>
        </nav>
    </header>

</body>
<style>
    
</style>

</html>