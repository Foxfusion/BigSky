<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */





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

    }
    
    </style>
     <title>Insert Device Information</title>
        
    </head>

<body >
	<p>
		<a href="../Titan/FoxBase.php">
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

    ?>
  
   
    
    <body>
        <form action="insertDevice.php">
            <table>
            <p>
            <tr>
                <td>
            <label class="t_row" for="DeviceName"> Device Name: </label>
                </td>
                <td>
                <input width="50" type="text" name="DeviceName" id="DeviceName">
             </tr>
                </td> 
             <tr>
                 <td>
                <label class="t_row" for="Hostname"> Hostname: </label>
                 </td>
                 <td>
                <input type="text" name="Hostname" id="Hostname">
                </td>
             <tr>
                 <td>
                <label class="t_row" for="IP_Address"> IP Address: </label>
                 </td>
                 <td>
                <input type="text" name="IP_Address" id="IP_Address">
                </td>
             </tr>
            <tr>
                <td>
                <label class="t_row" for="DeviceType"> Device Type: </label>
                </td>
                <td>
                <input type="text" name="DeviceType" id="DeviceType">
                </td>
            </tr>
            <tr>
                <td>
                <label class="t_row" for="App_Assigned"> Application Assigned: </label>
                </td>
                <td>
                <input type="text" name="App_Assigned" id="App_Assigned">
                </td>
            </tr>
            <tr>
                <td>
                <label class="t_row" for="Notes"> Notes: </label>
                </td>
                <td>
                <input type="text" name="Notes" id="Notes">
                </td>
            </tr>  
            </p>
            <tr>
               
                <td>
                 <hr /> <input type="submit" value="Submit">
                 </td>
            </tr>
            </table>
            
         </form>
        
    </body>
    
    
</html>