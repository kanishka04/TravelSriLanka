<!DOCTYPE html>
<html>

<head>
    <title>Pasan Kamburugamuwa BLOG</title>
    <link rel = "stylesheet" href = "login.css" media = "all" />
    <script language ="javascript" type ="text/javascript" src = "login.js"></script>
</head>


<body>
<div id = "container">
    <h2>Login to Travel Sri Lanka official web</h2>
    <form method = "post" action ="login.php">

        <input type = "text" name = "name" placeholder="Enter Username"/>
        <input type = "Password" name = "password" placeholder="Enter Password"/>
        <input type ="submit" name ="submit" value = "LOGIN" />

    </form>

</div>
</body>

<?php


session_start();

if(isset($_POST['submit'])){

    include_once('database/db.php');
    $username = strip_tags($_POST['name']);
    $password = strip_tags($_POST['password']);
    $sql = "SELECT username,password FROM login where username = '$username' LIMIT 1";
    $query = mysqli_query($con, $sql);
    if($query) {

        $row = mysqli_fetch_row($query);
        $dbUserName = $row[0];
        $dbPassword = $row[1];
    }


    if($username == $dbUserName && $password == $dbPassword) {
        $_SESSION['username'] = $username;
        header('Location: ellaSriLanka.php');
        //echo "correct";

    }
    else {
        echo "<b><i>Incorrect credentials</i><b>";
    }
}
?>

</html>

