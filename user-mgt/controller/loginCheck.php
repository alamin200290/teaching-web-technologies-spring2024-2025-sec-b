<?php
    error_reporting(E_ALL);
    require_once('../model/userModel.php');
    session_start();
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if($username == "" || $password == ""){
            echo "null username/password!";
        }else{ 
            $user = ['username'=> $username, 'password'=>$password];
            $status = login($user);
            if($status){
                setcookie('status', 'true', time()+3000, '/');
                header('location: ../view/home.php');
            }else{
                header('location: ../view/login.html');
            }
        }
    }else{
        //echo "Invalid request! Please submit form!";
        header('location: ../view/login.html');
    }
?>