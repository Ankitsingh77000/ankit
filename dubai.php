<?php
session_start();

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
//   header("location: login.php");
//   exit;
// }
include "loading.php";
// print_r($_SESSION['cart']);
// $price = 89999;
// $_SESSION['price'] = $price;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Quest ✈️ | Dubai</title>
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
     
      <video src="video/dubai.mp4" width="100%" muted loop autoplay></video>
    </div>
  </div>


  <section>
    <div class="tajmahal">
      <div class="container">
        <div class="inner">
          <p class="home"><a href="index.php">HOME</a> >> Dubai</p>
          <div class="taj">Dubai Tour</div>
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
            </svg> Dubai
          </div>
          <div class="price">₹89,999</div>
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
          <img src="TourImg/Dubai.jpg" alt="">
          <div style="background-color: #272626;" class="container">
            <p class="Overview">Overview</p>
            <p>The tallest building in the world, offering breathtaking panoramic views of the city from its observation
              decks.One of the largest shopping malls globally, housing an array of shops, restaurants, entertainment
              options, and attractions like the Dubai Aquarium and Underwater Zoo.
              A picturesque waterfront area with skyscrapers, luxury yachts, and a vibrant nightlife scene.A man-made
              island in the shape of a palm tree, home to upscale hotels, beaches, and attractions like Atlantis, The
              Palm. Experience the thrill of dune bashing in 4x4 vehicles, camel riding, sandboarding, and enjoying
              traditional Arabian entertainment and cuisine at a desert camp.Explore the historic heart of Dubai with a
              traditional dhow cruise along the creek, offering views of the city's skyline and heritage sites like the
              Al Fahidi Fort and Dubai Museum.
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
              Experience the awe-inspiring views from the observation decks of the world's tallest building.
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
              Shop till you drop in one of the largest shopping malls globally, home to luxury brands, entertainment
              options, and attractions like the Dubai Aquarium.
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
              Embark on a thrilling desert adventure with activities like dune bashing, camel riding, and traditional
              Arabian entertainment under the stars.
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
              Explore the iconic man-made island with its luxury hotels, beaches, and attractions like Atlantis, The
              Palm.
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
              Stroll along the waterfront promenade lined with skyscrapers, dine at trendy restaurants, and enjoy the
              vibrant nightlife.
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
              Immerse yourself in the city's history at the Al Fahidi Historical Neighbourhood, visit traditional souks,
              and explore heritage sites like the Dubai Museum.
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
              Cruise along the historic waterway on a traditional dhow boat and take in the views of the city's skyline
              and cultural landmarks.
            </p>
            <hr>
            <p class="Overview">Summerized Itinerary</p>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 1:</div>
              <p>Visit the Burj Khalifa </p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Morning: Visit the Burj Khalifa and enjoy panoramic views of the city.
                </li>
              </ul>
              <ul>
                <li>
                  Afternoon: Explore The Dubai Mall, including attractions like the Dubai Aquarium.
                </li>
              </ul>
              <ul>
                <li>
                  Evening: Dine at a restaurant overlooking the Dubai Fountain show.
                </li>
              </ul>
            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 2:</div>
              <p>Embark on desert/safari</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Morning: Embark on a desert safari for dune bashing and camel riding.
                </li>
              </ul>
              <ul>
                <li>
                  Afternoon: Enjoy activities at the desert camp, such as sandboarding and henna painting.
                </li>
              </ul>
              <ul>
                <li>
                  Evening: Experience traditional entertainment and a BBQ dinner under the stars.
                </li>
              </ul>

            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 3:</div>
              <p>Discover Palm Jumeirah</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Morning: Discover the Palm Jumeirah, visiting attractions like Atlantis, The Palm.
                </li>
              </ul>
              <ul>
                <li>
                  Afternoon: Relax at Jumeirah Beach and indulge in water sports or sunbathing.
                </li>
              </ul>
              <ul>
                <li>
                  Evening: Take a leisurely walk along Dubai Marina and enjoy dinner at a waterfront restaurant.
                </li>
              </ul>
            </div>
            <div class="days_container" style="display: flex;">
              <div class="days">Day 4:</div>
              <p>Departure</p>
            </div>
            <div class="ul_li">
              <ul>
                <li>
                  Bid farewell to Pelling and make your way to Bhopal (BHO) Airport.
                </li>
              </ul>
              <ul>
                <li>
                  On the last day of your Dubai tour, if your departure is scheduled for later in the day, you can plan
                  some activities based on your flight time:
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
            <p style="font-size: 20px;">Dubai (DXB) Airport </p>
            <p style="margin-top: -20px;font-size: 12px;">Dubai (DXB) Airport , Dubai, Delhi 25314
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
            <p style="font-size: 20px;">Dubai (DXB) Airport </p>
            <p style="margin-top: -20px;font-size: 12px;">Dubai (DXB) Airport , Dubai, Delhi 25314
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
                <div name="price_1" style="color: red;padding: 30px ;font-size: 40px;font-weight: bolder;">₹89,999</div>

                <button style="padding: 10px;margin-bottom: 10px;color: white;
              background-color: red ;cursor: pointer;width: 150px; height: 70px;border-radius: 10px ;" type="submit"
                  name="Add_To_Cart">Add to cart</button>
                <input type="hidden" name="Item_Name" value="DUBAI ">
                <input type="hidden" name="Price" value="89999">
                <input type="hidden" name="img" value="TourImg/Dubai.jpg">
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