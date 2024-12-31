<?php
    echo "Welcome to the stage where we are ready to get connected to Database";
    /* 
    Way to connect a MySQL Database:
    1. MySQLi extension
    2. PDO (PHP Data Object)
    
    PHP provides mysql_connect function to open a database connection. This function takes five parameters and returns a MySQL link identifier on success, or FALSE on failure.

    Syntax:
                connection mysqli_connect(server,user,passwd,new_link,client_flag);
   
    server       -> Optional − The host name running database server. If not specified then default value is localhost:3306.	
    user         -> Optional − The username accessing the database. If not specified then default is the name of the user that owns the server process.	
    passwd       -> Optional − The password of the user accessing the database. If not specified then default is an empty password.
    new_link     -> Optional − If a second call is made to mysql_connect() with the same arguments, no new connection will be established; instead, the identifier of the already opened connection will be returned.	
    client_flags -> Optional − A combination of the following constants −
                                MYSQL_CLIENT_SSL          − Use SSL encryption
                                MYSQL_CLIENT_COMPRESS     − Use compression protocol
                                MYSQL_CLIENT_IGNORE_SPACE − Allow space after function names
                                MYSQL_CLIENT_INTERACTIVE  − Allow interactive timeout seconds of inactivity before closing the connection
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