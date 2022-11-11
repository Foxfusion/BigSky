<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$sname="localhost";

$uname="root";

$password="B00l3an88#";

$db_name="FoxBase_One";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn) {
    
    echo "Connection failed";
}
?>

