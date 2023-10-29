<!-- Bootstrap CSS File -->
<link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

<!-- link below is for triangles in footer -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
/>

<!-- Main Stylesheet File -->
<link href="assets/css/styles.css" rel="stylesheet" />

<!-- link below is for icons of instagram and facebook in footer  -->
<link
  rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
/>

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

<head>
    <meta charset="utf-8">
    <title !important>Environmental Details</title>
</head>
<?php 
    include 'includes/config.php';
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
      <img src="assets\img\eimg1.webp" alt="aircraft launch" class="abtimg"/>
    </div>
    <div class="col-md-6 mt-3 colimgs">
      <p>
      Space Debris.<br>
      Implement strict regulations and best practices for responsible space operations, including the removal of defunct satellites and debris. Encourage the development of cleaner, reusable rocket technologies that reduce the number of launches.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-3 colimgs">
      <p>
      Environmental Impact.<br>
      Promote the development of greener propulsion technologies and enforce stringent environmental impact assessments for launch sites, requiring noise reduction and pollution control measures.
      </p>
    </div>
    <div class="col-md-6 mt-3 colimgs">
      <img src="assets\img\eimg3.jpeg" alt="aircraft in space" class="abtimg"/>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-3 colimgs">
      <img
        src="assets\img\eimg2.jpg"
        alt="girl in aircraft looking outside window"
        class="abtimg"
      />
    </div>
    <div class="col-md-6 mt-3 colimgs">
      <p>
      Space Traffic Management.<br>
      Enhance international cooperation and establish a global space traffic control center to coordinate spacecraft and debris movements, enforcing standardized procedures and protocols while encouraging data sharing among space actors.
      </p>
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