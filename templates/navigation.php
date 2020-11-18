<nav class="navbar navbar-expand-lg sticky-top navbar-dark custom-nav">
    <div class="container">
        <div class="grid" style="width: 100%;">
            <div class="row">
                <a class="navbar-brand" href="?page=home">
                    <img id="logo" src="<?= $assetPath?>/img/flat-logo.png">
                </a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarItems" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarItems" class="collapse navbar-collapse">
                    <div class="navbar-nav ml-auto">
                        <a href="#" class="nav-item, nav-link">About us</a>
                        <a href="#" class="nav-item, nav-link">Contact</a>
                        <a href="#" class="nav-item, nav-link">Support</a>
                        <a href="#" class="nav-item, nav-link">Sign up</a>
                        <a href="#" class="nav-item, nav-link">Log in</a>
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                <form style="width: 70%;" id="search-form" method="post">
                    <input id="search-bar" type="text" name="query">
                </form>
                <div></div>
                <button class="custom-btn" type="submit" form="search-form">
                    <i class="fa fa-search fa-2x"></i>
                </button>
                <button class="custom-btn ml-auto mr-auto">
                    <i class="fa fa-shopping-cart fa-2x"></i>
                </button>
            </div>
            <div>
                <button class="navbar-toggler category-toggle" type="button" data-toggle="collapse" data-target="#categoryItems" aria-controls="categoryItems" aria-expanded="false" aria-label="Toggle navigation">
                    <h5 style="color: black;">Categories</h5>
                </button>
                <div id="categoryItems" class="collapse navbar-collapse">
                    <div class="navbar-nav">
                        <a href="?page=products" class="nav-item, nav-link">All Products</a>
                        <a href="?page=products&category=produce" class="nav-item, nav-link">Produce</a>
                        <a href="?page=products&category=meats" class="nav-item, nav-link">Meats</a>
                        <a href="?page=products&category=dairy" class="nav-item, nav-link">Dairy</a>
                        <a href="?page=products&category=beverages" class="nav-item, nav-link">Beverages</a>
                        <a href="?page=products&category=bakery" class="nav-item, nav-link">Bakery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>