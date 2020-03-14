<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$server = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);

	$conn = new mysqli($server, $username, $password, $db);

    /**
     * Cleans data to prevent HTML injection
     * @param string $data Input string to be cleaned
     * @return string Cleaned input string
     */
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     * PHP and mySQL do not support true boolean values (true/false) and use 0 and 1 instead. This function
     * converts these values to "No" and "Yes" strings respectively so content can be more readable in emails.
     * @param string $boolean A regular boolean value (0 or 1)
     * @return string "Yes" or "No" depending on the boolean input
     */
    function convert_bool_to_string($boolean) {
        $boolean_string = "";
        if ($boolean == true) {
            $boolean_string = "Yes";
        }
        else {
            $boolean_string = "No";
        }
        return $boolean_string;
    }

    $name = sanitize($_POST['name']);
    $num_people = $_POST['num-people'];
    $visit_date = $_POST['visit-date'];
    $rating = $_POST['rating'];
    $favorite_place = $_POST['favorite'];
    $car = false;
    $cta_l = false;
    $cta_bus = false;
    $bike_scooter = false;
    $water_taxi = false;
    $carriage = false;

    // If any of the checkboxes were checked
    if (isset($_POST['transportation'])) {
        $transportation = $_POST['transportation'];

        if (in_array("Car", $transportation)) {
            $car = true;
        }
        if (in_array('CTA "L"', $transportation)) {
            $cta_l = true;
        }
        if (in_array("CTA Bus", $transportation)) {
            $cta_bus = true;
        }
        if (in_array("Bike/Scooter", $transportation)) {
            $bike_scooter = true;
        }
        if (in_array("Water Taxi", $transportation)) {
            $water_taxi = true;
        }
        if (in_array("Carriage", $transportation)) {
            $carriage = true;
        }
    }
    else {
        $transportation = null;
    }
    $car_string = convert_bool_to_string($car);
    $cta_l_string = convert_bool_to_string($cta_l);
    $cta_bus_string = convert_bool_to_string($cta_bus);
    $bike_scooter_string = convert_bool_to_string($bike_scooter);
    $water_taxi_string = convert_bool_to_string($water_taxi);
    $carriage_string = convert_bool_to_string($carriage);

    // Insert user input into the database
    if ($conn) {
        $stmt=$conn->prepare("INSERT INTO chicagoSurvey (name, num_people, visit_date, rating, favorite_place, car, cta_l, cta_bus, bike_scooter, water_taxi, carriage) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sisisssssss", $name, $num_people, $visit_date, $rating, $favorite_place, $car, $cta_l, $cta_bus, $bike_scooter, $water_taxi, $carriage);
        $stmt->execute();
        $stmt->close();
	}

    $from_email = "exw4141@yahoo.com";
    $subject = "Chicago Survey";
    $body = "Name: $name\n";
    $body .= "Number of people in $name's group: $num_people\n";
    $body .= "Date of visit: $visit_date\n";
    $body .= "Rating: $rating\n";
    $body .= "Favorite place: $favorite_place\n";
    $body .= "Car used: $car_string\n";
    $body .= 'CTA "L" used: '."$cta_l_string\n";
    $body .= "CTA Bus used: $cta_bus_string\n";
    $body .= "Bike or scooter used: $bike_scooter_string\n";
    $body .= "Water taxi used: $water_taxi_string\n";
    $body .= "Carriage used: $carriage_string";

    $to = "exw4141@yahoo.com";
    mail($to, $subject, $body);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Confirmation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/email.css" />
    </head>

    <body>
        <figure>
            <img src="assets/images/thank-you.jpg" alt="Thank you!" title="Thank you!" />
            <figcaption>We appreciate you taking your time to fill out this survey!</figcaption>
        </figure>
        <p>
            Your invaluable feedback has been submitted. It will be used to help us make major improvements 
            to our site as we add new content. We hope you enjoyed your stay!
        </p>
        <button type="button" onclick="window.location.href='https://iste240-project.herokuapp.com/'">Return Home</button>
    
        <footer>
            <br />
            <p class="img-citation">Logo URL: <a href="https://bluemoongiftshops.com/thank-you-wilmington/" target="_blank">https://bluemoongiftshops.com/thank-you-wilmington/</a></p>
            <?php
                echo "<span id='update-time'>Last updated: ".date("F d Y H:i:s", filemtime("process.php")).'</span>';
            ?>
        </footer>
    </body>
</html>
