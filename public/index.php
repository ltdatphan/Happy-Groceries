<?php
session_start();
include '../templates/header.php';

switch ($_SERVER["SERVER_NAME"]) {
    case 'webdev.scs.ryerson.ca':
        $myfile = fopen("../../../mysqlLogin.txt", "r") or die("Unable to open file!");
        $host = 'localhost';
        $username = preg_replace("/\s+/", "", fgets($myfile, 4096));
        $password = preg_replace("/\s+/", "", fgets($myfile, 4096));
        $database = $username;
        fclose($myfile);
        break;
    case 'happygrocery.infinityfreeapp.com':
        $host = 'sql111.epizy.com';
        $username = 'epiz_27230234';
        $password = 'fqCZGUlAw1X7T';
        $database = 'epiz_27230234_hello';
        break;
    case 'localhost':
        $host = 'localhost';
        $username = 'hello';
        $password = 'world';
        $database = 'hello';
        break;
}

$conn = mysqli_connect($host, $username, $password, $database) or die("Cannot connect to database!");

//Retrieve list of products
$sql = "SELECT * FROM Products ORDER BY category DESC";

echo "<div style='background-color: rgb(255,253,250);'>";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Router
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
include $page . '.php';
//End of router

echo "</div>";

include '../templates/footer.php'
?>
