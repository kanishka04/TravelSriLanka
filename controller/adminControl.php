<?php

include_once('db.php');

<<<<<<< HEAD
$ella_id = $galle_id = $udwalawe_id = $anuradapura_id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

=======
//$ella_id = $_POST["ella_id"];
if( isset($_GET['submit']) ) {
    //be sure to validate and clean your variables
    $val1 = htmlentities($_GET['ella_id']);
    echo $val1;
    echo '<br/>';
    $sql = "SELECT comment,name,email,website from comment_ella_srilanka where id = $val1";
>>>>>>> ca515a4e14e33d17f05f2b9686fa30591299f0ca

}

?>