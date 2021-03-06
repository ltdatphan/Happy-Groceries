<div class="container custom-page">
    <h1 class="title-header">Sign Up</h1>
    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach ($errors as $error) : ?>
                <?= $error ?><br/>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <form action="?page=signup" method="POST">
        <div class="form-group">
            <label for="email-input">Email Address</label>
            <input name="email" type="email" class="form-control" id="email-input" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="password1-input">Password</label>
            <input name="password_1" type="password" class="form-control" id="password1-input" placeholder="Enter password" required>
        </div>
        <div class="form-group">
            <label for="password2-input">Re-enter Password</label>
            <input name="password_2" type="password" class="form-control" id="password2-input" placeholder="Re-enter password" required>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="firstname-input">First Name</label>
                <input name="fname" type="text" class="form-control" placeholder="First name" required>
            </div>
            <div class="col">
                <label for="lastname-input">Last Name</label>
                <input name="lname" type="text" class="form-control" placeholder="Last name" required>
            </div>
        </div>
        <div class="form-group">
            <button name="signup_user" type="submit" class="btn card-btn btn-margin">Submit</button>
        </div>
    </form>
</div>