<?php

// print_r($_REQUEST);
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){
    //if there is :Access
    include_once('config.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    // print_r('Email:' . $email);

    // print_r('Password: ' . $password);


    // $sql = "SELECT = FROM users WHERE email = '$email' and password = '$password' ";

    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";

     $result = $conexao->query($sql);
    // print_r($result);

    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: Loguinpage.php');
    }
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: System.php');
    }

}else{
    header('Location: Loguinpage.php');
    //if not :do not acess the System
}

?>