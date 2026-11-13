<?php
include "db.php";

session_start();

if(isset($_POST['login'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    if(empty($name) || empty($password)){
        $error = "PLEASE FILL ALL THE FIELDS!!!!!";
    }else{
        $sql = $conn->prepare("SELECT * FROM users WHERE name = '$name'");
    
        $sql->execute();

        $user = $sql->get_result()->fetch_assoc();

        if($user && password_verify($password, $user['password'])){
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            header("Location: index.php");
            exit;
        } else {
            $error = "INVALID USERNAME OR PASSWORD.";
        }

    }



}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

    <?php
    if(!empty($error)){
        echo "<h1 style='color: red;'>$error</h1>";
    }


    ?>

    <h1>Student Grading System - Login</h1>

    <h2>Login</h2>

    <form method="POST">

        <label>Username : </label>
        <input type="text" name="name">
        <br><br>

        <label>Password : </label>
        <input type="text" name="password">
        <br><br>

        <button type="submit" name="login">Login</button>

    </form>
    
</body>
</html>