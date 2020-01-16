<?php

    //Connects to Database

    $dsn = "mysql:host=localhost;dbname=mytimesheets";
    $username = "root";
    $password = "";

    try {
        $db = new PDO($dsn, $username, $password);
        //Set up error reporting on server
        $db -> setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        error_reporting(E_ALL);
    }
    catch (PDOException $ex) {
        echo "Connection Failure Error is: " . $ex -> getMessage();
    }