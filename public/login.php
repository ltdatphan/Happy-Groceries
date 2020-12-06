<div class="container custom-page">
    <h1 class="title-header">Log In</h1>
    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach ($errors as $error) : ?>
                <?= $error ?><br/>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <form action="?page=login" method="POST">
        <div class="form-group">
            <label for="email-input">Email Address</label>
            <input name="email" type="email" class="form-control" id="email-input" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="password-input">Password</label>
            <input name="password" type="password" class="form-control" id="password-input" placeholder="Enter password" required>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="remember-checkbox">
            <label name="remember" class="form-check-label" for="remember-checkbox">
                Remember Me
            </label>
        </div>
        <div class="form-group">
            <button name="login_user" type="submit" class="btn card-btn btn-margin">Log in</button>
        </div>
    </form>
</div>