<?php # contact.inc.php

if (!defined('BASE_URL'))
{
    require('../includes/config.inc.php');
    $url = BASE_URL . 'index.php?p=contact';
    header("Location: $url");
    exit;
} //End if defined() IF.

if(isset($_POST["send"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $unit = $_POST["unit"];
    $unit_color = $_POST["unit_color"];
    $message = $_POST["message"];

    $errors = array();
    $email_matcher = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*" .
        "@" .
        "[a-z0-9-]+" .
        "(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (preg_match($email_matcher, $email) == 0) {
        array_push($errors, "You did not enter a valid email address");
    }

    $body = "Name: " . $first_name . " " . $last_name . "\n";
    $body .= "Phone: " . $phone . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Unit: " . $unit . "\n";
    $body .= "Preferred Color: " . $unit_color . "\n";
    $body .= "Message\n" . $message;

    if (count($errors) == 0) {
        $to = "amiller@vogtrv.com";
        $subject = "Additional Information On Your Scooters";
        $from = $first_name . " " . $last_name . " <" . $email . ">";
        $headers = "From: " . $from;
        if (!mail($to, $subject, $body, $headers)) {
            array_push($errors, "Mail failed to send.");
        }
    }
}


?>

<div class="page-titles">
    <div class="row">
        <div class="large-12 columns">
            <h2>Get Your Scooter Now</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="large-9 columns">

        <?php if (count($errors) > 0) { ?>
        <div class="row">
            <div class="large-12 columns">
                <div data-alert class="alert-box alert">
                    <h5>There were errors that prevented the email from sending</h5>
                    <ul class="errors">
                        <?php foreach($errors as $error) : ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="#" class="close">&times;</a>
                </div>
            </div>
        </div>
        <?php } elseif (count($errors) == 0) { ?>
            <div class="row">
                <div class="large-12 columns">
                    <div data-alert class="alert-box success">
                        Thank you, someone will contact you shortly.
                        <a href="#" class="close">&times;</a>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form id="contact-form" action="index.php?p=contact" method="post">

            <div class="row">
                <div class="large-6 columns">
                    <label for="first_name">First Name
                        <input type="text" name="first_name" placeholder="Your First Name" value="<?php echo $first_name; ?>"/>
                    </label>

                </div>
                <div class="large-6 columns">
                    <label for="last_name">Last Name
                        <input type="text" name="last_name" placeholder="Your Last Name" value="<?php echo $last_name; ?>"/>
                    </label>
                </div>

            </div>
            <div class="row">
                <div class="large-6 columns">
                    <label for="phone">Phone Number
                        <input type="text" name="phone" placeholder="817-555-5555" value="<?php echo $phone; ?>"/>
                    </label>
                </div>
                <div class="large-6 columns">
                    <label for="email">Email Address
                        <input type="email" name="email" placeholder="john@example.com" value="<?php echo $email; ?>"/>
                    </label>
                </div>

            </div>
            <div class="row">
                <div class="large-6 columns">
                    <label for="unit">Which Unit Are You Interested In?
                        <select name="unit">
                            <option value="deluxe">Deluxe</option>
                            <option value="superior">Superior</option>
                        </select>
                    </label>
                </div>
                <div class="large-6 columns">
                    <label for="unit_color">Preferred Color</label>
                    <input type="radio" name="unit_color" value="Red" id="unit_red"><label for="unit_red">Red</label>
                    <input type="radio" name="unit_color" value="Blue" id="unit_blue"><label
                        for="unit_blue">Blue</label>
                    <input type="radio" name="unit_color" value="White" id="unit_white"><label
                        for="unit_white">White</label>
                    <input type="radio" name="unit_color" value="Grey" id="unit_grey"><label
                        for="unit_grey">Grey</label>
                </div>
            </div>

            <div class="row">
                <div class="large-12 columns">
                    <label for="message">Your Message...
                        <textarea name="message"><?php echo $message; ?></textarea>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <input type="submit" class="button alert round" name="send" value="Send Message"/>
                </div>
            </div>
        </form>
    </div>
    <div class="large-3 columns">
        <h3>Contact Sales</h3>

        <p>5624 Airport Freeway<br>
            Fort Worth, TX 76117
        </p>

        <p>817.831.1800</p>

        <p><a href="mailto:amiller@vogtrv.com">Email Us Directly</a></p>
    </div>
</div>

<!--<div id="google_map" onload="loadMap()">-->
<!--    <div id="map_canvas"></div>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    function loadMap() {-->
<!--        var latLong = new google.maps.LatLng(44.798609, -91.504912);-->
<!--        var mapOptions = {-->
<!--            zoom: 15,-->
<!--            mapTypeId: google.maps.MapTypeId.ROADMAP,-->
<!--            center: latLong-->
<!--        };-->
<!--        var map = new google.maps.Map(document.getElementById("map_canvas"),-->
<!--            mapOptions);-->
<!--    }-->
<!--</script>-->

</div>


