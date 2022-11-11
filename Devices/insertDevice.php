<!-- 
File Name: InsertContact.php
Date Created: 11/11/2014
Date Modifies: 08/04/2022
Purpose: Insert data into FoxBase - MySQL Database Conatcts
Author: Bill Fox
-->


<!-- PHP Connection to MySQL Database  - Connection to FoxBase_One-->

		
<?php

$host="localhost"; //Host name
$username="root"; //MySQL username
$password="B00l3an88#"; //MySQL Password
$db_name="FoxBase_One"; //Database Name
$tbl_name="Devices"; //Table Name


//Conect to the server and slect datbase
mysql_connect("$host","$username","$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

//Taking Values from the form data input
$DeviceName = $_REQUEST['DeviceName'];
$Hostname = $_REQUEST['Hostname'];
$IP_Address = $_REQUEST['IP_Address'];
$DeviceType = $_REQUEST['DeviceType'];
$App_Assigned = $_REQUEST['App_Assigned'];
$Notes = $_REQUEST['Notes'];


//Insert data into mysql



$sql="INSERT INTO NetDevice (DeviceName, Hostname, IP_Address, DeviceType, App_Assigned, Notes) VALUES('$DeviceName','$Hostname','$IP_Address','$DeviceType','$App_Assigned','$Notes')";
$result=mysql_query($sql);

//Insert data into mysql
if($result){
	echo "Successful";
	echo "<br>";
	echo "<a href='devices.php'>Back to Device page</a>";
}

else {
	echo "ERROR";
}

?>

<?php
//close connection
mysql_close();
?>
