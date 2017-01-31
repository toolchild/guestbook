<html>
<body>
<hi>delete guestbook entries</hi>
<hr>
<form action="insertDelete.php" method="post">
    <table border="1">


        <?php

        include_once("dbUtils.php");
        $sql = "select * from entry";
        $result = db_query($sql);

        while ($row = mysqli_fetch_row($result)) {
            echo "<tr>\n";
            echo "<td> <input type='checkbox' name='delete[]' value='$row[0]'></td>";
            foreach ($row as $r) {
                echo "<td>$r</td>\n";
            }
            echo "</tr>\n";

        }


        ?>
    </table>
    <br>
    <input type="submit" name="submit" value="delete">
    <input type="reset" name="reset" value="reset">


</form>


</body>
</html>

