<div class="container custom-page">
    <?php
        /* Read ID from query string and retrieve product info from mySQL server*/
        $id_param = $_GET['id'];
        $sql = "SELECT * FROM Products WHERE id=$id_param";
        $result = mysqli_query($conn, $sql);
        /* Convert into array and access each field */
        $row = mysqli_fetch_assoc($result);
        $category = $row["category"];  
        $prod_name = $row["prod_name"];
        $prod_desc = $row["prod_desc"];
        $price = $row["price"];
        $prod_url = $row["prod_url"];?>

        <!-- Display the info of product in HTML -->
        <div class="container">
            <h1 class="title-header">Product Details</h1>
            <div class="row" style="padding-top:15px;padding-bottom:60px">
                <div class="col-12 col-md-6">
                    <img src="<?= $prod_url?>" alt="Product image" style="width:100%">
                </div>
                <div class="col-md-6">
                    <h2><?= $prod_name?></h2>
                    <p class=""><?= $prod_desc?></p>
                    <p class=""><?= "\$".sprintf("%.2f",$price)." CAD"?></p>
                    <form action="?page=item&id=<?=$id_param?>&action=add" method="POST">
                        <div>
                            <input type="submit" class="btn card-btn" value="Add to cart">
                            <input type="hidden" name="id" value="<?= $id_param ?>">
                            <div class="quantity-input">
                                <label>Quantity:</label>
                                <input type="number" name="quantity" size="4" value="1" min="1" max="99"/>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <!-- Display the products from the same category -->
                    <h4>Similar Products</h4>
                    <?php
                        $sql = "SELECT * FROM Products WHERE category=\"$category\" AND id<>$id_param ORDER BY RAND() LIMIT 3";
                        $result = mysqli_query($conn, $sql);
                        echo "<div class='related-products'>";
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row["id"];
                            $prod_url = $row["prod_url"];?>
                            <a href="?page=item&id=<?= $id?>"><img src="<?= $prod_url?>" alt="Product image"></a>
                            <?php
                        }
                        echo '</div></div>';
                    ?>
                    </div>
                </div>
            </div>
        </div>
        
        <?php 
        $result = mysqli_query($conn, $sql);
        echo '</div>';
    ?>
</div>