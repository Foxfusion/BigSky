<?php
session_start();
$host = "localhost"; /* Host name */$user = "root"; /* User */$password = "B00l3an88#"; /* Password */$dbname = "FoxBase_One"; /* Database name */
$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}