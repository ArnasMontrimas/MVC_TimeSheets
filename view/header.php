<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../css/ui-lightness/jquery-ui-1.8.custom.css">
        <script type="text/javascript" src="../javascript/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="../javascript/jquery-ui-1.8.custom.min.js"></script>
        <script type="text/javascript" src="../javascript/autoComplete.js"></script>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <!-- Here im using php to link to different styleSheets depending what page i'm on  -->
        <?php if($action == "default") { ?>
            <link rel="stylesheet" href="../css/defaultPage.css" type="text/css">
        <?php } elseif ($action == "selectEmployee") {?>
            <link rel="stylesheet" href="../css/selectEmployee.css" type="text/css">
        <?php } elseif ($action == "employeeTimesheet" || $action == "addTimesheet") { ?>
            <link rel="stylesheet" href="../css/employeeTimesheet.css" type="text/css">
        <?php } elseif ($action == "error") {?>
            <link rel="stylesheet" href="../css/error.css">
        <?php } ?>
        <title>Arnas - TimeSheets</title>
    </head>
    <body>
        <main>
            <header>
                <img src="../images/TimesheetHeader.jpg" alt="Time sheets paper image">
                <nav>
                    <ul>
                        <li><a href="../controller/index.php?action=selectEmployee">Select Employee</a></li>
                        <li><a href="../controller/index.php">Home</a></li>
                    </ul>
                </nav>
            </header>