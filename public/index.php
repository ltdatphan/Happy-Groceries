<?php
include '../templates/header.php';
//include '../templates/baseLayout.php';
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page

//Uncomment me if you are hosting on Moons
$myfile = fopen("../../../mysqlLogin.txt", "r") or die("Unable to open file!");
$username = preg_replace("/\s+/", "", fgets($myfile, 4096));
$password = preg_replace("/\s+/", "", fgets($myfile, 4096));
fclose($myfile);
$conn = mysqli_connect("localhost", $username, $password, $username) or die("Cannot connect to database!");

//Connection to local database. Comment below out if you are hosting on Moons
// $conn = mysqli_connect("localhost", 'hello', 'world', 'hello') or die("Cannot connect to database!");

$sql = "SELECT * FROM Products ORDER BY category DESC";

echo "<div style='background-color: rgb(255,253,250);'>";
include $page . '.php';
echo "</div>";



include '../templates/footer.php'
?>

