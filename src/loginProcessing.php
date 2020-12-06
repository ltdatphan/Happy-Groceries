<?php
/** @var mysqli $conn */
$errors = [];

if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));
    $remember = isset($_POST['remember']);

    $results = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($results);

    if (!is_null($user) && password_verify($password, $user['password'])) {
        //Login user, and redirect to main page.
        $_SESSION['user'] = ['email' => $email, 'first_name' => $user['firstname'], 'last_name' => $user['lastname']];
        header('location: index.php');
    } else {
        $errors[] = "Account with provided information not found.";
    }
}
