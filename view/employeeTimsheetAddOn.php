<?php $addOn = showTimesheet($empId,$weekEnding); ?>
<?php $totalM = 0; $totalT = 0; $totalW = 0; $totalTh = 0; $totalF = 0; $totalS = 0; $totalSu = 0; $totalWeek = 0; ?>
<section id="addOnnSectionContainer">
    <header>
        <h3>Time Sheets for Employee: <span class="removeBold"><?php echo $employee['firstName']; ?></span><br>Week Ending: <span class="removeBold"><?php echo $weekEnding?></span></h3>
    </header>
    <article id="tableContainer">
        <table>
            <tr>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
                <th>Total</th>
                <th>Job Sheet</th>
                <th>Remove</th>
            </tr>
            <?php $total = 0; ?>
            <?php foreach ($addOn as $add) { ?>
            <tr class="addLeftBorderToTD">
                <td><?php 
                    $totalM += $add['monday'];
                    echo $add['monday'] ?>
                </td>
                <td><?php 
                    $totalT += $add['tuesday'];
                    echo $add['tuesday'] ?>
                </td>
                <td><?php 
                    $totalW += $add['wednesday'];
                    echo $add['wednesday'] ?>
                </td>
                <td><?php 
                    $totalTh += $add['thursday'];
                    echo $add['thursday'] ?>
                </td>
                <td><?php 
                    $totalF += $add['friday'];
                    echo $add['friday'] ?>
                </td>
                <td><?php 
                    $totalS += $add['saturday'];
                    echo $add['saturday'] ?>
                </td>
                <td><?php 
                    $totalSu += $add['sunday'];
                    echo $add['sunday'] ?>
                </td>
                <td><?php 
                    $total = $add['monday']+$add['tuesday']+$add['wednesday']+$add['thursday']+$add['friday']+$add['saturday']+$add['sunday'];
                    $totalWeek += $total;
                    echo $total;?>
                </td>
                <td><?php 
                    echo $add['jobSheet'] ?>
                </td>
                <td><button id="<?php echo $add['jobSheet'] ?>" onClick="removeTr(<?php echo $add['jobSheet'] ?>,<?php echo $add['empId'] ?>,'<?php echo $add['weekEnding'] ?>')">Delete</button></td>
            </tr>
            <?php } ?>
            <tr id="theTotalsRow" class="addLeftBorderToTD">
                <td id="totalM"><?php echo $totalM; ?></td>
                <td id="totalT"><?php echo $totalT; ?></td>
                <td id="totalW"><?php echo $totalW; ?></td>
                <td id="totalTh"><?php echo $totalTh; ?></td>
                <td id="totalF"><?php echo $totalF; ?></td>
                <td id="totalS"><?php echo $totalS; ?></td>
                <td id="totalSu"><?php echo $totalSu; ?></td>
                <td id="totalAll"><?php echo $totalWeek; ?></td>
            </tr>
        </table>
    </article>
</section>