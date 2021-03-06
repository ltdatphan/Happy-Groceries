<!DOCTYPE html>
<html>
    <!-- SAMPLE LAYOUT PAGE -->
    <!-- Copy the code in this file and paste it to another file to create a new page! -->
    <!-- Then, replace the <main> tags with the HTML code that you want the page to display. -->
    <head>
        <!-- Define your variables here (Only title should be changed! The path variables should stay the same. Feel free to create new variables if needed). -->
        <?php
        $assetPath = "assets";
        $templatePath = "../templates";
        $title = "Hello Groceries";
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
        <!--Replace the <main> tag below with your own content that you want for the page!-->
        <main>
            <?php include "$templatePath/exampleContent.php"?>
        </main>
        <!--/Page content-->

        <!--Footer-->
        <?php include "$templatePath/footer.php"?>
        <!--/Footer-->
    
    </body>
</html>