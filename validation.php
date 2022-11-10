<?php

session_start();

//add this later
// header('location:login.php');
//the above line of code


include 'connection.php';

echo $_POST['user_name'];
if (isset($_POST['user_name'])) {
    $name = $_POST['name'];
    $email = $_POST['user_email'];
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $confirmpass = $_POST['conf_password'];

    // $insertquery = "insert into usersei(name, user_email, user_name, password) values ('$name', '$email', '$username', '$password')";
    // $result = mysqli_query($con, $insertquery);
    $query = "select * from usersei where user_name = '$username' && password = '$password'";
    $result = mysqli_query($con, $query);

    echo $_POST['user_name'];
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $_SESSION['user_name'] = $username;
        header('location:index.php');
    } else {
        header('location:login.php');
    }

}
