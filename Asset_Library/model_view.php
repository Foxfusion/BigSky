
<?php


include('model_connection.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<head>
    
 <link href="../CSS/boxcss.css" media="all" rel="stylesheet"/>
 <link href="../CSS/library.css" media="all" rel="stylesheet"/>
 <link href="../CSS/model.css" media="all" rel="stylesheet" />
 
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

<body>
	<p>
		<a href="../Titan/FoxBase.php">
 		<img src="../Images/foxbase.png" width="137" height="93" class="" alt=""/>
                </a>
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

require "model_connection.php";
$sql="SELECT * FROM Models ";
if ($res =mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0){
        echo "<table>";
        echo "<tr>";
        echo "<td class=t_rowh>Model_ID</td>";
        echo "<td class=t_rowh> Model Name</td>";
        echo "<td class=t_rowh> Model Description</td>";
        echo "<td class=t_rowh> Model Example  </td>";
        echo "<td class=t_rowh> Model Image </td>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td class=t_row>".$row['Model_ID']."</td>";
        echo "<td class=t_row>".$row['Model_Name']."</td>";
        echo "<td class=t_row>".$row['Model_Description']."</td>";
        echo "<td class=t_row>".$row['Model_Example']."</td>";
        echo "<td class=t_row>".$row['Model_Image']."</td>";
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