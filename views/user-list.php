<?php
require_once("../controllers/UserController.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../assets/css/stylesheets.css">
        <title>Lista de Usuários</title>
    </head>
    <body>
        <?php
        UserController::printUserList();
        ?>
    </body>
</html>