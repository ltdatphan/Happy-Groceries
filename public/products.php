<!DOCTYPE html>
<html>
<head>
    <?php
    $assetPath = "../assets";
    $templatePath = "../templates";
    $title = "Hello Groceries";
    $exampleVariable = "This is the PRODUCTS page";
    ?>
    <!-- Boostrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- External CSS-->
    <link rel="stylesheet" href="<?= $assetPath?>/css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
</head>
<body>
    <!--Navigation-->
    <?php include "$templatePath/header.php"?>
    <!--/Navigation-->

    <!--Page content-->
    <div class="container">
        <h1>Products</h1>
        <?php
            $myfile = fopen("../../../mysqlLogin.txt", "r") or die("Unable to open file!");
            $username = fgets($myfile);
            $password = fgets($myfile);
            fclose($myfile);
            $conn = mysqli_connect("localhost", "cperezar", "ByRujNis", "cperezar") or die(mysql_error());

            $sql = "SELECT * FROM Products ORDER BY id DESC";
            $result = mysqli_query($conn, $sql);
            $num_results = mysqli_num_rows($result);

            if ($num_results <= 0) die("Unable to find product data!");

            echo '<div class="row">';
            while($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                $prod_name = $row["prod_name"];
                $prod_desc = $row["prod_desc"];
                $price = $row["price"];
                $category = $row["category"];
                $source = $row["source"];
                $organic = $row["organic"];
                $prod_url = $row["prod_url"];?>
                <div class="col-sm">
                    <div class="card products-card">
                        <img class="card-img-top" src="<?= $prod_url?>" alt="Product image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><?= $prod_name?></h4>
                            <p class="card-text"><?= substr($prod_desc,0,45)."..."?></p>
                            <p class="card-text"><?= "\$".sprintf("%.2f",$price)." CAD"?></p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            echo '</div>';
        ?>
    </div>
        
    <!--/Page content-->

    <!--Footer-->
    <?php include "$templatePath/footer.php"?>
    <!--/Footer-->

</body>
</html>