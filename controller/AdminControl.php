<?php

include_once('db.php');

if( isset($_POST['submit']) ) {

    $val1 = htmlentities($_POST['ella_id']);
    echo $val1;
    echo '<br/>';
    $sql = "SELECT comment,name,email,website from ella_srilanka where id = $val1";
    $query = mysqli_query($con, $sql);

    if($query) {

            $dbcomment = $row[1];
            $dbname = $row[2];
            $dbemail = $row[3];
            $dbwebsite = $row[4];
    } else {
        echo "0 results";
    }
}
$con    ->close();

?>