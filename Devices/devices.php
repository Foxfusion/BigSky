<?php
/* 
Created  Date: 08/19/2019 
Modified Date: 08/17/2021
Author: William Fox
Description: List devices on the network
FileName: devices.php
Code Name: Titan
Style Sheets:  
 **/


 include_once '../Menu/menu.php';
 
?>



<html>
<head>
    <link href="../CSS/boxcss.css" media="all" rel="stylesheet">
    <link href="../CSS/DeviceCSS.css" rel="stylesheet" type="text/css"/>
    <link href="../CSS/DeviceOne.css" rel="stylesheet" type="text/css"/>
    <style>
    .t_rowh {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        text-align: center;
        color: white;
        column-width: 125px;
        top: 100px;
    }
    .t_row { 
        background: #000; 
        font-family: Arial, Helvetica, sans-serif;
        color: white;
        border: 1px solid white;
        top: 105px;
    }
    </style>
    
    
    
    
    
</head>

<body >
	<p>
		<a href="../BigSky/FoxBase.php">
 		<img src="../Images/foxbase.png" width="137" height="93" class="" alt=""/></a>
                <img class="greenbox">
                <img class="greenbox" src="../Images/Green_Block_Image.png" alt=""/>
   	
                </p>
        <table>
            <tr>
                 <hr >
                <td>  
                </td>
            </tr>            
        </table>           
       <div>
           
        </div>
             
                    
              
 <a href="DeviceForm.php" class=t_rowh >Insert Device   </a>
 
     <br />
                <br />
 
<?php

           

require "Device_Connection.php";
$sql="SELECT * FROM NetDevice";
if ($res =mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0){
        
        echo "<table>";
        echo "<tr>";
        echo "<td class=t_rowh>ID</td>";
        echo "<td class=t_rowh> Device Name</td>";
        echo "<td class=t_rowh> Device Type</td>";
        echo "<td class=t_rowh> IP Address  </td>";
        echo "<td class=t_rowh> Notes </td>";
        echo "<td class=t_rowh> Application </td>";
        echo "<td class=t_rowh> Hostname </td>";
        echo "<td class=t_rowh> Webmin Link </td>";
        echo "<td class=t_rowh> CentOS Admin</td>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td class=t_row>".$row['NetDeviceID']."</td>";
        echo "<td class=t_row>".$row['DeviceName']."</td>";
        echo "<td class=t_row>".$row['DeviceType']."</td>";
        echo "<td class=t_row>".$row['IP_Address']."</td>";
        echo "<td class=t_row>".$row['Notes']."</td>";
        echo "<td class=t_row>".$row['App_Assigned']."</td>";
        echo "<td class=t_row>".$row['Hostname']."</td>";
        echo '<td class=t_row><a href="'.$row['Webmin_Link'].'">'.$row['Webmin_Link'].'</a></td>';
        echo '<td class=t_row><a href="'.$row['CentOS_Admin_Link'].'">'.$row['CentOS_Admin_Link'].'</a></td>';
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

                <br />
                <br />

            

 


 
  </span>