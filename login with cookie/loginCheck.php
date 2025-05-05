<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if($username == "" || $password == ""){
            echo "null username/password!";
        }else if($username == $password){
            //echo "valid user!";
            //$_SESSION['status'] = true;
            setcookie('status', 'true', time()+3000, '/');
            header('location: home.php');
        }else{
            echo "invalid user!";
        }
    }else{
        //echo "Invalid request! Please submit form!";
        header('location: login.html');
    }
?>