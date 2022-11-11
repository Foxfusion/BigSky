<?php
    session_start();
    include('config.php');
    if (isset($_POST['register'])) {
        $Username = $_POST['Username'];
        $Email_Address = $_POST['Email_Address'];
        $Password = $_POST['Password'];
        $Password_hash = password_hash($Password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM Users WHERE Email_Address=:Email_Address");
        $query->bindParam("Email_Address", $Email_Address, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">The email address is already registered!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO Users(Username,Password,Email_Address) VALUES (:Username,:Password_hash,:Email_Address)");
            $query->bindParam("Username", $Username, PDO::PARAM_STR);
            $query->bindParam("Password_hash", $Password_hash, PDO::PARAM_STR);
            $query->bindParam("Email_Address", $Email_Address, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Your registration was successful!</p>';
            } else {
                echo '<p class="error">Something went wrong!</p>';
            }
        }
    }
?>