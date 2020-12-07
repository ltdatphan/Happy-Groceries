<?php

/** @var mysqli $conn */

function isValidProduct($link, $product_id)
{
    return mysqli_query($link, "SELECT * FROM Products WHERE id=$product_id");
}

$action = $_GET['action'] ?? null;

// If product ID is invalid, show error.
if (isset($_POST['id']) && !isValidProduct($conn, (int)$_POST['id'])) {
    echo "<h2>INVALID PRODUCT ID</h2>";
    exit;
}

// If cart does not exist, initialize it.
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

switch ($action) {
    case 'add':
        // Add product to cart
        $product_id = (int)$_POST['id'];
        $quantity = (int)$_POST['quantity'];
        if (array_key_exists($product_id, $_SESSION['cart'])) {
            $_SESSION['cart'][$product_id] += $quantity;
        } else {
            $_SESSION['cart'][$product_id] = $quantity;
        }
        break;
    case 'remove':
        // Remove product from cart
        $product_id = (int)$_POST['id'];
        if (array_key_exists($product_id, $_SESSION['cart'])) {
            unset($_SESSION['cart'][$product_id]);
        }
        break;
    case 'set':
        // Set product in cart with given quantity
        $product_id = (int)$_POST['id'];
        $quantity = (int)$_POST['quantity'];
        $_SESSION['cart'][$product_id] = $quantity;
        break;
    case 'clear':
        // Clear cart
        $_SESSION['cart'] = [];
        break;
}

// Clear products in cart with quantity less than 1
$_SESSION['cart'] = array_filter($_SESSION['cart'], function ($var) {
    return $var > 0;
});

if (!empty($_SESSION['cart'])) {
    $cart_ids_string = implode(',', $cart_ids = array_keys($_SESSION['cart']));

    // Query products in cart from database
    $result = mysqli_query($conn, "SELECT * FROM Products WHERE id in ($cart_ids_string) ORDER BY prod_name");
}

// If cart action was performed, redirect to base URL (prevent refreshes causing resubmitting form)
if (!is_null($action)) {
    header('content-type: text/plain;charset=utf8');
    $url_info = parse_url($_SERVER["REQUEST_URI"]);
    
    $url_query = isset($url_info['query']) ? $url_info['query'] : '';

    parse_str($url_query, $query_info);
    unset($query_info['action']);
    $new_url = $urlinfo['path'] . '?' . http_build_query($query_info);
    header("Location: " . $new_url, TRUE, 303);
}
