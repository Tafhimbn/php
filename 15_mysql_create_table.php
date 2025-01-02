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
   /*
   Syntax:
   CREATE TABLE Table_name (
        columm1_name_with_int_value INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        columm2_name VARCHAR(30) NOT NULL,
        columm3_name VARCHAR(30) NOT NULL,
        columm_4 VARCHAR(50),
        columm_5_with_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )

            NOT NULL -> Each row must contain a value for that column, null values are not allowed
            DEFAULT value -> Set a default value that is added when no other value is passed
            UNSIGNED -> Used for number types, limits the stored data to positive numbers and zero
            AUTO INCREMENT -> MySQL automatically increases the value of the field by 1 each time a new record is added
            PRIMARY KEY -> Used to uniquely identify the rows in a table. The column with PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT
*/

// Using MySQLi Object-oriented

    $sql = "CREATE TABLE product_stock (
        product_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        product VARCHAR(30) NOT NULL,
        stock VARCHAR(30) NOT NULL,
        other VARCHAR(50),
        last_refill_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
        } else {
        echo "Error creating table: " . $conn->error;
        }
        $conn->close();
/*
// Using MySQLi Procedural
          
    $sql = "CREATE TABLE product_stock (
        product_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        product VARCHAR(30) NOT NULL,
        stock VARCHAR(30) NOT NULL,
        other VARCHAR(50),
        last_refill_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
    if (mysqli_query($conn, $sql)) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }
        
            mysqli_close($conn);

// Using PDO

    $sql = "CREATE TABLE product_stock (
        product_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        product VARCHAR(30) NOT NULL,
        stock VARCHAR(30) NOT NULL,
        other VARCHAR(50),
        last_refill_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table MyGuests created successfully";
        catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
  
        $conn = null;
*/

?>