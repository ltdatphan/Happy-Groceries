<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// We worked on different platforms. Some of us worked on the hosting service, some worked on the Moons and some used a local environment. Therefore we have different log in credentials
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

//Create connection to Databse
$conn = mysqli_connect($host, $username, $password, $database) or die("Cannot connect to database!");

//Retrieve list of products
$sql = "SELECT * FROM Products ORDER BY category DESC";

// Router include pages based on the value in the query string
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';

include_once '../src/cartProcessing.php';
$processing_script_path = '../src/' . ($_GET['page'] ?? 'home') . 'Processing.php';
if (file_exists($processing_script_path)) {
    include_once($processing_script_path);
}

include '../templates/header.php'; //Nav bar

echo "<div style='background-color: rgb(255,253,250);'>";

include $page . '.php'; //The actual page content
//End of router

echo "</div>";

include '../templates/footer.php'; //Footer