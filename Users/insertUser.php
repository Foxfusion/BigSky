<?php

/*if (isset($_POST["submit"])) */
    //Taking Values from the form data input
    $First_Name = $_REQUEST['First_Name'];
    $Last_Name =  $_REQUEST['Last_Name'];
    $Email_Address = $_REQUEST['Email_Address'];
    $Mobile_Number = $_REQUEST['Mobile_Number'];
    $Username = $_REQUEST['Username'];
    $Password = $_REQUEST['Password'];
    $Password_Hint = $_REQUEST['Password_Hint'];



$servername = "localhost"; /* Host namev */
$user = "root"; /* User */
$password = "B00l3an88#"; /* Password */
$dbname = "FoxBase_One"; /* Database name */
$conn = mysqli_connect($servername, $user, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}


$hashed = hash ('sha512', $Password);



$sql = "INSERT INTO Users(First_Name, Last_Name, Username, Password, Password_Hint, Email_Address, Mobile_Number )VALUES ('$First_Name', '$Last_Name','$Username', '$hashed', '$Password_Hint', '$Email_Address', '$Mobile_Number')";


if(mysqli_query($conn, $sql)){
 echo "Record Added Sucessfully";
} else {
    echo "ERROR: Hush! Sorry $sql." . mysqli_error($conn);

}

//Close Connection
mysqli_close($conn);
?>

    /* require_once 'functions.php';
    
    
    if (emptyInputSignup($First_Name, $Last_Name, $Email_Address, $Mobile_Number, $Username, $Password, $Password_Hint) !== false) {
         header("location: Registration_Form.php?error=emptyinput");
         exit();
    }
    if (invalidUserID($Username) !== false) {
         header("location: Registration_Form.php?error=invalidUserID");
         exit();
    }
    if (invalidEmail_Address($Email_Address) !== false) {
         header("location: Registration_Form.php?error=invalidEmail_Address");
         exit();
    }
    /*
    if (pwdMatch($Password, Password_Repeat) !== false) {
         header("location: Registration_Form.php?error=passwordsdontmatch");
         exit();
    }

    if (UserID($Conn, $Username) !== false) {
         header("location: Registration_Form.php?error=iusernametaken");
         exit();
    }
    */
/* createUser($con,$First_Name,$Last_Name,$Email_Address,$Mobile_Number,$Username,$Password,$Password_Hint );
    
   }
/*else {
    header("location: Registration_Form.php");
    exit();
}



/*

ini_set('display_errors', 1); 
error_reporting(E_ALL);
ini_set("display_errors", 1);


require_once 'config.php';


/*
File Name: insertUser.php
Date Created: 08/04/2022
Date Modifies: 08/05/2022
Purpose: Insert data into FoxBase_One
Author: William Fox
-->



<!-- PHP Connection to MySQL Database  - Connection to FoxBase-->
*/

/*
$host="localhost"; //Host name
$username="root"; //MySQL username
$password="B00l3an88#"; //MySQL Password
$db_name="FoxBase_One"; //Database Name



//Conect to the server and slect datbase
$conn = mysqli_connect("$host", "$username", "$password", "$db_name");

//mysql_connect("$host","$username","$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");


if($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



//Taking Values from the form data input
$First_Name = $_REQUEST['First_Name'];
$Last_Name =  $_REQUEST['Last_Name'];
$Email_Address = $_REQUEST['Email_Address'];
$Mobile_Number = $_REQUEST['Mobile_Number'];
$Username = $_REQUEST['Username'];
$Password = $_REQUEST['Password'];
$Password_Hint = $_REQUEST['Password_Hint'];

*/
//Insert data into mysql



/*
if(mysqli_query($conn, $sql)) {
    
echo "Records added successfully.";

}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

 * 
 }
 */







