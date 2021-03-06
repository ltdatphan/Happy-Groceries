<?php
$user_results = mysqli_query($conn, "SELECT * FROM Users WHERE email='{$_SESSION['user']['email']}'");
$user = mysqli_fetch_assoc($user_results);

$order_results = mysqli_query($conn, "SELECT * FROM Orders WHERE email='{$_SESSION['user']['email']}'");
?>
<div class="container custom-page" style="min-height: 0px;">
    <div class="row">
        <div class="col-5">
            <h2>Account Info</h2>
            <div class="row">
                <div class="col-4"><b>First Name:</b></div>
                <div class="col"><?= "{$_SESSION['user']['fname']}" ?></div>
            </div>
            <div class="row">
                <div class="col-4"><b>Last Name:</b></div>
                <div class="col"><?= "{$_SESSION['user']['lname']}" ?></div>
            </div>
            <div class="row">
                <div class="col-4"><b>E-mail:</b></div>
                <div class="col"><?= $_SESSION['user']['email'] ?></div>
            </div>
        </div>
        <div class="col">
            <h2>Order History</h2>
            <?php if (mysqli_num_rows($order_results) === 0) : ?>
                <b>You haven't made any orders yet!</b>
            <?php else : ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Purchase Date (UTC)</th>
                            <th scope="col" style="text-align: right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($order_results)) : ?>
                            <tr>
                                <th scope="row"><?= $row['id'] ?></th>
                                <td><?= $row['purchase_date'] ?></td>
                                <td style="text-align: right;"><?= "\$" . sprintf("%.2f", $row['total']) . " CAD" ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
    <br>
</div>