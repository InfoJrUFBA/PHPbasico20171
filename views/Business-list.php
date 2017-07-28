<?php
require_once("../controllers/BusinessController.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../assets/css/stylesheets.css">
        <title>Lista de Negócios</title>
    </head>
    <body>
        <?php
        BusinessController::printBusinessList();
        ?>
    </body>
</html>