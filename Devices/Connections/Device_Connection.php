<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$host="localhost"; // Hostname
$username="wgfox"; //Mysql username
$password="B00l3an88#"; //Mysql password
$db_name="FoxBase"; //Database name
$tbl_name="NetDevice"; // Table 

//Connect to server and select database

mysql_connect($host, $username, $password) or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");
?>