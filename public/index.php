<?php
include '../templates/header.php';
//include '../templates/baseLayout.php';
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page

/*
$myfile = fopen("../../../mysqlLogin.txt", "r") or die("Unable to open file!");
$username = preg_replace("/\s+/", "", fgets($myfile, 4096));
$password = preg_replace("/\s+/", "", fgets($myfile, 4096));
fclose($myfile); */
//$conn = mysqli_connect("localhost", $username, $password, $username) or die("Cannot connect to database!");
$conn = mysqli_connect("localhost", 'hello', 'world', 'hello') or die("Cannot connect to database!");
$sql = "SELECT * FROM Products ORDER BY id DESC";

include $page . '.php';



include '../templates/footer.php'
?>

