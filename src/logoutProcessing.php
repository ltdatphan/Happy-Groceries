<?php
// Logout of account by deleting session, and redirect to main page
session_destroy();
header("Location: index.php");