
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$host="localhost"; // Hostname
$username="root"; //Mysql username
$password="B00l3an88#"; //Mysql password
$db_name="FoxBase"; //Database name


//Connect to server and select database

mysql_connect($host, $username, $password) or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");
?>
