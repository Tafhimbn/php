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


    // Insert data in db
    /*
    syntax rules to follow:

        The SQL query must be quoted in PHP
        String values inside the SQL query must be quoted
        Numeric values must not be quoted
        The word NULL must not be quoted
       
        syntax:

        INSERT INTO table_name (column1, column2, column3,...)
        VALUES (value1, value2, value3,...)

    */
    // MySQLi Object-oriented

    $sql = "INSERT INTO product_stock (product, stock, other) VALUES ('Sugar', '80kG', 'Red Sugar')";
    // "INSERT INTO `product_stock` (`product_id`, `product`, `stock`, `other`, `last_refill_date`) VALUES (NULL, 'Potato', '40KG', 'New Potato', current_timestamp())";
    echo "<br>";

    // SQL query to be executed
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo "New record created successfully <br>";
    } else {
      echo "The record was not inserted. Error: " .mysqli_error($conn) . "<br>" ;
    }
    
    $conn->close();


?>
