<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AstroVoyager</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- TAILWIND -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
      referrerpolicy="no-referrer"
    />
    <!-- BOOTSTRAP -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
      integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- Favicons -->
    <!-- put logo link in href -->
    <link href="assets/img/#" rel="icon">
    <link href="assets/img/#" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
      integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- Libraries CSS Files -->
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/event-carousel.css" rel="stylesheet">

    <style>
        /* #intro {
            width: 100%;
            height: 140vh;
            background: #fff;
            background-size: cover;
            overflow: hidden;
            position: relative;
        }

        .landing-inner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            text-align: center;
            padding-top: 30px;
        }

        .landing {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .landing h1 {
            font-size: 50px;
        }

        .landing p {
            font-size: 20px;
        }

        .countdown.mobile-nav-active {
            font-size: 50vw;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .countdown {
            font-size: 5vw;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .countdown div {
            padding: 1vw;
            border: 1px #fff solid;
            border-radius: 2em;
            background: #FFF;
            opacity: 0.7;
            margin: 0.5rem;
        }

        .countdown div:first-child {
            background: #FFF;
        }

        .countdown span {
            display: block;
            font-size: 3vh;
        }

        @media (max-width: 350px) {
            .landing img {
                width: 70%;
            }

            .landing h1 {
                font-size: 40px;
            }

            .countdown {
                font-size: 5vw;
                flex-direction: column;
            }

            .countdown div {
                display: none;
            }

            .countdown div:first-child {
                display: block;
                width: 50%;
                padding: 2rem;
            }
        } */

        #header #logo img {
            position: absolute;
            left: 3%;
            padding: 3px;
            margin: auto;
            height: 80px;
            top: 12%;
        }

        #nav-menu-container {
            float: right;
            margin: 0;
            margin-right: -35px;
        }

        @media (min-width: 992px) {
            .venoframe,
            .vbox-inline {
                max-width: 1200px;
                width: 63%;
                height: 540px;
                height: 70vh;
            }
        }

        #header {
            height: 90px;
        }
    </style>
</head>

<body>
    <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <!-- put link to landing page in <a href> -->
        <!-- put link to image in img src -->
        <a href="#" class="scrollto"
          ><img src="assets/background.jpg" alt="" title=""
        /></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <!-- link to home landing page -->
          <li class="menu-active"><a href="#">Home</a></li>
          <!-- link to about us page -->
          <li><a href="#">About Us</a></li>
          <!-- link to images page -->
          <li><a href="#">Images</a></li>
          <!-- link to login/registration page -->
          <li><a href="#">Login</a></li>
          <!-- put link to img in src -->
        </ul>
      </nav>
    </div>
  </header>
