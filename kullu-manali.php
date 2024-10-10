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
    <title>Explore Quest ✈️ | Kullu-Manali</title>
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
            <video src="video/kullumanali.mp4" width="100%" muted loop autoplay></video>
        </div>
    </div>


    <section>
        <div class="tajmahal">
            <div class="container">
                <div class="inner">
                    <p class="home"><a href="index.php">HOME</a> >> Kullu Manali</p>
                    <div class="taj">Kullu Manali Tour Package</div>
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
                    <div class="price">₹27,999</div>
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
                    <img src="TourImg/kullu.jpg" alt="">
                    <div style="background-color: #272626;" class="container">
                        <p class="Overview">Overview</p>
                        <p>Kullu and Manali are nestled in the beautiful Kullu Valley of Himachal Pradesh, surrounded by
                            the majestic Himalayas. They are located about 40 kilometers apart, with Kullu serving as
                            the district headquarters and Manali being a popular hill station.
                            The region is renowned for its stunning natural beauty, with snow-capped mountains, lush
                            green valleys, gushing rivers, and dense forests. The Beas River flows through the valley,
                            adding to its charm.

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
                            Dedicated to Goddess Hadimba, this ancient wooden temple is a major attraction in Manali.
                            Its unique architecture and serene surroundings make it a must-visit.
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
                            Known for its adventure sports, Solang Valley is a paradise for thrill-seekers. You can
                            enjoy activities like paragliding, zorbing, skiing (during winters), and ATV rides amidst
                            stunning natural beauty.
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
                            Located near Kullu, Manikaran is famous for its hot springs and the Gurudwara Sri Guru Nanak
                            Dev Ji. The hot water springs are believed to have therapeutic properties, and visitors
                            often take a dip in its holy waters.
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
                            Another popular attraction near Manali, Vashisht Hot Water Springs is renowned for its
                            natural sulfur springs. It's a great place to relax and rejuvenate amidst scenic
                            surroundings.
                        </p>

                        <hr>
                        <p class="Overview">Summerized Itinerary</p>
                        <div class="days_container" style="display: flex;">
                            <div class="days">Day 1:</div>
                            <p>Arrival in Kullu/Manali
                            </p>
                        </div>
                        <div class="ul_li">
                            <ul>
                                <li>
                                    Morning: Arrive at Bhuntar Airport or Kullu Bus Stand.
                                    Transfer to your hotel in Manali.
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    Midday: Relax and acclimatize to the altitude.
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    Evening: take a leisurely stroll on Mall Road and explore the local market.
                                </li>
                            </ul>
                        </div>
                        <div class="days_container" style="display: flex;">
                            <div class="days">Day 2:</div>
                            <p>  Local Sightseeing in Manali</p>
                        </div>
                        <div class="ul_li">
                            <ul>
                                <li>
                                    Morning:Visit Hadimba Temple, an ancient wooden temple dedicated to Goddess Hadimba.
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    Midday: Explore the Tibetan Monastery to learn about Tibetan culture and buy handicrafts.
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    Afternoon: Visit Club House for recreational activities like boating and indoor games.
                                </li>
                            </ul>

                        </div>
                        <div class="days_container" style="display: flex;">
                            <div class="days">Day 3:</div>
                            <p>Excursion to Solang Valley</p>
                        </div>
                        <div class="ul_li">
                            <ul>
                                <li>
                                Enjoy breakfast at the hotel.
                                </li>
                            </ul>
                            <ul>
                                <li>
                                Head to Solang Valley, around 13 kilometers from Manali.
                                </li>
                            </ul>
                            <ul>
                                <li>
                                Engage in adventure activities like paragliding, zorbing, and ATV rides.
                                </li>
                            </ul>

                        </div>
                        <div class="days_container" style="display: flex;">
                            <div class="days">Day 4:</div>
                            <p>Trip to Rohtang Pass</p>
                        </div>
                        <div class="ul_li">
                            <ul>
                                <li>
                                Depart early morning for Rohtang Pass.
                                </li>
                            </ul>
                            <ul>
                                <li>
                                Enjoy the scenic drive and stop at Marhi for tea and snacks.
                                </li>
                            </ul>
                            <ul>
                                <li>
                                Spend time at Rohtang Pass, enjoying snow activities like snowball fights and sledging.
                                </li>
                            </ul>

                        </div>
                        <div class="days_container" style="display: flex;">
                            <div class="days">Day 5:</div>
                            <p>Visit Kullu and Naggar</p>
                        </div>
                        <div class="ul_li">
                            <ul>
                                <li>
                                Drive to Kullu, approximately 40 kilometers from Manali.
                                </li>
                            </ul>
                            <ul>
                                <li>
                                Visit the famous Kullu Shawl Factory and shop for traditional Himachali shawls.
                                </li>
                            </ul>
                            <ul>
                                <li>
                                Explore the bustling markets of Kullu for souvenirs and local crafts.
                                </li>
                            </ul>

                        </div>
                        <div class="days_container" style="display: flex;">
                            <div class="days">Day 6:</div>
                            <p>Departure</p>
                        </div>
                        <div class="ul_li">
                            <ul>
                                <li>
                                Enjoy breakfast at the hotel.
                                </li>
                            </ul>
                            <ul>
                                <li>
                                Check out from the hotel and transfer to Bhuntar Airport or Kullu Bus Stand for your onward journey.
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
                        <p style="font-size: 20px;"> Kullu Bhuntar airport</p>
                        <p style="margin-top: -20px;font-size: 12px;"> Kullu Bhuntar airport,Manali.
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
                        <p style="font-size: 20px;"> Kullu Bhuntar airport</p>
                        <p style="margin-top: -20px;font-size: 12px;"> Kullu Bhuntar airport,Manali.
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
                                <div style="color: red;padding: 30px ;font-size: 40px;font-weight: bolder;">₹27,999
                                </div>

                                <button style="padding: 10px;margin-bottom: 10px;color: white;
              background-color: red ;cursor: pointer;width: 150px; height: 70px;border-radius: 10px ;" type="submit"
                                    name="Add_To_Cart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Kytoto Japan">
                                <input type="hidden" name="Price" value="27999">
                                <input type="hidden" name="img" value="TourImg/kullu.jpg">

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