<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function emptyInputSignup($First_Name, $Last_Name, $Email_Address, $Mobile_Number, $Username, $Password, $Password_Hint) {
    $result;
    if (empty($First_Name) || empty($Last_Name) || empty($Email_Address) || empty($Mobile_Number) || empty($Username) || empty($Password) || empty($Password_Hint)) {
        $result = true;
        
    }
    else {
        $result = false;
    }
    return $result;
    
}

    function invalidUserID($Username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/"), $Username) {
        $result = true;
        
    }
    else {
        $result = false;
    }
    return $result;
    function invalidEmail_Address($Email_Address) {
    $result;
    if (filter_var($Email_Address, FILTER_VALIDATE_EMAIL)) {
        $result = true;
        
    }
    else {
        $result = false;
    }
    return $result;
}