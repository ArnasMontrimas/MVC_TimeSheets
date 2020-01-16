<?php

function addTimesheet($empID, $jobSheet, $weekEnding, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday) {

    global $db;
    $query = "INSERT INTO timesheets VALUES (null,:empID,:jobSheet,:weekEnding,:monday,:tuesday,:wednesday,:thursday,:friday,:saturday,:sunday)";
    $statement = $db -> prepare($query);

    $statement -> bindValue(":empID",$empID);
    $statement -> bindValue(":jobSheet",$jobSheet);
    $statement -> bindValue(":weekEnding",$weekEnding);
    $statement -> bindValue(":monday",$monday);
    $statement -> bindValue(":tuesday",$tuesday);
    $statement -> bindValue(":wednesday",$wednesday);
    $statement -> bindValue(":thursday",$thursday);
    $statement -> bindValue(":friday",$friday);
    $statement -> bindValue(":saturday",$saturday);
    $statement -> bindValue(":sunday",$sunday);

    try {
        $statement -> execute();
    }
    catch (PDOException $ex) {
        echo "Error With addTimesheet Function query" . $ex -> getMessage();
        exit();
    }
    $statement -> closeCursor();

}

function showTimesheet($empID,$weekEnding) {

    global $db;
    $query = "SELECT * FROM timesheets WHERE empId = :empID AND weekEnding = :weekEnding";
    $statement = $db -> prepare($query);

    $statement -> bindValue(":empID",$empID);
    $statement -> bindValue(":weekEnding",$weekEnding);

    try {
        $statement -> execute();
    }
    catch (PDOException $ex) {
        echo "Error with showTimesheet Function query" . $ex -> getMessage();
        exit();
    }
    $timesheets = $statement -> fetchAll();
    $statement -> closeCursor();

    return $timesheets;

}

function duplicateTimesheet($empID,$weekEnding) {

    global $db;
    $query = "SELECT jobSheet FROM timesheets WHERE empId = :empID AND weekEnding = :weekEnding";
    $statement = $db -> prepare($query);

    $statement -> bindValue(":empID",$empID);
    $statement -> bindValue(":weekEnding",$weekEnding);

    try {
        $statement -> execute();
    }
    catch (PDOException $ex) {
        echo "Error with showTimesheet Function query" . $ex -> getMessage();
        exit();
    }
    $timesheet = $statement -> fetch();
    $statement -> closeCursor();

    return $timesheet;
}

function jobOrderExitsts($jobOrder) {

    global $db;
    $query = "SELECT jobOrderNo FROM joborders WHERE jobOrderNo = :jobOrder";

    $statement = $db -> prepare($query);
    $statement -> bindValue(":jobOrder",$jobOrder);

    try{
        $statement -> execute();
    }
    catch (PDOException $ex) {
        echo "Error with JobOrderExists function query" . $ex -> getMessage();
        exit();
    }

    if($statement -> fetch() ==  NULL) {
        $exists = false;
    }
    else {
        $exists = true;
    }
    $statement -> closeCursor();
    return $exists;

}

function jobOrderTakenByAnother() {
    global $db;
    $query = "SELECT jobSheet FROM timesheets";

    $statement = $db -> prepare($query);

    try{
        $statement -> execute();
    }
    catch (PDOException $ex) {
        echo "Error with jobOrderTakenByAnother Function query" . $ex -> getMessage();
    }
    $sheets = $statement -> fetchAll();
    $statement -> closeCursor();

    return $sheets;
}