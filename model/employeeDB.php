<?php

function selectEmployees() {
    global $db;
    $query = "SELECT * FROM employees";
    
    $statement = $db -> prepare($query);
    
    try {
        $statement -> execute();
    }
    catch (PDOException $ex) {
        echo "Error with SQL query" . $ex -> getMessage();
        exit();
    }
    
    $employees = $statement -> fetchAll();
    $statement -> closeCursor();
    
    return $employees;

}

function selectEmployeeById($empID) {
    global $db;
    $query = "SELECT * FROM employees WHERE id = :empID";

    $statement = $db -> prepare($query);
    $statement -> bindValue(":empID",$empID);

    try {
        $statement -> execute();
    }
    catch (PDOException $ex) {
        echo "Error with SQL query" . $ex -> getMessage();
        exit();
    }

    $employee = $statement -> fetch();
    $statement -> closeCursor();

    return $employee;
}



