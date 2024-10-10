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
  <title>Explore Quest ✈️ | Great Wall Of China</title>
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
      <video id="promo_video" src="video/china.mp4" preload="auto" width="100%" muted loop autoplay></video>
      <script>

      const video_upper = document.getElementById("promo_video");
      video_upper.addEventListener("ended", function () {
        video_upper.currentTime = 0;
        video_upper.play();
      });
      video_upper.play();

    </script>
    </div>
  </div>


  <section>
    <div class="tajmahal">
      <div class="container">
        <div class="inner">
          <p class="home"><a href="index.php">HOME</a> >> The Great Wall of China</p>
          <div class="taj">The Great Wall Of China Tour</div>
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
            </svg> China
          </div>
          <div class="price"> ₹1,55,000</div>
          <div class="inner_bottom">
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">Couples/Family Tour</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">24 hrs confirmation</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">Breakfast included</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">Meals</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">Transportation</p>
            <p class="icon_text"><img src="TourImg/tick.png" width="17px" alt="">7 days package</p>
          </div>
        </div>
      </div>

      <div class="tajmahal_img" style="background-color: black;">
        <div class="container">
          <img src="TourImg/The_great_wall_of_China.jpg" alt="">
          <div style="background-color: #272626;" class="container">
            <p class="Overview">Overview</p>
            <p>The Great Wall of China is one of the most iconic and remarkable architectural feats in human history.
              Here's an overview of this awe-inspiring structure:
              Construction of the Great Wall began over 2,000 years ago during the Qin Dynasty (around 220–206 BCE) and
              continued over several dynasties, with significant contributions made during the Han Dynasty (206 BCE–220
              CE) and Ming Dynasty (1368–1644 CE). Its primary purpose was to protect China from invasions by nomadic
              tribes from the north.
              The Great Wall stretches approximately 13,170 miles (21,196 kilometers) across northern China, making it
              one of the most extensive human-made structures on Earth. It consists of walls, watchtowers, fortresses,
              and other defensive structures built using various materials such as stone, brick, tamped earth, and
              wood.The Great Wall is not a single continuous wall but rather a series of interconnected walls and
              fortifications. The most visited sections include Badaling, Mutianyu, Jinshanling, and Simatai, each
              offering unique experiences and scenic views.

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
              Stretching over approximately 13,170 miles (21,196 kilometers), the Great Wall is one of the most
              extensive architectural marvels ever constructed by humans.
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
              Built over several dynasties, the Great Wall served as a formidable defensive barrier against invasions
              from nomadic tribes from the north, protecting ancient China's borders and ensuring its security.
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
              The Great Wall comprises various architectural styles, including walls, watchtowers, fortresses, and
              beacon towers, constructed using materials like stone, brick, tamped earth, and wood.
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
              Visitors to the Great Wall can enjoy breathtaking views of rugged mountains, rolling hills, and
              picturesque landscapes as the wall winds its way through diverse terrain.
            </p>

            <hr>
            <p class="Overview">Summerized Itinerary</p>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 1:</div>
              <p>Arrival in Beijing</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Morning: Arrive in Beijing, the capital city of China, and check into your hotel.
                </li>
              </ul>
              <ul>
                <li>
                  Evening: Take a leisurely stroll around Tiananmen Square and explore the Forbidden City, a UNESCO
                  World Heritage Site showcasing China's imperial history.
                </li>
              </ul>

            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 2:</div>
              <p>Mutianyu Great Wall</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Visit the Mutianyu section of the Great Wall, known for its stunning scenery and well-preserved
                  architecture.
                </li>
              </ul>
              <ul>
                <li>
                  Hike along the wall, take in panoramic views, and explore the watchtowers.
                </li>
              </ul>
              <ul>
                <li>
                  Return to Beijing in the evening and sample delicious Beijing cuisine at a local restaurant.
                </li>
              </ul>

            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 3:</div>
              <p>Temple of Heaven and Hutong Tour</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Visit the Temple of Heaven, an architectural masterpiece and UNESCO World Heritage Site.
                </li>
              </ul>
              <ul>
                <li>
                  Enjoy a rickshaw tour through Beijing's historic hutongs (alleys) to experience traditional Beijing
                  culture and lifestyle.
                </li>
              </ul>
              <ul>
                <li>
                  Participate in a hands-on dumpling-making class and savor your creations for dinner.

                </li>
              </ul>
            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 4:</div>
              <p>Badaling Great Wall and Ming Tombs</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Explore the badling section of the great wall, one of the most famous and well- preserved sections.
                </li>
              </ul>
              <ul>
                <li>
                  Visit the ming tombs, the burial site of 13 Emperors of the ming Dynasty, and Explore the Sacred way
                  and Changling Tomb.
                </li>
              </ul>
              <ul>
                <li>
                  Return to Beijing and indulge in Peking duck, a famous local delicacy.
                </li>
              </ul>
            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 5:</div>
              <p>Summer Palace and Beijing Zoo</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Discover the Summer Palace, a UNESCO World Heritage Site known for its stunning gardens, pavilions,
                  and lake.
                </li>
              </ul>
              <ul>
                <li>
                  Visit the Beijing Zoo to see giant pandas and other rare animals.
                </li>
              </ul>
              <ul>
                <li>
                  In the evening, explore Wangfujing Street for shopping and street food.
                </li>
              </ul>
            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 6:</div>
              <p>Great Wall at Jinshanling</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Travel to the Jinshanling section of the Great Wall, known for its breathtaking scenery and
                  well-preserved architecture.
                </li>
              </ul>
              <ul>
                <li>
                  Enjoy a traditional Chinese hotpot dinner in the nearby town.
                </li>
              </ul>

            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 7:</div>
              <p>Departure from Beijing</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Depending on your departure time, you may have some free time for last-minute shopping or exploration.
                </li>
              </ul>
              <ul>
                <li>
                  Transfer to Beijing Capital International Airport for your departure, taking with you unforgettable
                  memories of your Great Wall adventure.
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
            <p style="font-size: 20px;">Huairou District, China, 101406</p>
            <p style="margin-top: -20px;font-size: 12px;">Huairou District, China, 101406.
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
            <p style="font-size: 20px;">Huairou District, China, 101406</p>
            <p style="margin-top: -20px;font-size: 12px;">Huairou District, China, 101406.
            </p>
          </div>
          <div style="width: 100%;height: 20px"></div>
        </div>
        <form action="manage_cart.php" method="POST">
          <div class="buy">
            <div class="container" style="background-color: #272626;">
              <div class="price">
                <p class="Overview" style="font-style: normal !important;">Starting from</p>
              </div>
              <div class="container" style="display: flex; justify-content: space-between;">
                <div style="color: red;padding: 30px ;font-size: 40px;font-weight: bolder;"> ₹1,55,000</div>

                <button style="padding: 10px;margin-bottom: 10px;color: white;
              background-color: red ;cursor: pointer;width: 150px; height: 70px;border-radius: 10px ;"
                  type="submit" name="Add_To_Cart">Add to Cart</button>
                  <input type="hidden" name="Item_Name" value="Great Wall Of china">
                <input type="hidden" name="Price" value="155000">
                <input type="hidden" name="img" value="TourImg/The_Great_Wall_of_China.jpg">

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