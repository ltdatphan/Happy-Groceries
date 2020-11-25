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
                        <a href="#" class="nav-item nav-link">About us</a>
                        <a href="#" class="nav-item nav-link">Contact</a>
                        <a href="#" class="nav-item nav-link">Support</a>
                        <a href="#" class="nav-item nav-link">Sign up</a>
                        <a href="#" class="nav-item nav-link">Log in</a>
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                <form style="width: 70%;" id="search-form" autocomplete="off" method="get">
                    <input type='hidden' name='page' value='products'>
                    <input id="search-bar" type="text" name="item" value="Search..." onfocus="focused()" onblur="unfocused()" style="color:rgb(125,125,125)">
                </form>
                <div></div>
                <button class="custom-btn" onclick="search()">
                    <i class="fa fa-search fa-2x"></i>
                </button>
                <a class="custom-btn ml-auto mr-auto" href='?page=cart'>
                    <i class="fa fa-shopping-cart fa-2x"><span id="cart-badge" class="badge badge-pill badge-dark" style="margin-left:5px;">0</span></i>
                </a>
            </div>
            <div>
                <button class="navbar-toggler category-toggle" type="button" data-toggle="collapse" data-target="#categoryItems" aria-controls="categoryItems" aria-expanded="false" aria-label="Toggle navigation">
                    <h5 style="color: black;">Categories</h5>
                </button>
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