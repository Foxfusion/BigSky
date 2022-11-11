<?php
/* 
Created  Date: 08/19/2019 
Modified Date: 07/31/2022
Author: William Fox
Description: List devices on the network
FileName: KB_View.php
Code Name: BigSky
Style Sheets:  
 **/
?>



<html>
<head>
    <link href="../CSS/boxcss.css" media="all" rel="stylesheet">
    <link href="../CSS/KB.css" rel="stylesheet" type="text/css"/>
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
            <?php include '../Menu/menu.php' ?> 
        </div>
             
                    
              
                
<?php

require "Knowledge_Connection.php";
$sql="SELECT * FROM KnowledgeBase";
if ($res =mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0){
        
        echo "<table>";
        echo "<tr>";
        echo "<td class=t_rowh>ID</td>";
        echo "<td class=t_rowh> Product Name</td>";
        echo "<td class=t_rowh> Company</td>";
        echo "<td class=t_rowh> Error Received  </td>";
        echo "<td class=t_rowh> Notes </td>";
        echo "<td class=t_rowh> ScreenShot </td>";
        echo "<td class=t_rowh> Version </td>";
        echo "<td class=t_rowh> Date </td>";
        echo "<td class=t_rowh> WebSite </td>";
        echo "<td class=t_rowh> Reference </td>";
        echo "<td class=t_rowh> Hardware </td>";
        echo "<td class=t_rowh> Software </td>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td class=t_row>".$row['ID']."</td>";
        echo "<td class=t_row>".$row['ProductName']."</td>";
        echo "<td class=t_row>".$row['Company']."</td>";
        echo "<td class=t_row>".$row['ErrorReceived']."</td>";
        echo "<td class=t_row>".$row['Notes']."</td>";
        echo "<td class=t_row>".$row['Resolution']."</td>";
        echo "<td class=t_row>".$row['ScreenShot']."</td>";
        echo "<td class=t_row>".$row['Version']."</td>";
        echo "<td class=t_row>".$row['Date']."</td>";
        echo "<td class=t_row>".$row['WebSite']."</td>";
        echo "<td class=t_row>".$row['Reference']."</td>";
        echo "<td class=t_row>".$row['Hardware']."</td>";
        echo "<td class=t_row>".$row['Software']."</td>";
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



             

 


 
  </span>