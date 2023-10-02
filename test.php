<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>landing.php test</title>
    <style>
      @font-face {
        font-family: "MBFSpace";
        src: url("assets/fonts/MBFSpace.eot"),
          url("assets/fonts/MBFSpace.woff2") format("woff2"),
          url("assets/fonts/MBFSpace.woff") format("woff"),
          url("assets/fonts/MBFSpace.ttf") format("truetype");
      }
      body {
        color: #fdc500;
        margin: 0;
        overflow: hidden;
        /* background: #5c0099; */
        background: url(assets/background.jpg) center;
        /* background: #000; */
      }
      #intro {
        margin-top: 18%;
        position: absolute;
        top: 20px; /* Adjust the top position as needed */
        left: 50%; /* Center horizontally */
        transform: translateX(-50%); /* Center horizontally */
        text-align: center;
        color: #fdc500; /* Text color */
        /* color: #8a86ce; */
        font-size: 24px; /* Text font size */
        font-family: Arial, sans-serif; /* Text font family */
        z-index: 1; /* Ensure the text appears above the Three.js canvas */
      }
      #three {
        position: absolute;
        top: 0;
        left: 0;
      }
      #astro-text {
        font-family: "MBFSpace", sans-serif;
        padding: 25px;
        font-size: 100px;
        background: rgba(129, 62, 176, 0.25);
        box-shadow: 0 2px 10px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(2px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
      }

      /* Center the text vertically on smaller screens */
      @media screen and (max-width: 768px) {
        #intro {
          margin-top: 50vh;
          transform: translate(-50%, -50%);
        }
        #astro-text {
          font-size: 20vw; /* Adjust font size for smaller screens */
          padding: 5% 10%; /* Adjust padding for smaller screens */
        }
      }
    </style>

  
    <!-- div below is for the text above the threejs -->
    <div id="intro"></div>
    <!-- div below is for threejs -->
    <div id="three"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <script src="assets/js/three-prop.js"></script>

    