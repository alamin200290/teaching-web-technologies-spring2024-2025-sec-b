<?php
    //sleep(3);
    $data = $_POST['json'];
    //echo "Your username is:".$username;
    $user = json_decode($data);
    //$user = ['username'=> $username, 'email'=>'alamin@aiub.edu', 'password'=>'123'];
    //print_r($user);
    echo $user->username;
?>