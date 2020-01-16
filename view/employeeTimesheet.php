            <script type="text/javascript" src="../javascript/validation.js"></script>
            <section id="employeeInfo">
                <article>
                    <h3>Employee Name:&nbsp;&nbsp;<span class="removeBold"><?php echo $employee['firstName']; ?></span></h3>
                </article>
                <article>
                    <h3>Employee Number:&nbsp;&nbsp;<span class="removeBold"><?php echo $employee['id']; ?></span></h3>
                </article>
                <article>
                    <h3>Week Ending:&nbsp;&nbsp;<span class="removeBold"><?php echo $weekEnding; ?></span></h3>
                </article>
                <article>
                    <h3>Total Hours Worked: <span id="totalHoursWorked" class="removeBold"></span></h3>
                </article>
            </section>
            <section id="formContainer">
                <form action="../controller/index.php" method="post">
                    <input type="hidden" name="empId" value="<?php echo $employee['id']; ?>">
                    <input type="hidden" name="weekEnding" value="<?php echo $weekEnding; ?>">
                    <input type="hidden" name="action" value="addTimesheet">
                    <label for="monday">Monday:&nbsp;
                        <input id="value1" type="text" name="monday" required placeholder="&nbsp;0-10" maxlength="2">
                    </label>
                    <label for="tuesday">Tuesday:&nbsp;
                        <input id="value2" type="text" name="tuesday" required placeholder="&nbsp;0-10" maxlength="2">
                    </label>
                    <label for="wednesday">Wednesday:&nbsp;
                        <input id="value3" type="text" name="wednesday" required placeholder="&nbsp;0-10" maxlength="2">
                    </label>
                    <label for="thursday">Thursday:&nbsp;
                        <input id="value4" type="text" name="thursday" required placeholder="&nbsp;0-10" maxlength="2">
                    </label>
                    <label for="friday">Friday:&nbsp;
                        <input id="value5" type="text" name="friday" required placeholder="&nbsp;0-10" maxlength="2">
                    </label>
                    <label for="saturday">Saturday:&nbsp;
                        <input id="value6" type="text" name="saturday" required placeholder="&nbsp;0-10" maxlength="2">
                    </label>
                    <label for="sunday">Sunday:&nbsp;
                        <input id="value7" type="text" name="sunday" required placeholder="&nbsp;0-10" maxlength="2">
                    </label>
                    <label for="jobSheet">Job Sheet:&nbsp;
                        <input type="number" name="jobSheet" id="to" required placeholder="&nbsp;Job Order Number">
                    </label>
                    <div id="submitContainer">
                        <input type="submit" name="submit" value="Submit Timesheet">
                    </div>
                </form>
            </section>
            <!-- Check if time sheet exists for the particular employee -->
            <script src="../javascript/deleteTr.js"></script>
            <?php if($pass == true) {
                include "../view/employeeTimsheetAddOn.php";
            } ?>