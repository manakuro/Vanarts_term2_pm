<?php

    function connectDB($host = 'localhost', $username = 'root', $password = '', $database = 'yoshi') {

        // Establish a connection to the databse using above info
        $conn = mysqli_connect($host, $username, $password, $database);

        // check to see if database has connected 
        // if it hasn't print line and error
        if (!$conn) {
            die('Connection Failed: '. mysqli_connect_error());
            echo "Connection Failed";
            exit;
        }

        return $conn;
    }
