<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    //print_r($con);
    //$sql = "select * from users";
    //$result = mysqli_query($con, $sql);
    //$row = mysqli_fetch_assoc($result);
    //$row1 = mysqli_fetch_assoc($result);

    // for ($i=0; $i < mysqli_num_rows($result); $i++) { 
    //     $row = mysqli_fetch_assoc($result);
    //     print_r($row);
    //     echo "<br>";
    // }

    // while($row = mysqli_fetch_assoc($result)){
    //     print_r($row);
    //     echo "<br>";
    // }

    //print_r($row);
    //print_r($row1);
    //mysqli_close($con);

    $sql = "insert into users VALUES(null, 'xyz', '123', 'abc@aiub.edu')";
    
    if(mysqli_query($con, $sql)){
        echo "inserted!";
    }else{
        echo "DB error!";
    }


?>