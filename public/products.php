<!DOCTYPE html>
<html>
    <head>
        <!-- Boostrap CDN-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
        <!-- External CSS-->
        <link rel="stylesheet" href="../assets/css/style.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Navigation-->
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark custom-nav">
            <div class="container">
                <div class="grid" style="width: 100%;">
                    <div class="row">
                        <a class="navbar-brand" href="#">
                            <img id="logo" src="../assets/img/flat-logo.png">
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
                            <img src="../assets/ico/search.png">
                        </button>
                        <button class="custom-btn ml-auto mr-auto">
                            <img src="../assets/ico/shopping-cart.png">
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
        <!--/Navigation-->

        <!--Page content-->
        <div class="container">
            <h1>Our Products</h1>
            <?php
            echo "hello"
            ?>
        </div>
        <!--/Page content-->

        <!--Footer-->
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
                        <h2>Contact us</h2>
                        <div class="icon-row">
                            <img class="custom-icon" src="../assets/ico/phone.png">
                            <span>123-456-7894</span>
                        </div>
                        <br>
                        <div class="icon-row">
                            <img class="custom-icon" src="../assets/ico/email.png">
                            <span>support@happygroceries.com</span>
                        </div>

                    </div>
                    <div class="col-6 col-md-3">
                        <h3>Categories</h3>               
                        <a href="#" class="footer-links">Link 1</a>
                        <a href="#" class="footer-links">Link 2</a>
                        <a href="#" class="footer-links">Link 4</a>
                        <a href="#" class="footer-links">Link 5</a>
                        <a href="#" class="footer-links">Link 6</a>
                        <a href="#" class="footer-links">Link 7</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <h3>Quick Links</h3>
                        <a href="#" class="footer-links">Link 1</a>
                        <a href="#" class="footer-links">Link 2</a>
                        <a href="#" class="footer-links">Link 4</a>
                        <a href="#" class="footer-links">Link 5</a>
                        <a href="#" class="footer-links">Link 6</a>
                        <a href="#" class="footer-links">Link 7</a>
                    </div>
                </div>
                <hr>
                <p>
                    Copyright &copy 2020 Happy Groceries. Made by group 17 for CPS530.
                </p>
            </div>
        </footer>
        <!--/Footer-->
    
    </body>
</html>