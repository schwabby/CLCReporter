<?php

echo "Test for displaying MySQL Table in a browser";

//make connection with the database
mysql_connect('MattInvntryDB.uc1.rdbs.ctl.io:49183','matt','1222T@ylor');

//select database
mysql_select_db('test_schema');

$sql="SELECT * FROM IHGResourceCount";

$records=mysql_query($sql);

?>
<html>
    <head>
        <title>CLC Reporter PHP</title>
    </head>
<body>
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
            }//end while
            ?>
        </tr>
    </table>
</body>

</html>