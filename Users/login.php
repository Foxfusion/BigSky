<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

/* 
Created  Date: 08/01/2022 
Modified Date: 08/10/2022
Author: William Fox
Description: Main Login Window
FileName: Login.php
Code Name: BigSky

 **/

//Include Login_Config
require_once 'config.php';

/*
//Define Variables
$Username = $Password = "";
$Username_err = $Password_err = $login_err = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["Username"]))){
        $Username_err = "Please enter Username.";
    } else{
        $Username = trim($_POST["Username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["Password"]))){
        $Password_err = "Please enter your Password.";
    } else{
        $Password = trim($_POST["Password"]);
    }
    
    // Validate credentials
  /*  if(empty($Username_err) && empty($Password_err)){
        // Prepare a select statement
        $sql = "SELECT UserID, Username, Password FROM Users WHERE Username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $Username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $UserID, $Username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($Password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["UserID"] = $UserID;
                            $_SESSION["Username"] = $Username;                            
                            
                            // Redirect user to welcome page
                            header("location: Welcome.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid Username or Password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid Username or Password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        } 
    }
    
    // Close connection
    mysqli_close($link);
 * 
 * <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
}
 * 
 * 
 <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?> 

            
            <p class=""error"><?php echo $_GERT['error']; ?> </p>
            
            <?php} ?>
           

*/



?>

<!DOCTYPE html>

<html>
    <head>
        <title>foxBASE LOGIN</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/login.css">

        
    </head>
    
    <body>
         <form action="" method="post">
            <h3>foxBase Login</h3>
          
         
            <label>User Name</label>
            
            <input type=""text" name="Username" placeholder="Username"> <br>
            
            <label>Password</label>
            
            <input type="Password" name="Password" placeholder="Password"><br>
           
            
            <button type="submit">Login</button>
            
            
        </form>
        
        
        
    </body>
    
    
</html><?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>