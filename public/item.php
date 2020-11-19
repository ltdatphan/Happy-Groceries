<div class="container">
    <!-- <h1 class="title-header">TESTING PAGE</h1>
    <p>You have clicked on </p> -->
    <?php
        $id_param = $_GET['id'];
        // echo $id_param;
        $result = mysqli_query($conn, $sql);
        $common_cat;
        $curr_id;

        while($row = mysqli_fetch_assoc($result)) {
            $category = $row["category"];
            $common_cat = $category;   
            $id = $row["id"];
            $curr_id = $id;
            if ($id_param != "" && $id != $id_param) continue;
            $prod_name = $row["prod_name"];
            $prod_desc = $row["prod_desc"];
            $price = $row["price"];
            $source = $row["source"];
            $organic = $row["organic"];
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
                        <h4>Similar Products<h4>
                        <?php
                            $result = mysqli_query($conn, $sql);
                            $count=0;
                            while($row = mysqli_fetch_assoc($result)){
                                $count+=1;
                                $category = $row["category"];
                                $id = $row["id"];
                                if (($common_cat != "" && $category != $common_cat) || $id == $curr_id) continue;
                                $prod_name = $row["prod_name"];
                                $prod_url = $row["prod_url"];?>
                                <div class="col-sm d-flex justify-content-center">
                                    <div class="card d-flex products-card card-small justify-content-center">
                                        <a href="?page=item&id=<?= $id?>"><img class="card-img-top" src="<?= $prod_url?>" alt="Product image" style="width:100%"></a>
                                        <div class="card-body" style="padding:0px 20px">
                                            <a href="?page=item&id=<?= $id?>" class="card-text"><h5 class="card-title" style="height:48px; margin: 6px 0px"><?= $prod_name?></h5></a>              
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if($count==3) break;
                            }
                            echo '</div>';
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