<html>
<body>
<h1>guestbook</h1>
<hr>

<table border="1">


<?php

include_once ("dbUtils.php");
$sql = "select * from entry";
$result =db_query($sql);

while($row = mysqli_fetch_row($result)){
    echo "<tr>\n";
    foreach($row as $r){
        echo "<td>$r</td>";
    }
    echo "</tr>\n";
}

?>

</table>

<a href="selectDelete.php">delete</a>
<a href="selectEntry.php">insert</a>

</body>


</html>

