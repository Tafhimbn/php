<?php
    echo "Welcome to the stage where we are ready to get connected to Database";

    // Connecting a Connection
    $server_name ="localhost";
    $username = "root";
    $password = "";
    $dbname ="store";

    // Create a Connection
    $conn = mysqli_connect($server_name, $username, $password, $dbname);

    // Die if connection was not successful
     if (!$conn){
        die("<br> Sorry! Failed to connect: ".mysqli_connect_error());
    }
    else {
        echo "<br> Connection was successful";
    }


    // Create a table in the db






?>