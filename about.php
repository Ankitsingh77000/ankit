<?php
session_start();

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
//     header("location: login.php");
//     exit;
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Quest ✈️ | About</title>
    <link rel="shortcut icon" href="logo/explorequest.png" type="image/x-icon">
</head>

<body>
    <?php include ("navbar.php"); ?>
    <style>
        .hidden {
            position: relative;
            background: linear-gradient(100deg, #e9f8e9, #a1b6b0);
            height: 80px;
        }

        .inner_container {
            font-family: Arial, sans-serif;
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        .inner_container h1 {
            font-family: Arial, sans-serif;
            text-align: center;
            color: #333;
        }

        .inner_container p {
            font-family: Arial, sans-serif;
            color: #666;
            line-height: 1.6;
        }

        .mission {
            font-family: Arial, sans-serif;
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .mission h2 {
            font-family: Arial, sans-serif;
            color: #333;
        }
    </style>

    <div class="inner_container">
        <h1>About Us</h1>
        <p>Adventure Tours is your premier destination for thrilling travel experiences. Our passionate team of
            expert guides specializes in creating unforgettable adventures that immerse you in the beauty and
            culture of destinations worldwide. Whether you crave adrenaline-pumping activities or prefer leisurely
            explorations, we offer a diverse range of tours tailored to your interests. Committed to sustainable and
            responsible tourism, we minimize our environmental impact and support local communities. With Adventure
            Tours, embark on a journey of discovery, cultural enrichment, and lifelong memories. Let us be your
            guide to extraordinary adventures.</p>

        <div class="mission">
            <h2>Our Mission</h2>
            <p>Our mission is to provide high-quality products/services to our customers and create long-lasting
                relationships built on trust and satisfaction. We strive to innovate and adapt to meet the evolving
                needs of our clients while maintaining our commitment to excellence.</p>
        </div>
    </div>

    <section class="about-section">
        <div class="inner_container">
            <h1>About Adventure Tours</h1>
            <p>Welcome to Adventure Tours, your gateway to unforgettable travel experiences! We specialize in providing
                thrilling adventures that take you off the beaten path and immerse you in the beauty and culture of
                destinations around the world.</p>
            <p>Our team of experienced guides and travel experts is passionate about creating memorable journeys that
                cater to adventurers of all ages and interests. Whether you're seeking adrenaline-pumping activities
                like trekking through rugged landscapes or prefer leisurely explorations of historic landmarks, we have
                the perfect tour for you.</p>
        </div>
    </section>
    <section class="mission-section">
        <div class="inner_container">
            <h2>Our Mission</h2>
            <p>At Adventure Tours, our mission is to inspire a sense of wonder and discovery through immersive travel
                experiences. We believe that travel has the power to broaden horizons, foster cultural understanding,
                and create lifelong memories.</p>
            <p>We are committed to sustainability and responsible tourism practices, striving to minimize our
                environmental impact and support local communities in the destinations we visit. By promoting ethical
                tourism and preserving the natural and cultural heritage of each region, we aim to ensure that future
                generations can continue to enjoy the beauty of our planet.</p>
        </div>
    </section>

    <?php include ("footer.php"); ?>
</body>

</html>