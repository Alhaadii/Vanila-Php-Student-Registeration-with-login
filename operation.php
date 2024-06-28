<?php
include("conn.php");


if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sqlQuery = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $connection->query($sqlQuery);
    if ($result->num_rows > 0) {
        header("Location: stdportal.php");
    } else {
        echo "Invalid username or password";
    }
}






if (isset($_POST["insert"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $class = $_POST["class"];

    $sqlQuery = "insert into student(stdid, stdname,stdclass)values($id,'$name','$class')";
    $result = $connection->query($sqlQuery);
    if ($result) {
        echo "<h1>Inserted..</h1";
        header("Location: stdportal.php?");
    } else {
        echo "Data not Inserted" . $connection->error;
    }
}
if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $class = $_POST["class"];

    $sqlQuery = "update student set stdname ='$name',stdclass='$class' where stdid=$id";
    $result = $connection->query($sqlQuery);
    if ($result) {
        echo "<h1>udated..</h1";
        header("Location:stdportal.php");
    } else {
        echo "Data not updated" . $connection->error;
    }
}
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sqlQuery = "delete from student where stdid= $id";
    $result = $connection->query($sqlQuery);
    if ($result) {
        echo "<h1>Deleted the id: $id</h1>";
        header("location:stdportal.php");
    } else {
        echo  $connection->error;
    }
}
