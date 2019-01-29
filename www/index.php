<?php

#Define App Path
define("APP_PATH", dirname(dirname(__FILE__)));
#load database
include APP_PATH."/demo_models/model.php";
#load Controllers(functions)
require APP_PATH."/demo_controllers/controller.php";

#load routes
require APP_PATH."/demo_routes/router.php";
 ?>
