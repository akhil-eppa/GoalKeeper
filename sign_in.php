<?php
extract($_POST);

// $email
// $first
// $number
// $question
// $last
// $password
// $cpassword
// $securityanswer

$id = 0;

$dbLink = mslqi_connect("localhost", "root", "");
if(!dbLink) {
    die("Could not connect to db!");
}

mysqli_select_db($dbLink, "reg");

$queryString = "select * from reg where pass = '".$password."' and  email = '".$email."' and uname = '".$username."'";
$result = mysqli_query($dbLink, $queryString);

if(!result) {
    die("User Does not Exist!");
}

echo "" // alert successful login
header("Location : index.html");

?>