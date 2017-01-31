<html>
<body>
<h1>new entry</h1>
<hr>
saving new entry...
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

include_once("dbUtils.php");
if (isset($name) && isset($email) && isset ($text)){
    $sql = "insert into entry (name, email, text) VALUES ('$name', '$email', '$text')";
    db_query($sql);
    echo("data written to db");
} else {
    echo "not all data set";
}
?>

</body>


</html>
