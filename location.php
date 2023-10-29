<head>
    <meta charset="utf-8">
    <title !important>Location and Weather</title>
</head>
<?php
include 'includes/config.php';
include 'includes/header.php';
$apiKey = "eb9ca416b1b27411a55f72a027e8ef5c";
$cityId = "1254163";
// $lat = "8.524139";
// $lot = "76.936638";
//$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?lat=".$lat."&lon=".$lot."&lang=en&units=metric&APPID=" . $apiKey;
$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);

// Check if the API request was successful
if ($response === false) {
    echo "Error fetching data.";
} else {
    $data = json_decode($response);

    // Check if the response contains the expected properties
    if (isset($data->name) && isset($data->weather[0]->description) && isset($data->weather[0]->icon) && isset($data->main->temp_max) && isset($data->main->temp_min) && isset($data->main->humidity) && isset($data->wind->speed)) {
        $currentTime = time();
        ?>
        <style>
            .report-container{
                margin-top: 6%;
            }
            body{
                background-color: #510087 !important;
                color: #ffd500 !important;
            }
            .tft{
                font-size: larger;
            }
        </style>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"
        />
        <link rel="stylesheet" href="assets/css/styles.css" />
        <center>
            <div class="report-container">
                <h2><?php echo $data->name; ?> Weather Status</h2>
                <div class="time">
                    <div class='tft'><?php echo date("l g:i a", $currentTime); ?></div>
                    <div class='tft'><?php echo date("jS F, Y", $currentTime); ?></div>
                    <div class='tft'><?php echo ucwords($data->weather[0]->description); ?></div>
                </div>
                <div class="weather-forecast">
                    <img
                        src="https://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                        class="weather-icon" /> <span class='tft'> <?php echo $data->main->temp_max; ?>°C </span>
                </div>
                <div class="time">
                    <div class='tft'>Humidity: <?php echo $data->main->humidity; ?> %</div>
                    <div class='tft'>Wind: <?php echo $data->wind->speed; ?> km/h</div>
                </div>
            </div>
            <div class='mt-2 mb-4'>
                <h1>Location of Launch Site</h1>
                <p>
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15783.46166324031!2d76.8885876!3d8.5124458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05bc2a447ff721%3A0x3873ce5ca6d6b526!2sVikram%20Sarabhai%20Space%20Centre!5e0!3m2!1sen!2sin!4v1698086487179!5m2!1sen!2sin"
                    width="500"
                    height="390"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </p>
            </div>
        </center>
    <?php
    } else {
        echo "Data from the API is incomplete or missing.";
    }
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<?php
    include 'includes/footer.php';
?>