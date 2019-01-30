<?php

include_once('db.php');

//$ella_id = $_POST["ella_id"];
if( isset($_GET['submit']) ) {
    //be sure to validate and clean your variables
    $val1 = htmlentities($_GET['ella_id']);
    echo $val1;
    echo '<br/>';
    $sql = "SELECT comment,name,email,website from comment_ella_srilanka where id = $val1";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $dbcomment = $row[1];
            $dbname = $row[2];
            $dbemail = $row[3];
            $dbwebsite = $row[4];
            $dbdatetime = $row[5];
        }
    } else {
        echo "0 results";
    }
}
$con    ->close();

?>