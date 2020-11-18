<div class="container">
    <h1 class="title-header">Our Products</h1>
    <?php
        /* Category gotten from the query string */
        $cat_param = $_GET['category'];
        
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
                        <p class="card-text"><?= substr($prod_desc,0,45)."..."?></p>
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