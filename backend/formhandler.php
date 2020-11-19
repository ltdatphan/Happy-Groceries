<?php
if (isset($_GET['item']) && !isset($_GET['page'])) header( "Location: ../public/?page=products&item=".$_GET['item'] );
?>