<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "time_report";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
  $mysqli = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);
  $mysqli->set_charset("utf8mb4");
} catch(Exception $e) {
  error_log($e->getMessage());
  exit('Error connecting to database'); //Should be a message a typical user could understand
}