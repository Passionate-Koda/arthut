<?php

#Define App Path
define("APP_PATH", dirname(dirname(__FILE__)));
#load database
#load Controllers(functions)
require APP_PATH."/demo_controllers/controller.php";

#load routes
require APP_PATH."/demo_routes/router.php";
 ?>
