<?php

/** @var mysqli $conn */
$errors = [];

function isValidPassword($password)
{
    global $errors;
    if (strlen($password) < 6) {
        $errors[] = 'Password must be at least 6 characters long.';
        return false;
    }
    return true;
}

/**
 * Validate user details
 *
 * @param [type] $dbConn A link identifier returned by mysqli_connect() or mysqli_init().
 * @param string $email The email address given by the user.
 * @param string $password_1 The password string given by the user.
 * @param string $password_1 The repeated password string given by the user.
 * @param string $first_name The first name given by the user.
 * @param string $last_name The last name given by the user.
 * @return void
 */
function validateUser($dbConn, $email, $password_1, $password_2, $first_name, $last_name)
{
    global $errors;
    $result = mysqli_query($dbConn, "SELECT * FROM Users WHERE email = '$email'");

    // Check if any of the inputs were empty
    if (!strlen($email) || !strlen($password_1) || !strlen($password_2) || !strlen($first_name) || !strlen($last_name)) {
        return false;
    }

    // Check if email address has been previously registered
    if (mysqli_num_rows($result) > 0) {
        $errors[] = 'The provided email address is already registered.';
        return false;
    }

    // Check if provided password is invalid.
    if (!isValidPassword($password_1)) {
        return false;
    }

    // Check if both passwords are identical.
    if ($password_1 !== $password_2) {
        $errors[] = 'Provided passwords do not match.';
        return false;
    }
    
    return true;
}

/**
 * Register user in the provided database with the information
 *
 * @param mysqli $dbConn A link identifier returned by mysqli_connect() or mysqli_init().
 * @param string $email The email address for the user.
 * @param string $password The password string for the user.
 * @param string $first_name The user's first name.
 * @param string $last_name The user's last name.
 * @return void
 */
function registerUser($dbConn, $email, $password, $first_name, $last_name)
{
    global $errors;
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $result = mysqli_query($dbConn, "INSERT INTO Users (email, `password`, firstname, lastname) VALUES ('$email', '$password_hash', '$first_name', '$last_name');");

    if (!$result) {
        $errors[] = 'Something went wrong. Please try again or contact the administrator.';
        return false;
    }

    return true;
}

// If sign up form was submitted
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