<head>
    <meta charset="utf-8">
    <title !important>About Us</title>
</head>
<?php
    include 'includes/header.php';
?>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"
/>
<link rel="stylesheet" href="assets/css/styles.css" />
<style>
    body{
        background-color: #510087 !important;
    }
  .abtimg {
    height: auto;
    width: 100%;
    border-radius: 10%;
  }
  .colimgs {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #ffd500;
    font-size: x-large;
  }
  .centered-container {
  max-width: 500px;
  margin: 0 auto;
  text-align: center;
  }
  .centered-form-label {
    color: #ffd500;
    font-size: x-large;
    background-color: #510087;
    display: block;
    margin: 10px 0;
  }
  .centered-form-input {
    display: flex;
    justify-content: center;
    font-size: x-large;
  }
  .centered-form-input-field {
    width: 100%;
    border: 1px solid #ffd500;
    border-radius: 25px;
    padding: 5px;
    background-color: #3d0066;
    color: #fdc500;
  }
  .centered-form-submit {
    display: flex;
    justify-content: center;
  }
  .centered-form-submit-button {
    color: #ffd500;
    font-size: x-large;
    background-color: #510087;
    border: 1px solid #ffd500;
    border-radius: 25px;
    padding: 10px 20px;
    cursor: pointer;
  }
</style>
<div class="container mt-5 mb-3">
  <div class="row">
    <div class="col-md-6 mt-5 colimgs">
      <img src="assets\img\img1.jpg" alt="aircraft launch" class="abtimg"/>
    </div>
    <div class="col-md-6 mt-3 colimgs">
      <p>
      Explore the Universe with AstroVoyager.<br>
      Your gateway to orbital space adventures.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-3 colimgs">
      <p>
      Incredible Space Journeys. <br>
      Embark on unforgettable space voyages with our state-of-the-art spacecraft.
      </p>
    </div>
    <div class="col-md-6 mt-3 colimgs">
      <img src="assets\img\img2.webp" alt="aircraft in space" class="abtimg"/>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-3 colimgs">
      <img
        src="assets\img\img3.webp"
        alt="girl in aircraft looking outside window"
        class="abtimg"
      />
    </div>
    <div class="col-md-6 mt-3 colimgs">
      <p>
      Experienced Astronauts. <br>
      Travel with experienced astronauts who ensure your safety and enjoyment throughout the journey.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-3 colimgs">
      <p>
      Global Space Destinations. <br>
      Discover a variety of destinations in space, from lunar expeditions to orbital adventures.
      </p>
    </div>
    <div class="col-md-6 mt-3 colimgs">
      <img src="assets\img\img4.jpg" alt="view outside from aircraft" class="abtimg"/>
    </div>
  </div>
  <div class="row mt-4">
  <h1 class="colimgs">Subscribe to Our Newsletter</h1>
    <p class="colimgs" style="margin-bottom:-4px;">
      Stay up-to-date with our latest news and updates by subscribing to our
      newsletter.
    </p>
    <form class="newsform" action="sendMail.php" method="post">
    <div class="centered-container">
      <label class="centered-form-label" for="emailto">Email Address: </label>
      <div class="centered-form-input mt-3">
          <input class="centered-form-input-field" type="email" id="emailto" name="emailto" required />
      </div>
      <div class="centered-form-submit mt-3">
          <input class="centered-form-submit-button" type="submit" value="Subscribe" />
      </div>
    </div>
    </form>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<?php
    include 'includes/footer.php';
?>