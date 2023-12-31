<?php
// these template has been written accoring to Fayzullo Bakhtiyorov's website
$fullName = $email = $selectWhere "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fullName = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$selectWhere = test_input($_POST["where-did-you-hear-about-us"]);
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>