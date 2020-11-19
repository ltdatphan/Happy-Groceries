<div class="container">
    <?php
        $id_param = $_GET['id'];
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            $category = $row["category"];  
            $id = $prev_id = $row["id"];
            if ($id_param != "" && $id != $id_param) continue;
            $prod_name = $row["prod_name"];
            $prod_desc = $row["prod_desc"];
            $price = $row["price"];
            $prod_url = $row["prod_url"];?>
            <div class="container">
                <h1 class="title-header">Product Details</h1>
                <div class="row" style="padding-top:15px;padding-bottom:60px">
                    <div class="col-12 col-md-6">
                        <img src="<?= $prod_url?>" alt="Product image" style="width:100%">
                    </div>
                    <div class="col-md-6">
                        <h2><?= $prod_name?></h2>
                        <p class=""><?= substr($prod_desc,0,500)?></p>
                        <p class=""><?= "\$".sprintf("%.2f",$price)." CAD"?></p>
                        <a href="#" class="btn card-btn">Add to cart</a>
                        <hr>
                        <h4>Similar Products</h4>
                        <?php
                            $result = mysqli_query($conn, $sql);
                            $count=1;
                            echo "<div style='display: flex'>";
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row["id"];
                                if (($row["category"] != $category) || $id == $prev_id) continue;
                                $prod_url = $row["prod_url"];?>
                                <div class="col-sm d-flex justify-content-center">
                                    <div class="card d-flex products-card card-small justify-content-center">
                                        <a href="?page=item&id=<?= $id?>"><img class="card-img-top" src="<?= $prod_url?>" alt="Product image" style="width:100%; border-radius: 10px;"></a>
                                        <div class="card-body" style="padding:0px 20px">
                                            <!-- <a href="?page=item&id=<?= $id?>" class="card-text"><h6 class="card-title" style="height:48px; margin: 6px 0px"><?= $prod_name?></h6></a>               -->
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if($count==3) break;
                                else $count+=1;
                            }
                            echo '</div></div>';
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php 
            //Break after showing 1 product
            break; 
        }
        $result = mysqli_query($conn, $sql);
        echo '</div>';
    ?>
</div>