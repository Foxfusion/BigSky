
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include'Device_Connection.php'; 
$sql="SELECT * FROM NetDevice";
if ($res =mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0){
        echo "<table border=1>";
        echo "<tr>";
        echo "<td>ID:</td>";
        echo "<td>DeviceName:</td>";
        echo "<td> Hostname:</td>";
        echo "<td> IP Address: </td>";
        echo "<td> Device Type: </td>";
        echo "<td> Application: </td>";
        echo "<td> Notes: </td>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>".$row['NetDeviceID']."</td>";
        echo "<td>".$row['DeviceName']."</td>";
        echo "<td>".$row['Hostname']."</td>";
        echo "<td>".$row['IP_Address']."</td>";
        echo "<td>".$row['DeviceType']."</td>";
        echo "<td>".$row['App_Assigned']."</td>";
        echo "<td>".$row['Notes']."</td>";
        echo "</tr>";
        
        }
        echo "</table>";
       
}
else {
    echo "No matching records are found";
}

}
else {
    echo "ERROR Could not able to execute sql"
                                    .mysqli_error($link);
    
}
mysqli_close($link);

?>


        
            
                
                
                
                
               
                
               
                