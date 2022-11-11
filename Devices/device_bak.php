
<?php/* 
Created  Date: 08/19/2019 
Modified Date: 10/28/2019
Author: William Fox
Description: Main Page for FoxBase Intranet 
FileName: foxBASE.php
Code Name: Titan
Style Sheets: FBmain.css - 
 **/
<html>
<head>


<title>FoxMain</title>

<style type="text/css">





.Arial {
         
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	text-decoration:none;
	color: #FFFFFF;
       
}
.FoxBase {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-style: italic;
	color: #9C0;
	text-decoration: none;
	font-weight: bold;
	letter-spacing: 2em;
}
-->
</style>

<link rel="stylesheet" href="../CSS/fBmain.css">


</head>

<body class="body">

<p>
    <a href="http://10.1.1.59/Titan/FoxBase.php">
                    <img src="../Images/foxbase.png" width="137" height="93" class="" alt=""/>
		</a>
   	</p>
     <p>
    <a href="">
    	<img src="../Images/applications.gif" alt="" width="105" height="30" class="applications"/>
    </a>
    </p>
	<p>
	<a href="devices.php">
		<img class="device" src="../Images/Devices.gif" width="105" height="30" alt=""/>
	</a>
	</p>

<!-- InstanceBeginEditable name="Main_Region" -->
<?php





/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 require "Device_Connection.php";





 $connect = mysqli_connect($host, $username, $password, $db_name) or die("cannot connect");
 


// Begin PHP Script for displaying data on php page


//query the database - Query specific table in the Database - (KB)
$query = mysql_query("SELECT * FROM NetDevice");

// Setup the table structure for output - Table border and table headers
echo "<table class=Arial>
<tr border=1>
	
	
	
	
		
</tr>";
echo "</table>";
// fetch the results and convert them into an array
// the MySQL Fetch Array - to get the data out of the database and display it on the page
// MySQL Columns 
// In the PHP is also html code to help format the data  into table <td> and </tr> to close 
echo "<table border=0 >";
echo "<tr>";
echo "<th width=4%>ID</th>";
echo "<th width='8%'>Device Name</th>";
echo "<th width='13%'>Host Name</th>";
echo "<th width='11%'>IP Address</th>";
echo "<th width='13%'>Device</th>";
echo "<th width='12%'>Applications</th>";
echo "</tr>";
echo "</table>";

echo "<table border=1 class=Arial> ";
 
	while($rows = mysql_fetch_array($query)){
            echo '<tr border=1 >';	
                
		echo "<td width=5%>".$rows['NetDeviceID']."</td>";
		echo "<td width=20%>".$rows['DeviceName']."</td>";
		echo "<td width=15%>".$rows['Hostname']."</td>";
		echo "<td width=24%>".$rows['IPaddress']."</td>";
		echo "<td width=17%>".$rows['DeviceType']."</td>";
		echo "<td>".$rows['Notes']."</td>";
	echo "</tr>";
		
	
	}
echo "</table>";



// end of PHP Statement 

?>	

<!-- InstanceEndEditable -->

<!-- InstanceEnd -->
