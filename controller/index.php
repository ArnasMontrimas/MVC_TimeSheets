<?php


    //Need the following files to connect to Database and to make Functions available
    require "../model/database.php";
    require "../model/employeeDB.php";
    require "../model/timesheetsDB.php";



    //Set up "action" variable to decide what should be displayed
    $action = filter_input(INPUT_POST, "action");
    if($action == NULL) {
      $action = filter_input(INPUT_GET, "action");
      if($action == NULL) {
          $action = "default";
      }
    }

    //Now depending on what the value of action perform the following
    switch ($action) {
        case "default":
            include "../view/header.php";
            include "../view/default.php";
            include "../view/footer.php";
            break;

        case "selectEmployee":
            $allEmployees = selectEmployees();
            include "../view/header.php";
            include "../view/selectEmployee.php";
            include "../view/footer.php";
            break;

        case "employeeTimesheet":

            if(filter_input(INPUT_POST,"selectEmployee", FILTER_DEFAULT) == NULL || filter_input(INPUT_POST,"selectEmployee", FILTER_DEFAULT) == false) {
                $empId = filter_input(INPUT_GET,"selectEmployee",FILTER_VALIDATE_INT);
            }
            else {
                $empId = filter_input(INPUT_POST,"selectEmployee",FILTER_VALIDATE_INT);
            }
            if(filter_input(INPUT_POST,"date", FILTER_DEFAULT) == NULL || filter_input(INPUT_POST,"date", FILTER_DEFAULT) == false) {
                $weekEnding = filter_input(INPUT_GET,"date",FILTER_DEFAULT);
            }
            else {
                $weekEnding = filter_input(INPUT_POST,"date", FILTER_DEFAULT);
            }


            if($weekEnding == NULL || $weekEnding == false || $empId == NULL || $empId == false) {
                $error =  "There is an error with the values posted";
                header("Location: .?action=error"."&error=".$error);
                exit();
            }
            else {
                if(showTimesheet($empId,$weekEnding) == false || showTimesheet($empId,$weekEnding) == null ) {
                    $pass = false;
                }
                else $pass = true;
                $employee = selectEmployeeById($empId);
                include "../view/header.php";
                include "../view/employeeTimesheet.php";
                include "../view/footer.php";
            }
            break;

        case "addTimesheet":
            //Setting up my array (will make it easier the check every value);
            $data = array();

            //Values from "employeeTimesheet.php"
            $weekEnding = filter_input(INPUT_POST,"weekEnding",FILTER_DEFAULT);
            $empId = filter_input(INPUT_POST,"empId",FILTER_VALIDATE_INT);
            $monday = filter_input(INPUT_POST, "monday",FILTER_VALIDATE_INT);
            $tuesday = filter_input(INPUT_POST,"tuesday",FILTER_VALIDATE_INT);
            $wednesday = filter_input(INPUT_POST,"wednesday",FILTER_VALIDATE_INT);
            $thursday = filter_input(INPUT_POST,"thursday",FILTER_VALIDATE_INT);
            $friday = filter_input(INPUT_POST,"friday",FILTER_VALIDATE_INT);
            $saturday = filter_input(INPUT_POST,"saturday",FILTER_VALIDATE_INT);
            $sunday = filter_input(INPUT_POST,"sunday",FILTER_VALIDATE_INT);
            $jobSheet = filter_input(INPUT_POST,"jobSheet",FILTER_VALIDATE_INT);

            //Add values to array
            array_push($data,"$weekEnding","$empId","$monday","$tuesday","$wednesday","$thursday","$friday","$saturday","$sunday","$jobSheet");

            //Set up a variable for pass or fail
            $success = true;

            //Run through the array make sure all values are valid
            foreach ($data as $d) {
                if($d == NULL || $d == false && $d != 0) {
                    $error = "There is an error with your input";
                    header("Location: .?action=error"."&error=".$error);
                    $success = false;
                    break;
                }
            }
            $allSheets = jobOrderTakenByAnother();
            $jobSheetForEmp = duplicateTimesheet($empId,$weekEnding);
            $exists = jobOrderExitsts($jobSheet);
            //If everything checks out add the time sheet and redirect back to employeeTimesheet with the new data
            foreach ($allSheets as $order) {
                if($order['jobSheet'] == $jobSheet) {
                    $error =  "Jobsheet: " . $jobSheet . " - is taken try another";
                    header("Location: .?action=error"."&error=".$error);
                    $success = false;
                    exit();
                    break;
                }
            }
            if($success == true) {
                if($jobSheetForEmp['jobSheet'] == $jobSheet) {
                    $error =  "Job Sheet: ".$jobSheet." already taken: ";
                    header("Location: .?action=error"."&error=".$error);
                    exit();
                }
                elseif($exists == false) {
                    $error = "Job order: ".$jobSheet." - does not exist use Job orders that are suggested";
                    header("Location: .?action=error"."&error=".$error);
                    exit();
                }
                else {
                    $employee = selectEmployeeById($empId);
                    addTimesheet($empId,$jobSheet,$weekEnding,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$sunday);
                    header("Location: index.php?action=employeeTimesheet"."&selectEmployee=" . $empId . "&date=" . $weekEnding );
                    exit();
                }
            }
            else {
                $error = " (The Success variable is 'false' )";
                header("Location: .?action=error" . "&error=" . $error);
                exit();
            }
            break;

        case "error":
            include "../view/header.php";
            include "../view/error.php";
            include "../view/footer.php";
            break;
    }