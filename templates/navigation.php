<nav class="navbar navbar-expand-lg sticky-top navbar-dark custom-nav">
    <div class="container">
        <div class="grid" style="width: 100%;">
            <div class="row">
                <!-- Page Logo and Home button -->
                <a class="navbar-brand" href="?page=home">
                    <img id="logo" src="<?= $assetPath?>/img/flat-logo.png">
                </a>
                <!-- Bootstrap toggle to open menu in mobile view-->
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarItems" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links to general pages-->
                <div id="navbarItems" class="collapse navbar-collapse">
                    <div class="navbar-nav ml-auto">
                        <a href="?page=about" class="nav-item nav-link">About us</a>
                        <a href="?page=contact" class="nav-item nav-link">Contact</a>
                        <?php if (empty($_SESSION['user'])): ?>
                            <a href="?page=signup" class="nav-item nav-link">Sign up</a>
                            <a href="?page=login" class="nav-item nav-link">Log in</a>
                        <?php else: ?>
                            <a href="?page=account" class="nav-item nav-link"><i class="fa fa-user"></i> <?= "{$_SESSION['user']['first_name']} {$_SESSION['user']['last_name']}" ?></a>
                            <a href="?page=logout" class="nav-item nav-link">Log out</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                <!-- Search bar-->
                <form style="width: 70%;" id="search-form" autocomplete="off" method="get">
                    <input type='hidden' name='page' value='products'>
                    <input id="search-bar" type="text" name="item" value="Search..." onfocus="focused()" onblur="unfocused()" style="color:rgb(125,125,125)">
                </form>
                <div></div>
                <!-- Search and cart buttons-->
                <button class="custom-btn" onclick="search()">
                    <i class="fa fa-search fa-2x"></i>
                </button>
                <a class="custom-btn ml-auto mr-auto d-flex align-items-center" href='?page=cart'>
                    <i class="fa fa-shopping-cart fa-2x"><span id="cart-badge" class="badge badge-pill cart-badge badge-dark"><?= count($_SESSION['cart'] ?? []) ?></span></i>
                </a>
            </div>
            <div>
                <!-- Toggle for categories-->
                <button class="navbar-toggler category-toggle" type="button" data-toggle="collapse" data-target="#categoryItems" aria-controls="categoryItems" aria-expanded="false" aria-label="Toggle navigation">
                    <h5 style="color: black;">Categories</h5>
                </button>
                <!-- Buttons to view different categories -->
                <div id="categoryItems" class="collapse navbar-collapse">
                    <div class="navbar-nav" style="width:100%">
                        <a id="firstCategoryItem" href="?page=products" class="nav-item nav-link <?=isset($_GET['page'])&&$_GET['page']=='products'&&!isset($_GET['category'])?'active-link':''?>">All Products</a>
                        <a href="?page=products&category=produce" class="nav-item nav-link <?=isset($_GET['category'])&&$_GET['category']=='produce'?'active-link':''?>">Produce</a>
                        <a href="?page=products&category=meats" class="nav-item nav-link <?=isset($_GET['category'])&&$_GET['category']=='meats'?'active-link':''?>">Meats</a>
                        <a href="?page=products&category=dairy" class="nav-item nav-link <?=isset($_GET['category'])&&$_GET['category']=='dairy'?'active-link':''?>">Dairy</a>
                        <a href="?page=products&category=beverages" class="nav-item nav-link <?=isset($_GET['category'])&&$_GET['category']=='beverages'?'active-link':''?>">Beverages</a>
                        <a href="?page=products&category=bakery" class="nav-item nav-link <?=isset($_GET['category'])&&$_GET['category']=='bakery'?'active-link':''?>">Bakery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>