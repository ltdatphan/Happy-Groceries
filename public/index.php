<?php
include '../templates/header.php';


// Uncomment me if you are hosting on Moons
// $myfile = fopen("../../../mysqlLogin.txt", "r") or die("Unable to open file!");
// $username = preg_replace("/\s+/", "", fgets($myfile, 4096));
// $password = preg_replace("/\s+/", "", fgets($myfile, 4096));
// fclose($myfile);
// $conn = mysqli_connect("localhost", $username, $password, $username) or die("Cannot connect to database!");

//Connection to local database. Comment below out if you are hosting on Moons
//$conn = mysqli_connect("localhost", 'hello', 'world', 'hello') or die("Cannot connect to database!");

//Connection to infinity free SQL
//$conn = mysqli_connect("sql111.epizy.com", 'epiz_27230234', 'fqCZGUlAw1X7T', 'epiz_27230234_hello') or die("Cannot connect to database!");

//Retrieve list of products
$sql = "SELECT * FROM Products ORDER BY category DESC";

echo "<div style='background-color: rgb(255,253,250);'>";

// Router
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
include $page . '.php';
//End of router

echo "</div>";

include '../templates/footer.php'
?>