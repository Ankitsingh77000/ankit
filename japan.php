<?php
session_start();

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
//   header("location: login.php");
//   exit;
// }
include "loading.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Quest ✈️ | KyotoJapan</title>
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
      <video src="video/kytojapan.mp4" width="100%" muted loop autoplay></video>
    </div>
  </div>


  <section>
    <div class="tajmahal">
      <div class="container">
        <div class="inner">
          <p class="home"><a href="index.php">HOME</a> >> Kyoto Japan</p>
          <div class="taj">Kyoto Japan</div>
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
            </svg> Japan
          </div>
          <div class="price">₹85,999</div>
          <div class="inner_bottom">
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">Couples/Family Tour</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">24 hrs confirmation</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">Breakfast included</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">Meals</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">Transportation</p>
          </div>
        </div>
      </div>

      <div class="tajmahal_img" style="background-color: black;">
        <div class="container">
          <img src="TourImg/Kyoto_Japan.jpg" alt="">
          <div style="background-color: #272626;" class="container">
            <p class="Overview">Overview</p>
            <p>Certainly! Kyoto, Japan's former imperial capital, is a city renowned for its rich history, traditional
              culture, and stunning natural beauty. Kyoto is home to numerous UNESCO World Heritage Sites, including
              ancient temples, shrines, and palaces. Must-visit landmarks include Kinkaku-ji (the Golden Pavilion),
              Ginkaku-ji (the Silver Pavilion), Kiyomizu-dera Temple, and the Fushimi Inari Taisha Shrine with its
              famous torii gates.
              The Great Wall comprises various architectural styles, including walls, watchtowers, fortresses, and
              beacon towers, constructed using materials like stone, brick, tamped earth, and wood.
              Indulge in Kyoto's renowned culinary scene, which includes traditional kaiseki cuisine, matcha sweets, and
              local specialties like yudofu (tofu hot pot) and obanzai (Kyoto-style home cooking).

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
              A stunning Zen Buddhist temple adorned in gold leaf, set amidst beautiful gardens, and reflecting on a
              tranquil pond.
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
              Famous for its thousands of vermillion torii gates winding through the forested hills of Inari Mountain,
              offering picturesque hiking trails and panoramic views.
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
              Explore Kyoto's historic geisha district, known for its traditional wooden machiya houses, teahouses, and
              the chance to spot geiko (geisha) and maiko (apprentice geisha) in their elegant attire.
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
              A splendid example of feudal Japanese architecture, featuring ornate interiors, beautiful gardens, and
              nightingale floors designed to chirp when walked upon to deter intruders.
            </p>

            <hr>
            <p class="Overview">Summerized Itinerary</p>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 1:</div>
              <p>Historical Kyoto </p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Morning: Start your day at Kinkaku-ji, the Golden Pavilion, to admire its stunning architecture and
                  surrounding gardens.
                </li>
              </ul>
              <ul>
                <li>
                  Midday: Visit Ryoan-ji Temple to experience its famous Zen rock garden, offering tranquility and
                  reflection.
                </li>
              </ul>
              <ul>
                <li>
                  Afternoon: Explore the Arashiyama district, including the enchanting Bamboo Grove and the historic
                  Tenryu-ji Temple.
                </li>
              </ul>
            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 2:</div>
              <p> Cultural Kyoto</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Morning: Begin with a visit to Fushimi Inari Taisha, famous for its thousands of torii gates and
                  scenic hiking trails.
                </li>
              </ul>
              <ul>
                <li>
                  Midday: Head to Nijo Castle to explore its impressive architecture, beautiful gardens, and intricate
                  interior design.
                </li>
              </ul>
              <ul>
                <li>
                  Afternoon: Take a stroll through the Gion district, known for its traditional streets, wooden machiya
                  houses, and the chance to spot geisha.
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
                  Depending on your departure time, you may have some free time in the morning before you need to check
                  out of your accommodation.
                </li>
              </ul>
              <ul>
                <li>
                  Use this time to enjoy a leisurely breakfast at a local café or your hotel, savoring some last bites
                  of Kyoto's delicious cuisine.
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
            <p style="font-size: 20px;">Osaka International Airport </p>
            <p style="margin-top: -20px;font-size: 12px;">Osaka International Airport ,Japan 5100944.
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
            <p style="font-size: 20px;">Osaka International Airport </p>
            <p style="margin-top: -20px;font-size: 12px;">Osaka International Airport ,Japan 5100944.
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
                <div style="color: red;padding: 30px ;font-size: 40px;font-weight: bolder;">₹85,999</div>

                <button style="padding: 10px;margin-bottom: 10px;color: white;
              background-color: red ;cursor: pointer;width: 150px; height: 70px;border-radius: 10px ;" type="submit"
                  name="Add_To_Cart">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="Kytoto Japan">
                <input type="hidden" name="Price" value="85999">
                <input type="hidden" name="img" value="TourImg/Kyoto_Japan.jpg">

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