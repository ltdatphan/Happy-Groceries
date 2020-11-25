<?php

/** @var mysqli $conn */

function isValidProduct($link, $product_id)
{
    return mysqli_query($link, "SELECT * FROM Products WHERE id=$product_id");
}

$action = $_GET['action'] ?? 'show';

if (isset($_POST['id']) && !isValidProduct($conn, (int)$_POST['id'])) {
    echo "<h2>INVALID PRODUCT ID</h2>";
    exit;
}

if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

switch ($action) {
    case 'add':
        $product_id = (int)$_POST['id'];
        $quantity = (int)$_POST['quantity'];
        if (array_key_exists($product_id, $_SESSION['cart'])) {
            $_SESSION['cart'][$product_id] += $quantity;
        } else {
            $_SESSION['cart'][$product_id] = $quantity;
        }
        break;
    case 'remove':

        $product_id = (int)$_POST['id'];
        if (array_key_exists($product_id, $_SESSION['cart'])) {
            unset($_SESSION['cart'][$product_id]);
        }
        break;
    case 'set':
        $product_id = (int)$_POST['id'];
        $quantity = (int)$_POST['quantity'];
        $_SESSION['cart'][$product_id] = $quantity;
        break;
    case 'clear':
        $_SESSION['cart'] = [];
        break;
}

// Clear products in cart with quantity less than 1
$_SESSION['cart'] = array_filter($_SESSION['cart'], function ($var) {
    return $var > 0;
});

if (!empty($_SESSION['cart'])) {
    $cart_ids_string = implode(',', $cart_ids = array_keys($_SESSION['cart']));

    $result = mysqli_query($conn, "SELECT * FROM Products WHERE id in ($cart_ids_string) ORDER BY prod_name");
}


$subtotal = 0.0;

?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href.split("&")[0]);
    }
</script>
<div class="container custom-page" style="text-align:center">
    <h1 class="title-header">Shopping Cart</h1>
    <?php if (empty($_SESSION['cart'])) : ?>
        <h4>Your shopping cart is empty!</h4>
        <a href="?page=products" class="btn card-btn" >Shop now</a>
    <?php else : ?>
        <div class="row">
            <div class="col">
                <div class="cart">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        extract($row);
                        $quantity = $_SESSION['cart'][$id];
                        $subtotal += $price * $quantity;
                    ?>
                    <div class="card cart d-flex products-card shadow p-3 mb-5 rounded">
                        <div class="row no-gutters">
                            <a href="?page=item&id=<?= $id ?>"><img src="<?= $prod_url ?>" alt="Product image" style="width:150px;"></a>
                            <div class="card-body cart-body">
                                <h5 class="card-title" style="height:auto"><?=$row["prod_name"]?></h5>
                                <p class="card-description"><?=$row["prod_desc"]?></p>
                            </div>
                            <div class="d-flex card-body cart-body justify-content-end align-items-center">
                                <label class="quantity-label">Quantity:</label>
                                <select class="quantity-select form-control form-control-sm" name="quantity" onchange='this.form.submit()'>
                                    <option value="0">0 (Remove)</option>
                                    <?php for ($i = 1; $i < 100; $i++) : ?>
                                        <option value="<?= $i ?>" <?= $i === $quantity ? 'selected="selected"' : ''; ?>><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="d-flex card-body cart-body justify-content-end align-items-center">
                                <p class="price"><?= "\$" . sprintf("%.2f", $price) . " CAD" ?></p>
                                <form class='remove-form' action="?page=cart&action=remove" method="POST">
                                    <input name="id" type="hidden" value="<?= $id ?>">
                                    <button class='btn'><i class="fa fa-times"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="col-sm-3">
                <p>Subtotal: <b><?= "\$" . sprintf("%.2f", $subtotal) . " CAD" ?></b></p>
                <button class='btn card-btn'>Go to Checkout</button>
            </div>
        </div>
    <?php endif; ?>
</div>