<?php
// import Mixpanel
require 'mixpanel-php/lib/Mixpanel.php';

// get the Mixpanel class instance, replace with your project token
$mp = Mixpanel::getInstance("cefb5214f48a583fbbad4b86dbdfd2f1");

// track an event
$mp->track("button cobba", array("label" => "sign-up"));

// create/update a profile for user id 12345
$mp->people->set(12345, array(
    '$first_name'       => "John",
    '$last_name'        => "Doe",
    '$email'            => "john.doe@example.com",
    '$phone'            => "5555555555",
    "Favorite Color"    => "red"
));

echo "percobaan";