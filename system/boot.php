<?php

// System
require __DIR__."/settings.php";
require __DIR__."/security.php";
require __DIR__."/route.php";
require __DIR__."/log.php";

$settings = new settings;
$security = new security;
$route = new route;
$log = new log;

// Database
require __DIR__."/database/driver.php";
require __DIR__."/database/model.php";

// Framework
require __DIR__."/rpg.php";
