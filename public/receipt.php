<?php $subtotal = 0.0 ?>
<div class="container custom-page" style="text-align:center">
    <h1 class="title-header">Your Receipt</h1>
    <?php if (empty($_SESSION['user'])) : ?>
        <h4>You are not logged in! Please log in or create a new account first.</h4>
        <a href="?page=login" class="btn card-btn btn-margin">Log In</a>
        <a href="?page=signup" class="btn card-btn btn-margin">Sign Up</a>
    <?php elseif (empty($_SESSION['cart'])) : ?>
        <h4>You recently checked out! Your shopping cart is empty!</h4>
        <a href="?page=products" class="btn card-btn btn-margin">Shop now</a>
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
                        <div class="d-flex card-body cart-body align-items-center">
                            <a href="?page=item&id=<?= $id ?>" class="card-text">
                                <h5 class="align-items-center" style="height:100%, align-items-center"><?=$row["prod_name"]?></h5>
                            </a>
                        </div>
                        <div class="d-flex card-body cart-body align-items-center">
                            <div>
                                <label class="quantity-label">Quantity:</label>
                                <?php echo $quantity ?>
                            </div>
                        </div>
                        <div class="d-flex card-body cart-body justify-content-end align-items-center">
                            <p class="price"><?= "\$" . sprintf("%.2f", $price) . " CAD" ?></p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="col-sm-3">
            <p>Subtotal: <b><?= "\$" . sprintf("%.2f", $subtotal) . " CAD" ?></b></p>
            <?php 
                $shipping = $subtotal > 40.00 ? 0.00 : 5.00;
                $tax = ($subtotal + $shipping)*0.13;
                $total = $subtotal + $shipping + $tax;
                ?>
            <p>Shipping: <b><?= "\$" . sprintf("%.2f", $shipping) . " CAD" ?></b></p>
            <p>HST: <b><?= "\$" . sprintf("%.2f", $tax) . " CAD" ?></b></p>
            <p>Total: <b><?= "\$" . sprintf("%.2f", $total) . " CAD" ?></b></p>
        </div>
    </div>
    <h3>Thank you for shopping with us!</h3>
    <?php 
    unset($_SESSION['cart']);
    $sql = "INSERT INTO Orders (email, purchase_date, total) VALUES ('".$_SESSION['user']['email']."', DATE('".date("Y-m-d")."'), '$total')";
    mysqli_query($conn, $sql)
    ?>
    <p>Your purchase has been registered on your account.<p>
    <?php endif; ?>
</div>