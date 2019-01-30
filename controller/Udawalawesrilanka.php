<?php
include_once('db.php');
$comment = $name = $email = $website = "";
$commentError = $nameError = $emailError = $websiteError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["comment"])) {
        $commentError = "Please add your comment";

    } else if(empty($_POST["name"])){
        $nameError = "Please enter your name";

    }else if(empty($_POST["email"])) {
        $emailError = "Please enter your email";
    } else if(empty($_POST["website"])) {
        $website = "";
    }
    else{
        $comment = test_data($_POST["comment"]);
        $name = test_data($_POST["name"]);
        $email = test_data($_POST["email"]);
        $website = test_data($_POST["website"]);

        if(isset($_POST['submit'])) {
//            echo json_encode(
//                array(
//                    "data" => "asaaaa"
//                )
//            );
            $comment = strip_tags($_POST['comment']);
            $name = strip_tags($_POST['name']);
            $email = strip_tags($_POST['email']);
            $website = strip_tags($_POST['website']);

            $sql = "INSERT INTO udawalawe(comment,name,email,website) VALUES ('$comment','$name','$email','$website');";
            $query = mysqli_query($con, $sql);

            if ($query == TRUE) {
                header('Location: ../ellaSriLanka.php');
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
    }
}
function test_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "SELECT * FROM udawalawe where id = '87'";
$query = mysqli_query($con, $sql);

if($query) {

    $row = mysqli_fetch_row($query);
    $dbcomment = $row[1];
    $dbname = $row[2];
    $dbemail = $row[3];
    $dbwebsite = $row[4];
    $dbdatetime = $row[5];
//    echo $dbcomment;
//    echo $dbname ;
//    echo $dbemail;
//    echo $dbdatetime;
}
else {
    echo "<b><i>Incorrect credentials</i><b>";
}
$con    ->close();
?>