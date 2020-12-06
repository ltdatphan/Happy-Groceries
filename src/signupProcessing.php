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
        $errors[] = 'Password must have at least 6 characters.';
        return false;
    }
    return true;
}

function validateUser($dbConn, $email, $password_1, $password_2, $first_name, $last_name)
{
    global $errors;
    $result = mysqli_query($dbConn, "SELECT * FROM Users WHERE email = '$email'");

    if (mysqli_num_rows($result) > 0) {
        $errors[] = 'The email address provided is already registered.';
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

function registerUser($dbConn, $email, $password_1, $first_name, $last_name)
{
    global $errors;
    $password_hash = password_hash($password_1, PASSWORD_DEFAULT);
    $result = mysqli_query($dbConn, "INSERT INTO Users (email, `password`, firstname, lastname) VALUES ('$email', '$password_hash', '$first_name', '$last_name');");

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
    $first_name = mysqli_real_escape_string($conn, trim($_POST['first_name']));
    $last_name = mysqli_real_escape_string($conn, trim($_POST['last_name']));

    $success = validateUser($conn, $email, $password_1, $password_2, $first_name, $last_name) && registerUser($conn, $email, $password_1, $first_name, $last_name);

    if ($success) {
        $_SESSION['user'] = ['email' => $email, 'first_name' => $first_name, 'last_name' => $last_name];
        header('location: index.php');
    }
}