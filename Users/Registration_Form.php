<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


/* 
Created  Date: 08/04/2022 
Modified Date: 09/09/2022
Author: William Fox
Description: Registration Page
FileName: Registration_Form.php
Code Name: BigSky
Style Sheets: Registration.css
 */


?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Register User</title>
        <link  href="../CSS/Registration.css" media="all" rel="stylesheet">
    </head>
    
    
    <body>
        
        <form action="insertUser.php" method="post">
            <h2> Create User </h2>
            <table>
                <tr>
                    <td>
                    First Name: 
                    </td>
                    <td>
                    <input type="text" name="First_Name" id="First_Name">  
                    </td>
                </tr>
                <tr>
                    <td>
                    Last Name: 
                    </td>
                    <td>
                    <input type="text" name="Last_Name" id="Last_Name">  
                    </td>
                </tr>
                <tr>
                    <td>
                    E-Mail Address: 
                    </td>
                    <td>
                    <input type="email" name="Email_Address" id="Email_Address">  
                    </td>
                </tr>
                <tr>
                    <td>
                    Mobile Number: 
                    </td>
                    <td>
                    <input type="text" name="Mobile_Number" id="Mobile_Number">  
                    </td>
                </tr>    
                <tr>
                    <td>
                    Username: 
                    </td>
                    <td>
                    <input type="text" name="Username" id="Username">  
                    </td>
                </tr>
                <tr>
                    <td>
                    Password: 
                    </td>
                    <td>
                    <input type="password" name="Password" id="Password">  
                    </td>
                </tr>
                <tr>
                    <td>
                    Password Hint: 
                    </td>
                    <td>
                    <input type="text" name="Password_Hint" id="Password_Hint">  
                    </td>
                </tr>
                <tr>
                    <td>
            <button type="submit" value="Submit">Create</button>
                    </td>
                </tr>
                
        </form>
        </<table>
           
    </body>
    
</html>