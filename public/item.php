<div class="container">
    <h1 class="title-header">TESTING PAGE</h1>
    <p>You have clicked on </p>
    <?php
        $id = $_GET['id'];
        echo $id;
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            if ($row['id'] == $id) {
                echo $row['prod_name'];
            }
        }?>
</div>