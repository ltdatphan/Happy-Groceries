<?php
$user_results = mysqli_query($conn, "SELECT * FROM Users WHERE email='{$_SESSION['user']['email']}'");
$user = mysqli_fetch_assoc($user_results);


$order_results = mysqli_query($conn, "SELECT * FROM Orders WHERE email='{$_SESSION['user']['email']}'");
?>
<div class="container custom-page">
    <div class="row">
        <div class="col-5">
            <h2>Account Info</h2>
            <div class="row">
                <div class="col-4"><b>Full Name:</b></div>
                <div class="col"><?= "{$_SESSION['user']['fname']} {$_SESSION['user']['lname']}" ?></div>
            </div>
            <div class="row">
                <div class="col-4"><b>E-mail:</b></div>
                <div class="col"><?= $_SESSION['user']['email'] ?></div>
            </div>
        </div>
        <div class="col">
            <h2>Order History</h2>
            <?php if (mysqli_num_rows($order_results) === 0) : ?>
                <b>No orders exist</b>
            <?php else : ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Order #</th>
                            <th scope="col">Purchase Date</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($order_results)) : ?>
                            <tr>
                                <th scope="row"><?= $row['id'] ?></th>
                                <td><?= $row['purchase_date'] ?></td>
                                <td style="text-align: right;">$<?= $row['total'] ?> CAD</td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
    <br>
</div>