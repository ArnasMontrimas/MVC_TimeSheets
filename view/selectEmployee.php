            <section>
                <h1>Select Employee</h1>
                <form action="../controller/index.php" method="post">
                    <input type="hidden" name="action" value="employeeTimesheet">
                    <br>
                    <br>
                    <label for="selectEmployee">Employee:&nbsp;
                        <select name="selectEmployee">
                            <?php foreach ($allEmployees as $employee) { ?>
                                <option value="<?php echo $employee["id"] ?>"><?php echo $employee["firstName"] ?></option>
                            <?php }; ?>
                        </select>
                    </label>
                    <label for="date">Date:&nbsp;
                        <input type="date" name="date" min="2000-01-15" max="2100-01-15" step="7" required>
                    </label>
                    <label for="submit">
                        <input type="submit" name="submit" value="Enter TimeSheet">
                    </label>
                </form>
            </section>
