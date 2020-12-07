<?php $subtotal = 0.0 ?>
<div class="container custom-page">
    <h1 class="title-header">Shopping Cart</h1>
    <!-- Check if cart is empty -->
    <?php if (empty($_SESSION['cart'])) : ?>
        <div style="text-align: center">
            <h4 style="text-align:">Your shopping cart is empty!</h4>
            <a href="?page=products" class="btn card-btn btn-margin">Shop Now</a>
        </div>
    <?php else : ?>
        <!-- Display shopping cart content -->
        <p><em>Note: Free shipping on orders over $40.00 CAD!</em></p>
        <div class="row">
            <div class="col">
                <div class="cart">
                    <!-- Fetch row from table and calculate subtotal -->
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        extract($row);
                        $quantity = $_SESSION['cart'][$id];
                        $subtotal += $price * $quantity;
                    ?>
                    <!-- Display the item -->
                    <div class="card cart d-flex products-card shadow p-3 mb-5 rounded">
                        <div class="row no-gutters">
                            <a href="?page=item&id=<?= $id ?>"><img src="<?= $prod_url ?>" alt="Product image" style="width:150px;"></a>
                            <div class="card-body cart-body">
                                <a href="?page=item&id=<?= $id ?>" class="card-text"><h5 class="card-title" style="height:auto"><?=$row["prod_name"]?></h5></a>
                                <p class="card-description"><?=$row["prod_desc"]?></p>
                            </div>
                            <!-- Change quantity -->
                            <div class="d-flex card-body cart-body justify-content-end align-items-center">
                                <form class='quantity-form' action="?page=cart&action=set" method="POST">
                                    <input name="id" type="hidden" value="<?= $id ?>">
                                    <div>
                                        <label class="quantity-label">Quantity:</label>
                                        <select class="quantity-select form-control form-control-sm" name="quantity" onchange='this.form.submit()'>
                                            <option value="0">0 (Remove)</option>
                                            <?php for ($i = 1; $i < 100; $i++) : ?>
                                                <option value="<?= $i ?>" <?= $i === $quantity ? 'selected="selected"' : ''; ?>><?= $i ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <!-- Remove item -->
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
            <!-- Display subtotal and chckout button -->
            <div class="col-sm-3">
                <p>Subtotal: <b><?= "\$" . sprintf("%.2f", $subtotal) . " CAD" ?></b></p>
                <a href="?page=checkout" class='btn card-btn'>Checkout</a>
            </div>
        </div>
    <?php endif; ?>
</div>