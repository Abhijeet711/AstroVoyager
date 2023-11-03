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
    session_start();
    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Redirect to the login page or display an error message
    echo "<script>window.location.href = 'login.php';</script>";
    exit();
}
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
    font-size: large;
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
    width: 300px;
  }
  .lgbtn{
    color: #ffd500;
    background-color: #3d0066;
    border: 1px solid #ffd500;
    border-radius: 25px;
    width: 300px;
    font-size: larger;
    padding: 15px;
  }
</style>
<div class="container mt-5 mb-3">
  <div class="row">
    <div class="col-md-5 mt-5 colimgs">
      <img src="assets\img\spc1.webp" alt="aircraft 1" class="abtimg"/>
    </div>
    <div class="col-md-7 mt-3 colimgs">
        <div class="container">
            <div class="row">Boeing CST-100 Starliner</div>
            <div class="row">$220,000 per person</div>
            <div class="row">Boeing's CST-100 Starliner is a versatile spacecraft designed for various missions, including commercial space tourism. It can accommodate up to 7 passengers and is equipped with modern amenities and safety features. Starliner offers trips to inner orbits, allowing passengers to conduct scientific experiments, observe celestial phenomena, and participate in space-related activities under the guidance of experienced astronauts.</div>
            <form action="bookingform.php" method="post"><div class="row mt-2"><button class="centered-form-submit-button">BOOK NOW!</button></div></form>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5 mt-3 colimgs">
      <img src="assets\img\spc2.png" alt="aircraft 1" class="abtimg"/>
    </div>
    <div class="col-md-7 mt-3 colimgs">
        <div class="container">
            <div class="row">SpaceX Starliner</div>
            <div class="row">$200,000 per person</div>
            <div class="row">SpaceX Starliner is a state-of-the-art spacecraft designed for commercial space tourism and scientific research missions in inner orbits. It can accommodate up to 6 passengers along with 2 professional astronauts. The spacecraft offers large windows for breathtaking views of the Earth and space. Passengers will experience microgravity and enjoy various experiments and educational activities during the journey.</div>
            <div class="row mt-2"><button class="centered-form-submit-button">COMING SOON!</button></div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5 mt-3 colimgs">
        <img src="assets\img\spc3.jpg" alt="aircraft 1" class="abtimg"/>
    </div>
    <div class="col-md-7 mt-3 colimgs">
        <div class="container">
            <div class="row">Blue Origin New Shepard</div>
            <div class="row"> $250,000 per person</div>
            <div class="row">Blue Origin's New Shepard is a suborbital spacecraft that allows both astronauts and tourists to experience weightlessness and see the curvature of the Earth. It features a spacious cabin with large windows and comfortable seating. The spacecraft is designed for vertical takeoff and landing, ensuring a safe and smooth journey for all passengers.</div>
            <div class="row mt-2"><button class="centered-form-submit-button">COMING SOON!</button></div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5 mt-3 colimgs">
        <img src="assets\img\spc4.jpg" alt="aircraft 1" class="abtimg"/>
    </div>
    <div class="col-md-7 mt-3 colimgs">
        <div class="container">
            <div class="row">Virgin Galactic SpaceShipTwo</div>
            <div class="row">$300,000 per person</div>
            <div class="row">Virgin Galactic's SpaceShipTwo is a suborbital spaceplane that takes passengers on a thrilling journey to the edge of space. The spacecraft is carried aloft by a mothership and then released to reach suborbital space. Passengers will experience a few minutes of weightlessness and enjoy spectacular views of the Earth. SpaceShipTwo is equipped with large windows, providing a unique and immersive space travel experience.</div>
            <div class="row mt-2"><button class="centered-form-submit-button">COMING SOON!</button></div>
        </div>
    </div>
  </div>
  <center>
    <div class="row mt-5 centered">
      <form name="form1" method="GET" action="includes/logout.php">
        <input type="submit" value="Logout" class="legenda lgbtn">
      </form>
    </div>
  </center>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<?php
    include 'includes/footer.php';
?>