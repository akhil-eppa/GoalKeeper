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

$queryString = "insert into reg values ('".$id."', '".$email."', '".$first."', '".$number."', '".$question."', '".$last."', '".$password."', '".$cpassword."', '".$securityanswer."')";
$result = mysqli_query($dbLink, $queryString);

if(!result) {
    die("The query did not work!");
}
?>