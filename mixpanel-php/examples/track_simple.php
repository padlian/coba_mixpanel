<?php
require_once("../lib/Mixpanel.php"); // import the Mixpanel class
$mp = Mixpanel::getInstance("cefb5214f48a583fbbad4b86dbdfd2f1"); // instantiate the Mixpanel class
$mp->track("login_clicked"); // track an event
