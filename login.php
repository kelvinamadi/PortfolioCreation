<?php

//logs a user in by checking if they are an existing user and their credentials are right before starting a session.

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ecs417";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $pword = $_POST['password'];
    $sql= "SELECT * FROM USERS WHERE email = '$email' AND password = '$pword' ";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_fetch_array($result);
    if(isset($check)){
        session_start();
        $_SESSION['userlogged'] = $email;
        header('Location: addPost.html');

    }
    else{
        header('Location: login.html');
    }
}




?>