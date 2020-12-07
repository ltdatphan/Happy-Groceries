<div class="container custom-page">
    <?php
        /* Category gotten from the query string */
        $cat_param = $_GET['category'] ?? '';

        /* Used to generate the page header */
        $cat_name = [
            'produce' => 'Produce',
            'meats' => 'Meats',
            'dairy' => 'Dairy',
            'beverages' => 'Beverages',
            'bakery' => 'Bakery',
            '' => 'All Products'
        ];

        /* Generate page header */
        echo "<h1 class='title-header'>{$cat_name[$cat_param]}</h1>"; 

        /*Get the search query*/
        if (isset($_GET['item']))$search_item = $_GET['item'];
        else $search_item = "";

        /* If user searched for an item, display search query here */
        if ($search_item != "") echo "<h4>Showing results for: <em>\"".$search_item."\"</em></h4><br>";

        /* Get the products */
        $result = mysqli_query($conn, $sql);
        $num_results = mysqli_num_rows($result);

        if ($num_results <= 0) die("Unable to find product data!");

        /* Display the products */
        echo '<div class="row">';
        $items_found = 0;
        while($row = mysqli_fetch_assoc($result)) {
            /* Get all product attributes */
            $category = $row["category"];
            if ($cat_param != "" && $category != $cat_param) continue;
            $prod_name = $row["prod_name"];
            $string_to_search = $prod_name.$category.$row["tags"];
            if ($search_item != "" && (!is_numeric(stripos($string_to_search, $search_item)))) continue;
            $items_found++;
            $id = $row["id"];
            $prod_desc = $row["prod_desc"];
            $price = $row["price"];
            $source = $row["source"];
            $organic = $row["organic"];
            $prod_url = $row["prod_url"];?>
            <!-- Generate product card -->
            <div class="col-sm d-flex justify-content-center">
                <div class="card d-flex products-card justify-content-center shadow p-3 mb-5 rounded">
                    <a href="?page=item&id=<?= $id?>"><img class="card-img-top" src="<?= $prod_url?>" alt="Product image" style="width:100%"></a>
                    <div class="card-body">
                        <!-- Card body (name, description, price) -->
                        <a href="?page=item&id=<?= $id?>" class="card-text"><h4 class="card-title"><?= $prod_name?></h4></a>
                        <p class="card-text card-description"><?=$prod_desc?></p>
                        <p class="card-text"><?= "\$".sprintf("%.2f",$price)." CAD"?></p>
                        <!-- Add to cart button -->
                        <form action="?page=products<?=isset($_GET["category"])?'&category='.$_GET['category']:''?>&action=add" method="POST">
                            <div>
                                <input type="submit" class="btn card-btn" value="Add to cart">
                                <input type="hidden" name="id" value="<?= $id ?>">
                        <!-- Quantity -->
                        <div class="quantity-input">
                            <label>Quantity:</label>
                            <input type="number" name="quantity" size="4" value="1" min="1" max="99"/>
                        </div>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }
        if ($items_found == 0) echo "<b>No products found!</b>";
        echo '</div>';
        if ($search_item != "") : ?>
        <hr>
        <div class="recipe-container">
        </div>
        <script src="assets/scripts/recipeMain.js"></script>
        <script type="text/javascript">
            controlSearch("<?= $search_item ?>");
        </script>
        <?php endif; 
        
    ?>
</div>