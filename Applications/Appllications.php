
<?php
/* 
Created  Date: 08/19/2019 
Modified Date: 10/21/2022
Author: William Fox
Description: Application Page
FileName: Application.php
Code Name: BigSky
Style Sheets: FBmain.css - - logo.css - menu.css - app.css
 */


include_once '../Menu/menu.php';

  ?>


<html>



<head>
    
       <link href="../CSS/apps.css" media="all" rel="stylesheet"/>

    
    

</head>

<body>
    
    <br /><!-- comment -->
    <br />
    <br />
    <br />
    <br />
    <br />
    <h1>Applications</h1>
    
    <table>
                    <tr> 
                        <td>
                    <li class="grafana_text" ><a href="http://grafana.foxfusion.net:3000/login">Grafana</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                    <li class="spark_master_text"><a href="http://Superman:8080">Spark Master</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                    <li class="spark_history_text"><a href="http://Superman:18080">Spark History</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                    <li class="phpmyadmin"><a href="http://question/phpmyadmin/">PHP MyAdmin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                    <li class="azure"><a href="https://azure.microsoft.com/en-us/">Microsoft Azure</a>
                        </td>
                    </tr>
    </table>
</html>
