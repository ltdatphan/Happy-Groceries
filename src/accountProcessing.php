<?php
// If user is not logged in, redirect to login page
if (empty($_SESSION['user'])) {
    header("Location: index.php?page=login");
}
