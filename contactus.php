<?php
session_start();

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'contact';
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    //     echo'Connected';
// }
// else{
    die("Error" . mysqli_connect_error());
}
date_default_timezone_set('Asia/Kolkata');
$datainserted = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contact(`name`,`email`,`number`,`message`,`dt`)VALUES('$name','$email','$number','$message',current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $datainserted = true;
    } else {
        echo "error" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Quest ✈️ | Contact-Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <?php
    include ('navbar.php');
    ?>
    <div class="container1">
        <div class="form-container">
            <div class="left-container">
                <div class="left-inner-container">
                    <h2>Let's Chat</h2>
                    <p>Whether you have a question, want to start a project or simply want to connect.</p>
                    <br>
                    <p>Feel free to send a message in the contact form</p>
                </div>
            </div>
            <div class="right-container">
                <div class="right-inner-container">
                    
                    <form action="contactus.php"  method="post">
                        <h2 class="lg-view">Contact Form</h2>
                        <h2 class="sm-view">Let's Chat</h2>
                        <?php
                    if ($datainserted) {
                        echo '<div class="container">
                        <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        Form Submitted Successfully.
                        </div>
                        </div>';
                    } else {
                        
                    }
                    
                    ?>
                        <div class="contact_form">
                        <p>* Required</p>

                        <input type="text" name="name" minlength="3" placeholder="Name *" required />
                        <input type="email" name="email" minlength="3" placeholder="Email *" required />
                        <input type="number" name="number" minlength="3" pattern="[0-9]{10}" maxlength="10"
                            placeholder="Phone *" required />
                        <textarea rows="4" style="resize: none;" minlength="3" maxlength="200" name="message" fixed
                            placeholder="Message *" required></textarea>
                        <button>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if ($datainserted) {
        echo '<style>
        .contact_form{
            display:none;
        }
        </style>';


    } else {

    }
    ?>

    <?php
    include ('footer.php');

    ?>
    <style>
        /* :root {
            $teal: #00b4cf;
            $white: #ffffff;
        } */

        /* @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800'); */


        /* body {
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            font-size: 10px;
            height: 100vh;
            margin: -20px 0 50px;
        } */

        /* .container1 {
            background-color: $white;
            border-radius: 5px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
            min-width: 370px;
            /* margin-right:-70%; */
        /* } */
        .hidden {
            background: linear-gradient(100deg, #e9f8e9, #a1b6b0);
        }

        .container1 {
            max-width: 100%;
            /* width: 768px; */
            height: 60vh;
            margin: 60px;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .form-container {
            display: flex;
        }

        .left-container {
            flex: 1;
            height: 480px;
            background-color: $teal;
        }

        .right-container {
            display: flex;
            flex: 1;
            height: 460px;
            background-color: $white;
            justify-content: center;
            align-items: center;
        }

        .left-container {
            display: flex;
            flex: 1;
            height: 480px;
            justify-content: center;
            align-items: center;
            color: $white;
        }

        .left-container p {
            font-size: 0.9rem;
        }

        .right-inner-container {
            width: 70%;
            height: 80%;
            text-align: center;
        }

        .left-inner-container {
            height: 50%;
            width: 80%;
            text-align: center;
            line-height: 22px;
        }

        input,
        textarea {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
            font-size: 0.8rem;
        }

        input:focus,
        textarea:focus {
            outline: 1px solid $teal;
        }

        button {
            border-radius: 20px;
            border: 1px solid #00b4cf;
            background-color: #00b4cf;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.7;
        }

        @media only screen and (max-width: 600px) {
            .left-container {
                display: none;
            }

            .lg-view {
                display: none;
            }
        }

        @media only screen and (min-width: 600px) {
            .sm-view {
                display: none;
            }
        }

        form p {
            text-align: left;
        }
    </style>
</body>

</html>