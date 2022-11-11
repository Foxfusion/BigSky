<?php 

session_start(); 

include "DBConnection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($username)) {

        header("Location: foxbase.php?error=User Name is required");

        exit();

    }else if(empty($password)){

        header("Location: foxbase.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM Users WHERE Username='$username' AND password='$passwords'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['First_Name'] = $row['First_Name'];

                $_SESSION['UserID'] = $row['UserID'];

                header("Location: ../FoxBase.php");

                exit();

            }else{

                header("Location: ../FoxBase.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: ../FoxBase.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: ../FoxBase.php");

    exit();

}