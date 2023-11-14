<?php
    function makeConnectionWithDb() {
        // MySql credentials
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "products";

        // Make the connection
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        // Check if connection is working
        if ($conn == false) {
            die("Connection failed");
        }

        return $conn;

    }
    
    function getQuery($sqlQuery) {
        // Make connection with the DB
        $conn = makeConnectionWithDb();

        // Create a sql query
        $result = mysqli_query($conn, $sqlQuery);

        // Close the connection
        closeConnection($conn);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function insertQuery($sqlQuery) {
        // Make connection with the DB
        $conn = makeConnectionWithDb();

        // Create a sql query
        $result = mysqli_query($conn, $sqlQuery);

        var_dump($result);

        // Close the connection
        closeConnection($conn);

        return $result;

    }

    function closeConnection($conn) {
        $conn->close();
    }