<?php
    echo "Welcome to the stage where we are ready to get connected to Database";
    /* 
    Way to connect a MySQL Database:
        1. MySQLi extension (the "i" stands for improved)
                i) MySQLi (object-oriented)
                ii) MySQLi (procedural)

        2. PDO (PHP Data Objects)

        -> PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.
    */

    // Connecting a Connection

    $server_name ="localhost";
    $username = "root";
    $password = "111";

    /*
    // ------------- Using MySQLi Object-Oriented ------------- 
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    */

    
    //------------- Using MySQLi Procedural --------------------

    $conn = mysqli_connect($server_name, $username, $password);

    // Die if connection was not successful
    if (!$conn){
        die("<br> Sorry! Failed to connect: ".mysqli_connect_error());
        /* In PHP, the die( ) function is used to immediately terminate script execution and output a message. 
           It is often used to handle critical errors or to provide custom error messages before stopping the script execution abruptly. */
    }
    else {
        echo "<br> Connection was successful";
    }

    // ------------- Using MySQLi Object-Oriented ------------- 
    /*

    try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
    
    */




?>