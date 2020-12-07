<div class="container custom-page">
    <?php
        /* Category gotten from the query string */
        $cat_param = $_GET['category'] ?? '';

        $cat_name = [
            'produce' => 'Produce',
            'meats' => 'Meats',
            'dairy' => 'Dairy',
            'beverages' => 'Beverages',
            'bakery' => 'Bakery',
            '' => 'All Products'
        ];

        echo "<h1 class='title-header'>{$cat_name[$cat_param]}</h1>"; 

        /*Get the search query*/
        if (isset($_GET['item']))$search_item = $_GET['item'];
        else $search_item = "";

        if ($search_item != "") echo "<h4>Showing results for: <em>".$search_item."</em></h4><br>";

        $result = mysqli_query($conn, $sql);
        $num_results = mysqli_num_rows($result);

        if ($num_results <= 0) die("Unable to find product data!");

        echo '<div class="row">';
        while($row = mysqli_fetch_assoc($result)) {
            $category = $row["category"];
            if ($cat_param != "" && $category != $cat_param) continue;
            $prod_name = $row["prod_name"];
            $string_to_search = $prod_name.$category.$row["tags"];
            if ($search_item != "" && (!is_numeric(stripos($string_to_search, $search_item)))) continue;
            $id = $row["id"];
            $prod_desc = $row["prod_desc"];
            $price = $row["price"];
            $source = $row["source"];
            $organic = $row["organic"];
            $prod_url = $row["prod_url"];?>
            <div class="col-sm d-flex justify-content-center">
                <div class="card d-flex products-card justify-content-center shadow p-3 mb-5 rounded">
                    <a href="?page=item&id=<?= $id?>"><img class="card-img-top" src="<?= $prod_url?>" alt="Product image" style="width:100%"></a>
                    <div class="card-body">
                        <a href="?page=item&id=<?= $id?>" class="card-text"><h4 class="card-title"><?= $prod_name?></h4></a>
                        <p class="card-text card-description"><?=$prod_desc?></p>
                        <p class="card-text"><?= "\$".sprintf("%.2f",$price)." CAD"?></p>
                        <form action="?page=products<?=isset($_GET["category"])?'&category='.$_GET['category']:''?>&action=add" method="POST">
                            <div>
                                <input type="submit" class="btn card-btn" value="Add to cart">
                                <input type="hidden" name="id" value="<?= $id ?>">
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
        echo '</div>';
    ?>
</div>