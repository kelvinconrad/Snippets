// Connecting to database 
<?php
    $servername = "localhost";
    $username = "admin";
    $password = "123456";
    $dbname = "login_form"; 

    /* Create connection */
    $conn = new mysqli($servername, $username, $password);

    /* Check connection */
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);}
    /* Create database */
    $sql = "CREATE DATABASE admin";
    if ($conn->query($sql) === TRUE) {
        echo "Database admin created successfully";
    }
    else
    {
        echo "Error creating database: " . $conn->error;
    }
    $conn->close();
    
 ?>