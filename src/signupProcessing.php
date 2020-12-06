<?php

/** @var mysqli $conn */
$errors = [];

function isValidEmail($email)
{
    global $errors;
    return true;
}

function isValidPassword($password)
{
    global $errors;
    if (strlen($password) < 6) {
        $errors[] = 'Password must be at least 6 characters long.';
        return false;
    }
    return true;
}

function validateUser($dbConn, $email, $password_1, $password_2, $fname, $lname)
{
    global $errors;
    $result = mysqli_query($dbConn, "SELECT * FROM Users WHERE email = '$email'");

    if (mysqli_num_rows($result) > 0) {
        $errors[] = 'The provided email address is already registered.';
        return false;
    }

    if (!isValidPassword($password_1)) {
        return false;
    }

    if ($password_1 !== $password_2) {
        $errors[] = 'Provided passwords do not match.';
        return false;
    }
    return true;
}

function registerUser($dbConn, $email, $password_1, $fname, $lname)
{
    global $errors;
    $password_hash = password_hash($password_1, PASSWORD_DEFAULT);
    $result = mysqli_query($dbConn, "INSERT INTO Users (email, `password`, firstname, lastname) VALUES ('$email', '$password_hash', '$fname', '$lname');");

    if (!$result) {
        $errors[] = 'Something went wrong. Please try again or contact the administrator.';
        return false;
    }

    return true;
}

if (isset($_POST['signup_user'])) {
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password_1 = mysqli_real_escape_string($conn, trim($_POST['password_1']));
    $password_2 = mysqli_real_escape_string($conn, trim($_POST['password_2']));
    $fname = mysqli_real_escape_string($conn, trim($_POST['fname']));
    $lname = mysqli_real_escape_string($conn, trim($_POST['lname']));

    $success = validateUser($conn, $email, $password_1, $password_2, $fname, $lname) && registerUser($conn, $email, $password_1, $fname, $lname);

    if ($success) {
        $_SESSION['user'] = ['email' => $email, 'fname' => $fname, 'lname' => $lname];
        header('location: index.php');
    }
}