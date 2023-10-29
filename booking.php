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

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Astro Voyager</title>

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
    <div class="col-md-5 mt-5 colimgs">
        <!-- put image link in src -->
      <img src="assets\img\eimg1.webp" alt="aircraft 1" class="abtimg"/>
    </div>
    <div class="col-md-7 mt-3 colimgs">
        <div class="container">
            <div class="row">NAME</div>
            <div class="row">PRICE</div>
            <div class="row">DETAILS</div>
            <div class="row">
                <!-- form for booking functionality -->
                BOOKING FORM / BUTTON | BOOK NOW!
            </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5 mt-3 colimgs">
        <!-- put image link in src -->
      <img src="assets\img\eimg1.webp" alt="aircraft 1" class="abtimg"/>
    </div>
    <div class="col-md-7 mt-3 colimgs">
        <div class="container">
            <div class="row">NAME</div>
            <div class="row">PRICE</div>
            <div class="row">DETAILS</div>
            <div class="row">COMING SOON</div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5 mt-3 colimgs">
        <!-- put image link in src -->
      <img src="assets\img\eimg1.webp" alt="aircraft 1" class="abtimg"/>
    </div>
    <div class="col-md-7 mt-3 colimgs">
        <div class="container">
            <div class="row">NAME</div>
            <div class="row">PRICE</div>
            <div class="row">DETAILS</div>
            <div class="row">COMING SOON</div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5 mt-3 colimgs">
        <!-- put image link in src -->
      <img src="assets\img\eimg1.webp" alt="aircraft 1" class="abtimg"/>
    </div>
    <div class="col-md-7 mt-3 colimgs">
        <div class="container">
            <div class="row">NAME</div>
            <div class="row">PRICE</div>
            <div class="row">DETAILS</div>
            <div class="row">COMING SOON</div>
        </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<?php
    include 'includes/footer.php';
?>