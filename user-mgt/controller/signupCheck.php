<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);

        if($username == "" || $password == "" || $email == ""){
            echo "null username/password/email!";
        }else{
            
            $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
            $sql = "insert into users values(null, '{$username}', '{$password}', '{$email}')";
            if($result = mysqli_query($con, $sql)){
                header('location: ../view/login.html');
            }else{
                header('location: ../view/signup.html');
            }


        }
    }else{
        //echo "Invalid request! Please submit form!";
        header('location: ../view/login.html');
    }
?>