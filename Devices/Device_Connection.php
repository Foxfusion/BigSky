<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$host="localhost"; // Hostname
$username="root"; //Mysql username
$password="B00l3an88#"; //Mysql password
$db_name="FoxBase_One"; //Database name
#$tbl_name="NetDevice"; // Table 

//Connect to server and select database

$link = mysqli_connect($host, $username, $password, $db_name) or die("cannot connect");

if(! $link ) {
    die('Could not connect: ' .mysqli_error());
}

?>