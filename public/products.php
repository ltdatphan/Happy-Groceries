<div class="container">
    <?php
        /* Category gotten from the query string */
        if(isset($_GET['category'])) $cat_param = $_GET['category'];
        else $cat_param = "";

        /*Get the search query*/
        if (isset($_POST['query']))$query = $_POST['query'];
        else $query = "";

        if ($cat_param == "") echo '<h1 class="title-header">All Products</h1>';
        elseif ($cat_param == "produce") echo '<h1 class="title-header">Produce</h1>';
        elseif ($cat_param == "meats") echo '<h1 class="title-header">Meats</h1>';
        elseif ($cat_param == "dairy") echo '<h1 class="title-header">Dairy</h1>';
        elseif ($cat_param == "beverages") echo '<h1 class="title-header">Beverages</h1>';
        elseif ($cat_param == "bakery") echo '<h1 class="title-header">Bakery</h1>';


        if ($query != "") echo "<h2>Showing results for:".$query." </h2>";

        $result = mysqli_query($conn, $sql);
        $num_results = mysqli_num_rows($result);

        if ($num_results <= 0) die("Unable to find product data!");

        echo '<div class="row">';
        while($row = mysqli_fetch_assoc($result)) {
            $category = $row["category"];
            if ($cat_param != "" && $category != $cat_param) continue;
            $id = $row["id"];
            $prod_name = $row["prod_name"];
            $prod_desc = $row["prod_desc"];
            $price = $row["price"];
            $source = $row["source"];
            $organic = $row["organic"];
            $prod_url = $row["prod_url"];?>
            <div class="col-sm d-flex justify-content-center">
                <div class="card d-flex products-card justify-content-center">
                    <a href="?page=item&id=<?= $id?>"><img class="card-img-top" src="<?= $prod_url?>" alt="Product image" style="width:100%"></a>
                    <div class="card-body">
                        <a href="?page=item&id=<?= $id?>" class="card-text"><h4 class="card-title" style="height:56px;"><?= $prod_name?></h4></a>
                        <p class="card-text" style="height: 38px;"><?= substr($prod_desc,0,55)."..."?></p>
                        <p class="card-text"><?= "\$".sprintf("%.2f",$price)." CAD"?></p>
                        <a href="#" class="btn card-btn">Add to cart</a>
                    </div>
                </div>
            </div>
            <?php
        }
        echo '</div>';
    ?>
</div>