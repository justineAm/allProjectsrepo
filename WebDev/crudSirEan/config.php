<?php

define("DB_SERVER", "remotemysql.com");
define("DB_USERNAME", "aRDZcUfuOm");
define("DB_PASSWORD", "LliVkBP8Ji");
define("DB_NAME", "aRDZcUfuOm");

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli === false){
    die("Error: Connection failed. " . $mysqli->connect_error);
}
?>