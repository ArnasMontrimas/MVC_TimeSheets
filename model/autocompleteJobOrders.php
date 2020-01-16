<?php

require_once("database.php");
require "timesheetsDB.php";

$job = $_GET["term"];

if($job != null) {
    $query = "SELECT * FROM joborders WHERE jobOrderNo LIKE :job";
    $statement = $db -> prepare($query);
    $statement -> bindValue(":job",$job."%",PDO::PARAM_STR);

    try {
        $statement -> execute();
    }
    catch (PDOException $e) {
        echo $e -> getMessage();
        exit();
    }

    $results = $statement -> fetchAll();
    $statement -> closeCursor();

    $jobs = array();

    //This will make sure that a TimeSheet that is taken by some one else will not be suggested
    $allSheets = jobOrderTakenByAnother();
    foreach ($results as $result) {
        foreach($allSheets as $order) {
            if($order['jobSheet'] == $result['jobOrderNo']) {
                continue 2; //When jobSheet matches we skip adding it to suggestions
            }
        }
        $jobs[$result["id"]] = $result["jobOrderNo"];
    }

    $response = json_encode($jobs);
    echo $response;
}
