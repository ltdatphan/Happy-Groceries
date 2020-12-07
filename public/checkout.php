<?php
$subtotal = 0.00;
?>
<div class="container">
    <h1 class="title-header">Checkout</h1>
    <?php if (empty($_SESSION['user'])) : ?>
        <h4>You are not logged in! Please log in or create a new account first.</h4>
        <a href="?page=login" class="btn card-btn btn-margin">Log In</a>
        <a href="?page=signup" class="btn card-btn btn-margin">Sign Up</a>
    <?php elseif (empty($_SESSION['cart'])) : ?>
        <h4>You recently checked out! Your shopping cart is empty!</h4>
        <a href="?page=products" class="btn card-btn btn-margin">Shop now</a>
    <?php else : ?>
        <div class="row">
            <!-- Billing address -->
            <div class="col">
                <h3>Billing Details</h3>
                <form action="?page=receipt" method="POST">
                    <div>
                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="fname-input">First Name</label>
                                <input name="fname" id="fname-input" type="text" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="l-input">Last Name</label>
                                <input name="lname" id="lname-input" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address-input">Address</label>
                            <input name="address" id="address-input" type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="address2-input">Address 2</label>
                            <input name="address2" id="address2-input" type="text" placeholder="Apartment, suite, etc. (optional)" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="city-input">City</label>
                            <input name="city" id="city-input" type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="postal-code-input">Postal Code</label>
                            <input name="postal_code" id="postal-code-input" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <label for="credit-card-input">Credit Card Number</label>
                            <input name="credit_card" type="text" id="credit-card-input" class="form-control" required>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col mb-3">
                                <label for="expiration-date-input">Expiration Date</label>
                                <input name="expiration_date" type="date" id="expiration-date-input" class="form-control" required>
                            </div>
                            <div class="col-2 mb-3">
                                <label for="cvv-input">CVV</label>
                                <input name="cvv" type="text" id="cvv-input" class="form-control" size="3" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button name="checkout" type="submit" class="btn card-btn btn-margin">Checkout</button>
                    </div>
                </form>
            </div>
            <!-- Cart -->
            <div class="col-4">
                <h3>Your Cart</h3>
                <ul class="list-group">
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <?php
                        extract($row);
                        $quantity = $_SESSION['cart'][$id];
                        $subtotal += $price * $quantity;
                        ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><?= $row["prod_name"] . ($quantity > 0 ? " &times; $quantity" : '') ?></div>
                            <span>$<?= $price * $quantity ?></span>
                        </li>
                    <?php endwhile;
                        $shipping = $subtotal > 40.00 ? 0.00 : 5.00;
                        $hst = $subtotal * 0.13;
                        $total = $subtotal + $hst + $shipping;
                    ?>
                    <li class="list-group-item d-flex justify-content-between list-group-item-secondary">
                        <div>Shipping</div>
                        <span>$<?= sprintf("%.2f", $shipping) ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between list-group-item-secondary">
                        <div>HST</div>
                        <span>$<?= sprintf("%.2f", $hst) ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between list-group-item-primary">
                        <div>Total</div>
                        <b>$<?= sprintf("%.2f", $total) ?></b>
                    </li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>