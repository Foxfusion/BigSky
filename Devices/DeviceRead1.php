<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 require "Device_Connection.php";
//$host="localhost"; // Hostname
//$username="root"; //Mysql username
//$password="B00l3an88#"; //Mysql password
//$db_name="FoxBase"; //Database name
#$tbl_name="NetDevice"; // Table 




 $link = mysqli_connect($host, $username, $password, $db_name) or die("cannot connect");
 
 ?>

<?php

$sql_stmt = "SELECT * FROM NetDevice "; 
    //SQL select query 
    
     $result = mysqli_query($link,$sql_stmt);
     //execute SQL statement 
     
	if (!$result)     
		die("Database access failed: " . mysqli_error()); 
    	//output error message if query execution failed 
        
		$rows = mysqli_num_rows($result); 
   		// get number of rows returned 
    
	if ($rows) {     
    
	while ($row = mysqli_fetch_array($result)) {       
            echo '<table>';
            echo '<tr';
            
	 	echo '<td>' . 'NetDeviceID: ' . $row['NetDeviceID'] . '<br>' .'</td>';         
		echo '<td>' .'DeviceName: ' . $row['DeviceName'] . '<br>' .'</td>'; 
		echo '<td>' .'Hostname: ' . $row['Hostname'] . '<br>'.'</td>'; 
		echo '<td>' .'IP Address: ' . $row['IPaddress'] . '<br>'.'</td>';   
		echo '<td>' .'Device Type: ' . $row['DeviceType'] . '<br>'.'</td>';     
		echo '<td>' .'Notes:' . $row['Notes'].'</td>' ;         
            
           echo '</tr>';
          echo'</table>';	     
	} 


 }
 mysqli_close($link); //close the database connection 
?>
