<?php
/** @var mysqli $conn */
$errors = [];

if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));
    $remember = isset($_POST['remember']);

    $results = mysqli_query($conn, "SELECT * FROM Users WHERE email='$email'");
    $user = mysqli_fetch_assoc($results);

    if (!is_null($user) && password_verify($password, $user['password'])) {
        //Login user, and redirect to main page.
        $_SESSION['user'] = ['email' => $email, 'fname' => $user['firstname'], 'lname' => $user['lastname']];
        header('location: index.php');
    } else {
        $errors[] = "Incorrect email or password.";
    }
}
