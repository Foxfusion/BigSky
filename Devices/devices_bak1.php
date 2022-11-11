<html>
    <head>
        
        
    </head>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 require "Device_Connection.php";





 $link = mysqli_connect($host, $username, $password, $db_name) or die("cannot connect");
 
 ?>

<PHP> echo '<link rel="stylesheet" type="text/css" href="../CSS/fBmain.css""></head>'; </PHP>


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
            
            
            
            echo '<html>';
            echo '<head>';
            
            echo '</head>';
            
            echo '<body class="body">';
            echo '<table class="font">';
            echo '<tr style="color:white">';
            
            while ($col = $result->fetch_field()) {
            echo "<th>" . $col->name . "</th>";
            }
            echo '</tr>';
            echo '<tr border=1 class="font">';
            
                echo '<td>' .'NetDeviceID: ' . $row['NetDeviceID'] . '<br>' .'</td>';         
		echo '<td>' .'DeviceName: ' . $row['DeviceName'] . '<br>' .'</td>'; 
		echo '<td>' .'Hostname: ' . $row['Hostname'] . '<br>'.'</td>'; 
		echo '<td>' .'IP Address: ' . $row['IPaddress'] . '<br>'.'</td>';   
		echo '<td>' .'Device Type: ' . $row['DeviceType'] . '<br>'.'</td>';     
		echo '<td>' .'Notes:' . $row['Notes'].'</td>' ;         
            
           echo '</tr>';
          echo'</table>';
          
         
          echo '</body>';
	} 


 }
 mysqli_close($link); //close the database connection 
?>

        <body>
        
        
        </body>
    


	
	
</html>