<?php
session_start();

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
//   header("location: login.php");
//   exit;
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Quest ✈️ | Home</title>
  <link rel="shortcut icon" href="logo/explorequest.png" type="image/x-icon">
  <!-- <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.0/bundled/lenis.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script> -->
  <!-- <script src="gsapscript.js"></script> -->
  <script src="js/bundledlenis.js"></script>
  <script src="js/gsap.min.js"></script>
  <script src="js/gsapscrolltrigercloudflare.js"></script>
  <script src="js/app.js" defer></script>
  <script src="js/locomotive.js" defer></script>
  <link rel="stylesheet" href="style/footer_b.css">
  <link rel="stylesheet" href="style/footer.css">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/selection.css">
  <link rel="stylesheet" href="style/gsap.css">
  <!-- <script src="js/comback.js"></script> -->
  <script>

  </script>
</head>

<body>
 
  <?php
  include("loading.php");
  include "navbar.php";
  ?>
  <main>
    <div class="vignette hidden"></div>
    <img src="img/background.png" data-speedx="0.3" data-speedy="0.38" data-distance="-200" class="parallax bg-img">
    <img src="img/fog_7.png" data-speedx="0.27" data-speedy="0.32" data-distance="850" class="parallax fog-7">
    <img src="img/mountain_10.png" data-speedx="0.195" data-speedy="0.305" data-distance="1100"
      class="parallax mountain-10">
    <img src="img/fog_6.png" data-speedx="0.25" data-speedy="0.28" data-distance="1300" class="parallax fog-6">
    <img src="img/mountain_9.png" data-speedx="0.125" data-speedy="0.155" data-distance="1700"
      class="parallax mountain-9">
    <img src="img/mountain_8.png" data-speedx="0.1" data-speedy="0.11" data-distance="1800" class="parallax mountain-8">
    <img src="img/fog_5.png" data-speedx="0.16" data-speedy="0.105" data-distance="1900" class="parallax fog-5">
    <img src="img/mountain_7.png" data-speedx="0.1" data-speedy="0.1" data-distance="2000" class="parallax mountain-7">
    <div style="width: 1000px !important;" data-speedx="0.07" data-speedy="0.07" data-distance="0"
      class="text parallax">
      <h2>Explore Quest</h2>
      <h1>Embark on the Journey</h1>
    </div>
    <img src="img/mountain_6.png" data-speedx="0.065" data-speedy="0.05" data-distance="2300"
      class="parallax mountain-6">
    <img src="img/fog_4.png" data-speedx="0.135" data-speedy="0.015" data-distance="2400" class="parallax fog-4">
    <img src="img/mountain_5.png" data-speedx="0.08" data-speedy="0.0120" data-distance="2550"
      class="parallax mountain-5">
    <img src="img/fog_3.png" data-speedx="0.11" data-speedy="0.018" data-distance="2800" class="parallax fog-3">
    <img src="img/mountain_4.png" data-speedx="0.059" data-speedy="0.024" data-distance="3200"
      class="parallax mountain-4">
    <img src="img/mountain_3.png" data-speedx="0.04" data-speedy="0.018" data-distance="3400"
      class="parallax mountain-3">
    <img src="img/fog_2.png" data-speedx="0.15" data-speedy="0.0115" data-distance="3600" class="parallax fog-2">
    <img src="img/mountain_2.png" data-speedx="0.0235" data-speedy="0.013" data-distance="3800"
      class="parallax mountain-2">
    <img src="img/mountain_1.png" data-speedx="0.027" data-speedy="0.018" data-distance="4000"
      class="parallax mountain-1">
    <img src="img/sun_rays.png" class="sun-rays hidden">
    <img src="img/black_shadow.png" class="black-shadow hidden">
    <img src="img/fog_1.png" data-speedx="0.12" data-speedy="0.01" data-distance="4200" class="parallax fog-1">

  </main>

  <div id="page3">
    <div class="wrapp__main">
      <div class="wrapp">
        <div class="spacer">

        </div>
        <section class="work">

          <div class="work__left">
            <div class="work__text">

              <div class="work__info">
                <div class="work__left-b1">
                  <h2 class="title">the Taj Mahal<span class="stroke"></span></h2>
                  <span class="work__num">Step into a world of timeless romance and architectural grandeur at the Taj
                    Mahal.</span>
                  <a href="tajmahal.php" class="work__link">view more</a>
                </div>
              </div>

              <div class="work__info">
                <div class="work__left-b1">
                  <h2 class="title">Dubai<span class="stroke"></span></h2>
                  <span class="work__num">A city that defies expectations and redefines the limits of possibility.
                  </span>
                  <a href="dubai.php" class="work__link">view more</a>
                </div>
              </div>

              <div class="work__info">
                <div class="work__left-b1">
                  <h2 class="title">the Great Wall of China<span class="stroke"></span></h2>
                  <span class="work__num">Embark on a journey through time and explore the marvels of the Great Wall of
                    China.</span>
                  <a href="china.php" class="work__link">view more</a>
                </div>
              </div>

              <div class="work__info">
                <div class="work__left-b1">
                  <h2 class="title">Kyoto, Japan <span class="stroke"></span></h2>
                  <span class="work__num">A city where ancient traditions blend seamlessly with modern
                    innovation.</span>
                  <a href="japan.php" class="work__link">view more</a>
                </div>
              </div>
            </div>

          </div>

          <div class="work__right">
            <div class="work__right-b1">
              <div class="work__photo">
                <div class="work__photo-item">
                  <img src="TourImg/Taj_mahal.jpg" alt="">
                </div>
                <div class="work__photo-item">
                  <img src="TourImg/Dubai.jpg" alt="">
                </div>
                <div class="work__photo-item">
                  <img src="TourImg/The_Great_Wall_of_China.jpg" alt="">
                </div>
                <div class="work__photo-item">
                  <img src="TourImg/Kyoto_Japan.jpg" alt="">

                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- <div class="spacer"></div> -->
      </div>
    </div>
  </div>

  <div class="wrapp_hidden">
    <div class="hidden-b1">
      <div class="hidden_photo">
        <div class="hidden-item">
          <img src="TourImg/Taj_mahal.jpg" alt="">
          <h2 class="hidden_title">the Taj Mahal<span class="hidden_stroke"></span></h2>
          <span class="hidden_num">Step into a world of timeless romance and architectural grandeur at the Taj
            Mahal.</span>
          <a href="tajmahal.php" class="hidden_link">view more</a>
        </div>
        <div class="hidden-item">
          <img src="TourImg/Dubai.jpg" alt="">
          <h2 class="hidden_title">Dubai<span class="hidden_stroke"></span></h2>
          <span class="hidden_num">A city that defies expectations and redefines the limits of possibility. </span>
          <a href="dubai.php" class="hidden_link">view more</a>
        </div>
        <div class="hidden-item">
          <img src="TourImg/The_Great_Wall_of_China.jpg" alt="">
          <h2 class="hidden_title">the Great Wall of China<span class="hidden_stroke"></span></h2>
          <span class="hidden_num">Embark on a journey through time and explore the marvels of the Great Wall of
            China.</span>
          <a href="china.php" class="hidden_link">view more</a>
        </div>
        <div class="hidden-item">
          <img src="TourImg/Kyoto_Japan.jpg" alt="">
          <h2 class="hidden_title">Kyoto, Japan <span class="hidden_stroke"></span></h2>
          <span class="hidden_num">A city where ancient traditions blend seamlessly with modern innovation.</span>
          <a href="japan.php" class="hidden_link">view more</a>
        </div>
      </div>
    </div>
  </div>

  <div class="page4">
    <div class="page4_main">
      <div class="page4_container">
        <video id="promo_video" src="video/tourpromo.mp4" preload="auto" width="100%" muted autoplay loop></video>
      </div>
    </div>

    <script>

      const video_upper = document.getElementById("promo_video");
      video_upper.addEventListener("ended", function () {
        video_upper.currentTime = 0;
        video_upper.play();
      });
      video_upper.play();

    </script>

  </div>


  <div class="selection">
    <link rel="stylesheet" href="style/selection.css">
    <div class='page'>
      <div class='content'>
        <div class='circle'>
          <div class='circle_title'>
            <h2>Great Outdoors</h2>
            <h3>Get some fresh air</h3>
          </div>
          <div class='circle_inner'>
            <div class='circle_inner__layer'>
              <img src='selection/pc1.png'>
            </div>
            <div class='circle_inner__layer'>
              <img src='selection/pc2.png'>
            </div>
            <div class='circle_inner__layer'>
              <img src='selection/pc3.png'>
            </div>
          </div>
          <div class='content_shadow'></div>
        </div>
      </div>
      <div class='content'>
        <div class='circle'>
          <div class='circle_title'>
            <h2>City Breaks</h2>
            <h3>Go somewhere new</h3>
          </div>
          <div class='circle_inner'>
            <div class='circle_inner__layer'>
              <img src='selection/pc4.png'>
            </div>
            <div class='circle_inner__layer'>
              <img src='selection/pc5.png'>
            </div>
            <div class='circle_inner__layer'>
              <img src='selection/pc6.png'>
            </div>
          </div>
          <div class='content_shadow'></div>
        </div>
      </div>
      <div class='content'>
        <div class='circle'>
          <div class='circle_title'>
            <h2>Cheap Flights</h2>
            <h3>Come fly with us</h3>
          </div>
          <div class='circle_inner'>
            <div class='circle_inner__layer'>
              <img src='selection/pc7.png'>
            </div>
            <div class='circle_inner__layer'>
              <img src='selection/pc8.png'>
            </div>
            <div class='circle_inner__layer'>
              <img src='selection/pc9.png'>
            </div>
          </div>
          <div class='content_shadow'></div>
        </div>
      </div>
    </div>



  </div>


  <?php
  include ("footerup.php");
  ?>


  <?php
  include ("footer.php");
  ?>

  <style></style>
</body>

</html>