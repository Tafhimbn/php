<?php
    echo "Welcome to the stage where we are ready to get connected to Database";

    // Connecting a Connection
    $server_name ="localhost";
    $username = "root";
    $password = "";

    // Create a Connection
    $conn = mysqli_connect($server_name, $username, $password);

    // Die if connection was not successful
     if (!$conn){
        die("<br> Sorry! Failed to connect: ".mysqli_connect_error());
    }
    else {
        echo "<br> Connection was successful";
    }


    // Create a db

    $sql ="CREATE DATABASE Store";
    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "<br> The db was created successfully.";
    }
    else {    
        echo "<br> Sorry! The db was not created, because of this error --> ".mysqli_error($conn); 
    }

?>