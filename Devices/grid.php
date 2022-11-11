<?php

require "Device_Connection.php";

$connect = mysqli_connect($host, $username, $password, $db_name) or die("cannot connect");

$query = mysql_query("SELECT * FROM NetDevice");

$dyn_table='<table border="1" cellpadding="10">';
while($rows = mysql_fetch_array($query)){
                	
		$NetDeviceID=$rows['NetDeviceID'];
		$DeviceName=$rows['DeviceName'];
		$Hostname=$rows['Hostname'];
		$IP_Address=$rows['IP_Address'];
		$DeviceType=$rows['DeviceType'];
		$Notes=$rows['Notes'];

                
                 $dyn_table .='<tr><td>'.$DeviceName .'</td>';
}
$dyn_table .='</tr></table>';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>


<body>
    <h3>  Dynamic Grid Layout from MySQL</h3>
    
    <?php echo $dyn_table; ?>
    
</body>



</html>