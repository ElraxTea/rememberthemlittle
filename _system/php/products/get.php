<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $conn;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=rtl_v1", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo 'OK';
    }
    catch (PDOException $e) {
        echo "Connection Falied: ".$e->getMessage();
    }

    echo $conn->query("SELECT * FROM 'dummy' ");
?>