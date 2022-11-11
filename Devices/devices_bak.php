<!doctype html>

<?php /*?>
Created  Date: 09/01/2019 
Modified Date: 10/21/2019
Author: William Fox
Description: Main Page for FoxBase Intranet 
FileName: Devices.php
Code Name: Titan
Style Sheets: FBmain.css - 
<?php *
 * 
 */
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$conn = mysqli_connect("localhost", "root","B00l3an88#", "FoxBase");
if ($conn-> connect_error) {
    die("Connection failed: ". $conn -> connect_error);
    
}


echo "<table>";
$sql = "SELECT NetDeviceID, DeviceName, Hostname, IPaddress, DeviceType, Notes from NetDevice";

$result = $conn-> query($sql);
        
        
        
        if ($result-> num_rows > 0) {
             while($row= $result-> fetch_assoc()) {
                 echo "<tr><td>". $row["NetDeviceID"] ."</td><td>". $row["DeviceName"] ."</td><td>". $row["Hostname"] ."</td><td>". $row["IPaddress"] ."</td><td>". $row["DeviceType"] ."</td><td>". $row["Notes"] ."</td></tr>";
             }
                     
               echo "</table>";  
                 
   //         echo $row[1]. " ".$row[2]." ".$row[3]." " .$row[4]." ".$row[5]." ".$row[6];
   //         echo "<br>";
            
            
         }

            
        
            else {
                echo "0  result";
            }
        
      $conn-> close();  
        
?>


<html>
    <head>
        <title>
            <link rel="stylesheet" href="CSS/fBmain.css">
        </title>
        
    </head>
    
    <body>
        <?php
       
        
        
        ?>
        
    </body>
    
    
</html>






	
	
