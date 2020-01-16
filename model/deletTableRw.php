<?php 
require "../model/database.php";

$jobSheet = $_POST["jobSheet"];
$empId = $_POST["empId"];
$weekEnding = $_POST["weekEnding"];

global $db;
$query = "DELETE FROM timesheets WHERE jobSheet = :jobSheet AND empId = :empId AND weekEnding = :weekEnding";
$statement = $db -> prepare($query);

$statement -> bindValue(":jobSheet",$jobSheet);
$statement -> bindValue(":empId",$empId);
$statement -> bindValue(":weekEnding",$weekEnding);

try {
    $statement -> execute();
}
catch (PDOException $ex) {
    echo "Error with DeleteTimesheet Function" . $ex -> getMessage();
    exit();
}

$statement -> closeCursor();