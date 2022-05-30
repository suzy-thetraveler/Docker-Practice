<?php 
    $conn = mysqli_connect(
    '3.35.164.104',
    'test',
    'password',
    'TEST',
    '9876'
    );
    
    if(mysqli_connect_errno(){
        echo "Failed to connect to MYSQL: ".mysqli_connect_error();
    }

    $sql = "SELECT VERSION()";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    print_r($row["VERSION()"]);
?>

