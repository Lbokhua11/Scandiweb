<?php

function getDbConnection() {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'scandiweb';
    $port = 3307;


    try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conn;
        

    } catch(PDOException $e) {

    echo 'Connection failed: ' . $e->getMessage();
    }
}
getDbConnection();