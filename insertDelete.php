<html>
<body>
<h1>delete entry</h1>
<hr>
deleting entry...
<?php
$delete = $_POST['delete'];

if (isset($delete)) {

    $amount = "(";
    foreach ($delete as $d) {
        $amount = $amount . "$d,";
    }
    $amount = substr($amount, 0, -1);
    $amount = $amount . ")";

    include_once("dbUtils.php");

    $sql = "delete from entry where entry.id in $amount";
    db_query($sql);
    echo "done.";
} else {
    echo "delete empty";
}


?>

</body>


</html>
