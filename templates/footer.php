<footer class="custom-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h2>About us</h2>
                <p>
                    We are a company that specializes in grocery delivery.
                    We carry the freshest groceries in town! Order today!
                </p>
                <br>
                <!-- General contact info -->
                <h2>Contact us</h2>
                <ul class="icon-list">
                    <li><i class="custom-icon fa fa-phone fa-lg" style="font-size: 30px;"></i> 123-456-7894</li>
                    <li><i class="custom-icon fa fa-envelope" style="font-size: 23px;"></i> support@happygroceries.com</li>
                </ul>

            </div>
            <!-- Links to different categories-->
            <div class="col-6 col-md-3">
                <h3>Categories</h3>
                <a href="?page=products" class="footer-links">All Products</a>
                <a href="?page=products&category=produce" class="footer-links">Produce</a>
                <a href="?page=products&category=meats" class="footer-links">Meats</a>
                <a href="?page=products&category=dairy" class="footer-links">Dairy</a>
                <a href="?page=products&category=beverages" class="footer-links">Beverages</a>
                <a href="?page=products&category=bakery" class="footer-links">Bakery</a>
            </div>
            <!-- Links to general pages-->
            <div class="col-6 col-md-3">
                <h3>Quick Links</h3>
                <a href="?page=about" class="footer-links">About Us</a>
                <a href="?page=contact" class="footer-links">Contact Us</a>
                <?php if (empty($_SESSION['user'])): ?>
                    <a href="?page=signup" class="footer-links">Sign Up</a>
                    <a href="?page=login" class="footer-links">Log In</a>
                <?php else: ?>
                    <a href="?page=account" class="footer-links">Account</a>
                    <a href="?page=logout" class="footer-links">Log Out</a>
                <?php endif; ?>
            </div>
        </div>
        <hr>
        <p>
            Copyright &copy; 2020 Happy Groceries. Made by group 17 for CPS530.
        </p>
    </div>
</footer>