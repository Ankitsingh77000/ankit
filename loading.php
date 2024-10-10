<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="main_loading">
        <div class="loading-container">
            <div class="loading-text">
                <span>L</span>
                <span>O</span>
                <span>A</span>
                <span>D</span>
                <span>I</span>
                <span>N</span>
                <span>G</span>
            </div>
        </div>
    </div>
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap'); */

        * {
            box-sizing: border-box;
        }

        .main_loading {
            z-index: 9999999;
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            /* background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(0, 152, 155, 1) 0.1%, rgba(0, 94, 120, 1) 94.2%); */
            background-size: 100%;
            font-family: 'Montserrat', sans-serif;
            overflow: hidden;
            overflow-y: hidden;
            overflow-x: hidden;
        }

        .loading-container {
            width: 100%;
            max-width: 520px;
            text-align: center;
            color: #fff;
            position: relative;
            margin: 0 32px;

            &:before {
                content: '';
                position: absolute;
                width: 100%;
                height: 3px;
                background-color: #fff;
                bottom: 0;
                left: 0;
                border-radius: 10px;
                animation: movingLine 2.4s infinite ease-in-out;
            }
        }

        @keyframes movingLine {
            0% {
                opacity: 0;
                width: 0;
            }

            33.3%,
            66% {
                opacity: 0.8;
                width: 100%;
            }

            85% {
                width: 0;
                left: initial;
                right: 0;
                opacity: 1;
            }

            100% {
                opacity: 0;
                width: 0;
            }
        }

        .loading-text {
            font-size: 5vw;
            line-height: 64px;
            letter-spacing: 10px;
            margin-bottom: 32px;
            display: flex;
            justify-content: space-evenly;

            span {
                animation: moveLetters 2.4s infinite ease-in-out;
                transform: translatex(0);
                position: relative;
                display: inline-block;
                opacity: 0;
                text-shadow: 0px 2px 10px rgba(46, 74, 81, 0.3);
            }
        }

        @for $i from 1 through 7 {
            .loading-text span:nth-child(#{$i}) {
                animation-delay: $i * 0.1s;
            }
        }

        @keyframes moveLetters {
            0% {
                transform: translateX(-15vw);
                opacity: 0;
            }

            33.3%,
            66% {
                transform: translateX(0);
                opacity: 1;
            }

            100% {
                transform: translateX(15vw);
                opacity: 0;
            }
        }
    </style>
    <script>
        window.addEventListener("load", function () {
            var preloaderContainer = document.querySelector(".main_loading");
            preloaderContainer.style.display = "none";
        });
    </script>
</body>

</html>