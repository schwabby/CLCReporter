<?php

echo nl2br("\nInitializing index.php \n");

//MySQL Database connection
include 'php/datalogin.php';

//MySQL select statement
$sql="SELECT * FROM ARRS_Resources";

$records=mysql_query($sql);
$jsonOutput = array()

?>
<html>
    <head>
        <title>CLC Reporter PHP</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
    </head>
<body>
    <div id="lineGraph">
    </div>
    <table width="600" border="1" cellpadding="1" cellspacing="1">
        <tr>
            <th>Date</th>
            <th>Servers</th>
            <th>CPU</th>
            <th>RAM</th>
            <th>Storage</th>
            <th>Disks</th>

        </tr>
        <tr>
            <?php
            while($day=mysql_fetch_assoc($records)){
                echo "<tr>";
                echo "<td>".$day['Date']."</td>";
                echo "<td>".$day['Servers']."</td>";
                echo "<td>".$day['CPU']."</td>";
                echo "<td>".$day['RAM']."</td>";
                echo "<td>".$day['Storage']."</td>";
                echo "<td>".$day['Disks']."</td>";
                echo "</tr>";
                $jsonOutput[] = $day;
            }//end while
            
            ?>
        </tr>
    </table>
    <?php 
        echo "<div style='display: none' id='jsonOutput'>", json_encode($jsonOutput), "</div>";
    ?>
    
    <script src="scripts/app.js"></script>
</body>

</html>
