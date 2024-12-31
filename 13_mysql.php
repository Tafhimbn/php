<?php
    echo "Welcome to the stage where we are ready to get connected to Database";
    /* 
    Way to connect a MySQL Database:
        1. MySQLi extension (the "i" stands for improved)
        2. PDO (PHP Data Objects)

    */

    // Connecting a Connection
    $server_name ="localhost";
    $username = "root";
    $password = "111";

    // Create a Connection
    $conn = mysqli_connect($server_name, $username, $password);

    // Die if connection was not successful
    if (!$conn){
        die("<br> Sorry! Failed to connect: ".mysqli_connect_error());
    }
    else {
        echo "<br> Connection was successful";
    }

?>