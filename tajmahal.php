<?php
session_start();

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
//   header("location: login.php");
//   exit;
// }
include "loading.php";
// $showAlert = false;
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   include "dbconnect/_dbconnect.php";

//   $email = $_POST["email"];

//   $email_id = true;
//   if ($email_id) {
//     $sql = "INSERT INTO `subscribed` VALUES ('null','$email', current_timestamp())";
//     $result = mysqli_query($conn, $sql);
//     if ($result) {
//       $showAlert = true;
//     }
//   }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Quest ✈️ | Taj Mahal</title>
  <link rel="shortcut icon" href="logo/explorequest.png" type="image/x-icon">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/footer_b.css">
  <link rel="stylesheet" href="style/footer.css">


</head>

<body>


  <div id="main">
    <div class="video" style="position: relative; overflow: hidden;"
      style="width: 100%;  max-height: 100vh !important;">
      <?php include "navbar.php" ?>
      <video src="video/Tajmahal.mp4" width="100%" muted loop autoplay></video>
    </div>
  </div>


  <section>
    <div class="tajmahal">
      <div class="container">
        <div class="inner">
          <p class="home"><a href="index.php">HOME</a> >> Taj mahal</p>
          <div class="taj">Family TajMahal Tour</div>
          <div class="agra">
            <svg width="15px" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 92.25 122.88"
              style="enable-background:new 0 0 92.25 122.88" xml:space="preserve">
              <style type="text/css">
                .st0 {
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                }
              </style>
              <g>
                <path class="st0"
                  d="M68.51,106.28c-5.59,6.13-12.1,11.62-19.41,16.06c-0.9,0.66-2.12,0.74-3.12,0.1 c-10.8-6.87-19.87-15.12-27-24.09C9.14,86.01,2.95,72.33,0.83,59.15c-2.16-13.36-0.14-26.22,6.51-36.67 c2.62-4.13,5.97-7.89,10.05-11.14C26.77,3.87,37.48-0.08,48.16,0c10.28,0.08,20.43,3.91,29.2,11.92c3.08,2.8,5.67,6.01,7.79,9.49 c7.15,11.78,8.69,26.8,5.55,42.02c-3.1,15.04-10.8,30.32-22.19,42.82V106.28L68.51,106.28z M46.12,23.76 c12.68,0,22.95,10.28,22.95,22.95c0,12.68-10.28,22.95-22.95,22.95c-12.68,0-22.95-10.27-22.95-22.95 C23.16,34.03,33.44,23.76,46.12,23.76L46.12,23.76z" />
              </g>
            </svg> Agra
          </div>
          <div class="price">₹20,799</div>
          <div class="inner_bottom">
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">Couples/Family Tour</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">24 hrs confirmation</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">Meals</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">Transportation</p>
          </div>
        </div>
      </div>

      <div class="tajmahal_img" style="background-color: black;">
        <div class="container">
          <img src="TourImg/tajmahalentrence.jpg" alt="">
          <div style="background-color: #272626;" class="container">
            <p class="Overview">Overview</p>
            <p>
              The highlight of the trip is, of course, a visit to the Taj Mahal itself. You'll enter through the grand
              main gate and walk through the beautifully landscaped gardens to reach the mausoleum. Inside, you can
              explore the intricate architecture, admire the marble inlays and carvings, and learn about the history and
              symbolism of the monument.Many visitors opt for a guided tour of the Taj Mahal to gain deeper insights
              into
              its history, architecture, and significance. Knowledgeable guides can provide fascinating anecdotes and
              historical context, enhancing your appreciation of this iconic landmark.
            </p>
            <hr>
            <p class="Overview">Highlights</p>
            <p><svg id="Layer_1" width="17px" data-name="Layer 1" viewBox="0 0 122.88 109.76">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #ff4141;
                      fill-rule: evenodd;
                    }
                  </style>
                </defs>
                <title>red-check-mark</title>
                <path class="cls-1"
                  d="M0,52.88l22.68-.3A84.1,84.1,0,0,1,46,72.44,314.13,314.13,0,0,1,105.6,0h17.28A522.93,522.93,0,0,0,46.77,109.76C36,86.69,21,67.27,0,52.88Z" />
              </svg>
              Visit the Taj Mahal, a UNESCO World Heritage Site, to marvel at its stunning marble architecture.
            </p>
            <p><svg id="Layer_1" width="17px" data-name="Layer 1" viewBox="0 0 122.88 109.76">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #ff4141;
                      fill-rule: evenodd;
                    }
                  </style>
                </defs>
                <title>red-check-mark</title>
                <path class="cls-1"
                  d="M0,52.88l22.68-.3A84.1,84.1,0,0,1,46,72.44,314.13,314.13,0,0,1,105.6,0h17.28A522.93,522.93,0,0,0,46.77,109.76C36,86.69,21,67.27,0,52.88Z" />
              </svg>
              Explore the history and symbolism of the monument with a guided tour.
            </p>
            <p><svg id="Layer_1" width="17px" data-name="Layer 1" viewBox="0 0 122.88 109.76">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #ff4141;
                      fill-rule: evenodd;
                    }
                  </style>
                </defs>
                <title>red-check-mark</title>
                <path class="cls-1"
                  d="M0,52.88l22.68-.3A84.1,84.1,0,0,1,46,72.44,314.13,314.13,0,0,1,105.6,0h17.28A522.93,522.93,0,0,0,46.77,109.76C36,86.69,21,67.27,0,52.88Z" />
              </svg>
              Discover nearby attractions like Agra Fort for panoramic views of the Taj Mahal.
            </p>
            <p><svg id="Layer_1" width="17px" data-name="Layer 1" viewBox="0 0 122.88 109.76">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #ff4141;
                      fill-rule: evenodd;
                    }
                  </style>
                </defs>
                <title>red-check-mark</title>
                <path class="cls-1"
                  d="M0,52.88l22.68-.3A84.1,84.1,0,0,1,46,72.44,314.13,314.13,0,0,1,105.6,0h17.28A522.93,522.93,0,0,0,46.77,109.76C36,86.69,21,67.27,0,52.88Z" />
              </svg>
              Shop for marble handicrafts and traditional souvenirs in Agra's local markets.
            </p>
            <p><svg id="Layer_1" width="17px" data-name="Layer 1" viewBox="0 0 122.88 109.76">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #ff4141;
                      fill-rule: evenodd;
                    }
                  </style>
                </defs>
                <title>red-check-mark</title>
                <path class="cls-1"
                  d="M0,52.88l22.68-.3A84.1,84.1,0,0,1,46,72.44,314.13,314.13,0,0,1,105.6,0h17.28A522.93,522.93,0,0,0,46.77,109.76C36,86.69,21,67.27,0,52.88Z" />
              </svg>
              Indulge in Mughlai cuisine, including kebabs and biryanis, for a taste of local flavors.
            </p>
            <p><svg id="Layer_1" width="17px" data-name="Layer 1" viewBox="0 0 122.88 109.76">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #ff4141;
                      fill-rule: evenodd;
                    }
                  </style>
                </defs>
                <title>red-check-mark</title>
                <path class="cls-1"
                  d="M0,52.88l22.68-.3A84.1,84.1,0,0,1,46,72.44,314.13,314.13,0,0,1,105.6,0h17.28A522.93,522.93,0,0,0,46.77,109.76C36,86.69,21,67.27,0,52.88Z" />
              </svg>
              Capture the magical sunrise or sunset views of the Taj Mahal for unforgettable memories.
            </p>
            <p><svg id="Layer_1" width="17px" data-name="Layer 1" viewBox="0 0 122.88 109.76">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #ff4141;
                      fill-rule: evenodd;
                    }
                  </style>
                </defs>
                <title>red-check-mark</title>
                <path class="cls-1"
                  d="M0,52.88l22.68-.3A84.1,84.1,0,0,1,46,72.44,314.13,314.13,0,0,1,105.6,0h17.28A522.93,522.93,0,0,0,46.77,109.76C36,86.69,21,67.27,0,52.88Z" />
              </svg>
              Respect local customs and dress modestly while experiencing the cultural richness of the region.
            </p>
            <hr>
            <p class="Overview">Summerized Itinerary</p>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 1:</div>
              <p>Visit the Taj Mahal </p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Visit the Taj Mahal early in the morning to avoid crowds and witness the sunrise over the monument.
                </li>
              </ul>
              <ul>
                <li>
                  Explore the intricacies of the Taj Mahal's architecture and history with a guided tour.
                </li>
              </ul>
              <ul>
                <li>
                  Spend the afternoon exploring Agra Fort, another UNESCO World Heritage Site, and enjoy panoramic views
                  of the Taj Mahal from its vantage points.
                </li>
              </ul>
            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 2:</div>
              <p>Visit other notable attractions</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Visit other notable attractions in Agra, such as the Tomb of Itimad-ud-Daulah (Baby Taj) or Mehtab
                  Bagh, for additional insights into the city's history and culture.
                </li>
              </ul>
              <ul>
                <li>
                  Take a leisurely stroll along the banks of the Yamuna River for serene views of the Taj Mahal.
                </li>
              </ul>
              <ul>
                <li>
                  Spend the afternoon relaxing or exploring more of Agra's hidden gems, such as local bazaars or
                  historical sites.
                </li>
              </ul>
              <ul>
                <li>
                  Attend a cultural performance or workshop to immerse yourself further in the region's rich heritage.
                </li>
              </ul>
            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 3:</div>
              <p>Departure</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Bid farewell to Pelling and make your way to Bhopal (BHO) Airport.
                </li>
              </ul>
            </div>
            <hr>
            <p class="Overview">Location</p>
            <p style="margin-top: 20px;">
              <svg width="15px" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 92.25 122.88"
                style="enable-background:new 0 0 92.25 122.88" xml:space="preserve">
                <style type="text/css">
                  .st0 {
                    fill-rule: evenodd;
                    clip-rule: evenodd;
                  }
                </style>
                <g>
                  <path class="st0"
                    d="M68.51,106.28c-5.59,6.13-12.1,11.62-19.41,16.06c-0.9,0.66-2.12,0.74-3.12,0.1 c-10.8-6.87-19.87-15.12-27-24.09C9.14,86.01,2.95,72.33,0.83,59.15c-2.16-13.36-0.14-26.22,6.51-36.67 c2.62-4.13,5.97-7.89,10.05-11.14C26.77,3.87,37.48-0.08,48.16,0c10.28,0.08,20.43,3.91,29.2,11.92c3.08,2.8,5.67,6.01,7.79,9.49 c7.15,11.78,8.69,26.8,5.55,42.02c-3.1,15.04-10.8,30.32-22.19,42.82V106.28L68.51,106.28z M46.12,23.76 c12.68,0,22.95,10.28,22.95,22.95c0,12.68-10.28,22.95-22.95,22.95c-12.68,0-22.95-10.27-22.95-22.95 C23.16,34.03,33.44,23.76,46.12,23.76L46.12,23.76z" />
                </g>
              </svg> Starting point
            </p>
            <p style="font-size: 20px;">Indira Gandhi International Airport</p>
            <p style="margin-top: -20px;font-size: 12px;">Indira Gandhi International Airport, New Delhi, Delhi 110037
            </p>
            <p style="margin-top: 20px;">
              <svg width="15px" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 92.25 122.88"
                style="enable-background:new 0 0 92.25 122.88" xml:space="preserve">
                <style type="text/css">
                  .st0 {
                    fill-rule: evenodd;
                    clip-rule: evenodd;
                  }
                </style>
                <g>
                  <path class="st0"
                    d="M68.51,106.28c-5.59,6.13-12.1,11.62-19.41,16.06c-0.9,0.66-2.12,0.74-3.12,0.1 c-10.8-6.87-19.87-15.12-27-24.09C9.14,86.01,2.95,72.33,0.83,59.15c-2.16-13.36-0.14-26.22,6.51-36.67 c2.62-4.13,5.97-7.89,10.05-11.14C26.77,3.87,37.48-0.08,48.16,0c10.28,0.08,20.43,3.91,29.2,11.92c3.08,2.8,5.67,6.01,7.79,9.49 c7.15,11.78,8.69,26.8,5.55,42.02c-3.1,15.04-10.8,30.32-22.19,42.82V106.28L68.51,106.28z M46.12,23.76 c12.68,0,22.95,10.28,22.95,22.95c0,12.68-10.28,22.95-22.95,22.95c-12.68,0-22.95-10.27-22.95-22.95 C23.16,34.03,33.44,23.76,46.12,23.76L46.12,23.76z" />
                </g>
              </svg> Ending point
            </p>
            <p style="font-size: 20px;">Indira Gandhi International Airport</p>
            <p style="margin-top: -20px;font-size: 12px;">Indira Gandhi International Airport, New Delhi, Delhi 110037
            </p>
          </div>
          <div style="width: 100%;height: 20px"></div>
        </div>
        <form action="manage_cart.php" method="post">
          <div class="buy">
            <div class="container" style="background-color: #272626;">
              <div class="price">
                <p class="Overview" style="font-style: normal !important;">Starting from</p>
              </div>
              <div class="container" style="display: flex; justify-content: space-between;">
                <div style="color: red;padding: 30px ;font-size: 40px;font-weight: bolder;">₹20,799</div>

                <button style="padding: 10px;margin-bottom: 10px;color: white;
              background-color: red ;cursor: pointer;width: 150px; height: 70px;border-radius: 10px;font-size:20px"
                  type="submit" name="Add_To_Cart">Add to cart</button>
                <input type="hidden" name="Item_Name" value="TAJMAHAL TOUR">
                <input type="hidden" name="Price" value="20799">
                <input type="hidden" name="img" value="TourImg/Taj_mahal.jpg">

              </div>
            </div>
          </div>
        </form>
        <div style="width: 100%;height: 20px"></div>
      </div>
    </div>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

      * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      body {
        background-color: rgb(0, 0, 0);
      }

      .tajmahal {
        width: 100%;
        padding: 20px 10px 20px 10px;
        position: relative;
        height: auto;
        background-color: #272626;
      }

      .tajmahal .inner a {
        text-transform: uppercase;
        text-decoration: none;
        color: white;
      }

      .tajmahal .inner .home {
        text-transform: uppercase;
        text-decoration: none;
        color: rgb(255, 0, 0);
      }

      .taj {
        text-transform: uppercase;
        font-size: 45px;
        color: white;
        font-style: italic;
      }

      .tajmahal .agra {
        color: white;
      }

      .tajmahal .inner a:hover {
        color: red;
        transition: ease-in-out 1s;
      }

      .tajmahal .inner_bottom {
        margin-top: 15px;
        display: flex;
        width: 100%;
        right: 3px;
        padding-top: 5px;
        position: relative;
        flex-wrap: wrap;
        align-items: center;
        justify-content: inherit;
      }

      .tajmahal .inner_bottom .icon_text {
        /* background-color: black; */
        width: 100%;
        height: auto;
        color: white;
      }

      .price {
        color: red;
        margin-top: 10px;
        font-weight: bolder;
        font-size: 20px;
      }

      .tajmahal_img img {
        margin-top: 30px;
        display: flex;
        width: 100%;
        right: 3px;
        /* padding-top: 20px !important; */
        padding: 1rem;
        position: relative;
        flex-wrap: wrap;
        align-items: center;
        justify-content: inherit;
        margin-bottom: 15px;
      }

      .tajmahal_img .Overview {
        color: white;

        padding-top: 20px;
        font-weight: bolder;
        font-size: 21px;
        font-style: italic;
      }

      .tajmahal_img p {
        font-weight: 300;
        padding: 10px;
        color: white;
      }

      .tajmahal_img .days {
        width: 70px;
        height: auto;
        padding: 7px;
        border-radius: 2px;
        color: white;
        background-color: red;
      }

      .days_container p {
        font-weight: bolder;
        font-size: 17px;
        font-style: italic;
      }

      .ul_li {
        padding: 20px;
        color: white;
        font-weight: 300;
      }
    </style>
  </section>

  <?php
  include ("footerup.php");
  ?>


  <?php
  include ("footer.php");
  ?>
</body>

</html>