<?php
$server = "sql210.epizy.com";
$user = "epiz_30682694";
$pass = "nnrWncLixnxHkjB";
$database = "epiz_30682694_loginsystem";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn){
    die("<script>alert('Connection Failed!')</script>");
}
?>