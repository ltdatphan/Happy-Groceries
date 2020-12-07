<!--First banner-->
<div class=banner-img>
    <div class="container">
        <div class="banner-text">
            <h2>Welcome to</h2>
            <h1>Happy Groceries</h1>
            <br>
            <h4>Get fresh groceries delivered to </h4>
            <h4>your doorstep today!</h4>
            <br>
            <a href="?page=products" class="btn btn-light banner-btn" >Shop now</a>
        </div>
    </div>
</div>

<!--Second banner-->
<div class=banner-img2>
    <div class="container">
        <div class="banner-text">
        <?php if (empty($_SESSION['user'])) : ?>
            <h1>New around here?</h1>
            <h4>Make an account and start</h4>
            <h4>shopping right away!</h4>
            <br>
            <a href="?page=signup" class="btn btn-light banner-btn" >Sign up</a> 
        <?php else : ?>
            <h1>Hello <?= $_SESSION['user']['fname']?>,</h1>
            <h4>View your account details and previous</h4>
            <h4>orders in your account page below.</h4>
            <br>
            <a href="?page=account" class="btn btn-light banner-btn" >View Account</a> 
        <?php endif;?>
        </div>
    </div>
</div>