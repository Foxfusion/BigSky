<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


echo "<span link href='../CSS/boxcss.css' media='all' rel='stylesheet' > </span>";
echo  "<link href='../CSS/DeviceOne.css' rel='stylesheet' type='text/css'>";

include '../Menu/menu.php' ;
require "Device_Connection.php";
$query = mysql_query("SELECT * FROM NetDevice");
$connect = mysqli_connect($host, $username, $password, $db_name) or die("cannot connect");

echo "<table border='1'>";
echo "<tr>"
. "<td class=font1>ID</td><td class=font2>Device Name</td><td class=font3>Host Name</td><td class=font4>IP Address</td><td >Device Type</td><td >App Assigned</td><td class=font>Notes</td>"
        . "</tr>";

while($rows = mysql_fetch_array($query)){
                echo '<tr> ';	
		echo "<td class=font>".$rows['NetDeviceID']."</td>";
		echo "<td class=font>".$rows['DeviceName']."</td>";
		echo "<td class=font>".$rows['Hostname']."</td>";
		echo "<td class=font>".$rows['IP_Address']."</td>";
		echo "<td class=font>".$rows['DeviceType']."</td>";
		echo "<td class=font>".$rows['Notes']."</td> </tr>";
}       
           echo"</table>";
?>
