<?php 

require_once __DIR__."/vendor/autoload.php";
use NoEngine\Api;
Api::respond(["error" => "You have no permission to access this page, please contact your administrator."]);