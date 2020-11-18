<nav class="navbar navbar-expand-lg sticky-top navbar-dark custom-nav">
    <div class="container">
        <div class="grid" style="width: 100%;">
            <div class="row">
                <a class="navbar-brand" href="#">
                    <img id="logo" src="<?= $basePath?>/img/flat-logo.png">
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
                <form style="width: 70%;">
                    <input id="search-bar" type="text">
                </form>
                <div></div>
                <button class="custom-btn">
                    <img src="<?= $basePath?>/ico/search.png">
                </button>
                <button class="custom-btn ml-auto mr-auto">
                    <img src="<?= $basePath?>/ico/shopping-cart.png">
                </button>
            </div>
            <div>
                <button class="navbar-toggler category-toggle" type="button" data-toggle="collapse" data-target="#categoryItems" aria-controls="categoryItems" aria-expanded="false" aria-label="Toggle navigation">
                    <h5 style="color: black;">Categories</h5>
                </button>
                <div id="categoryItems" class="collapse navbar-collapse">
                    <div class="navbar-nav">
                        <a href="#" class="nav-item, nav-link">Apple</a>
                        <a href="#" class="nav-item, nav-link">Banana</a>
                        <a href="#" class="nav-item, nav-link">Grape</a>
                        <a href="#" class="nav-item, nav-link">Pineapple</a>
                        <a href="#" class="nav-item, nav-link">Strawberry</a>
                        <a href="#" class="nav-item, nav-link">Pizza</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</nav>