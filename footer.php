<?php
// session_start();

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
//   header("location: login.php");
//   exit;
// }
$showAlert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email_submit'])) {
  include "dbconnect/_dbconnect.php";

  $email = $_POST["email_1"];

  $email == null;
  if ($email == null) {

  } else {
    $sql = "INSERT INTO `subscribed` VALUES ('null','$email', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $showAlert = true;
    }
  }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/footer_b.css">
  <link rel="stylesheet" href="style/footer.css">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <section>

    <footer class="new_footer_area bg_color">
      <div class="new_footer_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                <p>Don’t miss any new updates.!</p>
                <form class="f_subscribe_two mailchimp" method="post">
                  <input type="email" maxlength="30" minlength="10" name="email_1" required class="form-control memail"
                    placeholder="Email">
                  <?php
                  if ($showAlert) {
                    echo '<p style="font-weight:900;color:red; ">Now you will get all our promo.</p>';
                  }

                  ?>
                  <button class="btn btn_get btn_get_two" name="email_submit" type="submit">Subscribe</button>
                  <p class="mchimp-errmessage" style="display: none;"></p>
                  <p class="mchimp-sucmessage" style="display: none;"></p>
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                <h3 class="f-title f_600 t_color f_size_18">Top Tours</h3>
                <ul class="list-unstyled f_list">
                  <li><a style="text-decoration: none;" href="index.php">Home</a></li>
                  <li><a style="text-decoration: none;" href="products.php">Products</a></li>
                  <li><a style="text-decoration: none;" href="dubai.php">Dubai</a></li>
                  <li><a style="text-decoration: none;" href="tajmahal.php">Taj Mahal</a></li>
                  <li><a style="text-decoration: none;" href="china.php">China</a></li>
                  <li><a style="text-decoration: none;" href="japan.php">Japan</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s"
                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                <h3 class="f-title f_600 t_color f_size_18">Imp links</h3>
                <ul class="list-unstyled f_list">
                  <!-- <li><a style="text-decoration: none;" href="help.php">Help</a></li> -->
                  <li>
                    <?php
                    if (!isset($_SESSION['loggedin'])) {
                      echo '';
                    } else {
                      echo '<a style="text-decoration: none;" href="user.php">User Profile</a></li>';
                    }
                    ?>
                  <li><a style="text-decoration: none;" href="about.php">About us</a></li>
                  <li><a style="text-decoration: none;" href="privacypolicy.php">Privacy Policy/Refund</a></li>
                  <li><a style="text-decoration: none;" href="contactus.php">Contact-Us</a></li>
                  <!-- <li><a href="#">Reporting</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Support Policy</a></li> -->
                    <?php
                      if(!isset($_SESSION['loggedin'])) {
                        echo "<li><a style='text-decoration: none;' href='login.php'>Login</a></li>";
                      }
                      else{
                        echo "<li><a style='text-decoration: none;' href='logout.php'>Logout</a></li>";
                      }
                    ?>
                  <!-- <li><a style="text-decoration: none;" href="logout.php">Logout</a></li> -->
                  <li><a style="text-decoration: none;" href="orders.php">Orders</a></li>

                  <li><a style="text-decoration: none;" href="mycart.php">Cart</a></li>
                </ul>
              </div>
            </div>
            <style>

            </style>
            <div class="col-lg-3 col-md-6">
              <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s"
                style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                <h3 class="f-title f_600 t_color f_size_18">Social Media</h3>
                <div class="">

                  <ul>
                    <li>
                      <a
                        href="https://www.facebook.com/people/Ankit-Singh/pfbid0FLrc8pxmNFVL9Vqy3SAAL1hKKQVZfvfYyc3nErGuR3A4fB4dXhUG79rfKZjo87ELl/?mibextid=ZbWKwL">
                        <img src="logo/footer/facebook.png" width="47px" alt="footer">
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/ankit__singhofficial/">

                        <img src="logo/footer/instagram.png" width="47px" alt="footer">
                      </a>

                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/ankit-singh-7025331b4/">
                        <img src="logo/footer/linkedin.png" width="47px" alt="footer">
                      </a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer_bg">
          <div class="footer_bg_one"></div>
          <div class="footer_bg_two"></div>
          <div class="footer_bg_three"></div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-sm-7">
              <!-- <p class="mb-0 f_400">© cakecounter Inc.. 2019 All rights reserved.</p> -->
            </div>
            <div class="col-lg-6 col-sm-5 text-right">
              <!-- <p>Made with <i class="icon_heart"></i> in <a href="http://cakecounter.com" target="_blank">CakeCounter</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="bottom text-center">
          <p>&copy; 2024 Explore Quest. All rights reserved.</p>
        </div>
      </footer>

      <style>
        .bottom {
          color: white;
          margin-left: 20px;
          font-size: 15px;
          padding-bottom: 30px;
        }

        .new_footer_top .footer_bg {
          position: absolute;
          bottom: 0;
          background: url("img/footer/footer_bg.png") no-repeat scroll center 0;
          width: 100%;
          z-index: 3;
          height: 266px;
        }



        .new_footer_top .footer_bg .footer_bg_one {
          background: url("img/footer/volks.gif") no-repeat center center;
          width: 330px;
          height: 105px;
          background-size: 100%;
          position: absolute;
          bottom: 0;
          left: 30%;
          z-index: 2;
          -webkit-animation: myfirst 22s linear infinite;
          animation: myfirst 22s linear infinite;
        }

        .new_footer_top .footer_bg .footer_bg_two {
          background: url("img/footer/cyclist.gif") no-repeat center center;
          width: 88px;
          height: 100px;
          background-size: 100%;
          bottom: 0;
          left: 38%;
          z-index: 1;
          position: absolute;
          -webkit-animation: myfirst 30s linear infinite;
          animation: myfirst 30s linear infinite;
        }

        .new_footer_top .footer_bg .footer_bg_three {
          background: url("footer/man.gif") no-repeat center center;
          width: 105px;
          height: 120px;
          background-size: 100%;
          bottom: 0;
          left: 38%;
          z-index: 4;
          position: absolute;
          -webkit-animation: myfirst 34s linear infinite;
          animation: myfirst 34s linear infinite;
        }

        @media(max-width:500px) {
          .new_footer_top .footer_bg .footer_bg_one {
            -webkit-animation: myfirst 10s linear infinite;
            animation: myfirst 10s linear infinite;
          }

          .new_footer_top .footer_bg .footer_bg_two {
            -webkit-animation: myfirst 20s linear infinite;
            animation: myfirst 20s linear infinite;
          }

          .new_footer_top .footer_bg .footer_bg_three {
            -webkit-animation: myfirst 13s linear infinite;
            animation: myfirst 13s linear infinite;
          }
        }
      </style>
    </footer>



  </section>
</body>

</html>