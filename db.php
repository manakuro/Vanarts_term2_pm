<?php

    function connectDB($host, $username, $password, $database) {

        // Declare variables for accessing database
        $host = $host;
        $username =  $username;
        $password = $password;
        $database = $database;

        // Establish a connection to the databse using above info
        $conn = mysqli_connect($host, $username, $password, $database);

        // check to see if database has connected 
        // if it hasn't print line and error
        if (!$conn) {
            die('Connection Failed: '. mysqli_connect_error());
            exit;
        }

        return $conn;
    }
