<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT .'/views');
define('BASE_URL', 'http://cms');

$db = new PDO('mysql:host=127.0.0.1;dbname=cms','root','jose');

require 'functions.php';
?>