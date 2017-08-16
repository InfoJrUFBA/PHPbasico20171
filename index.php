<!DOCTYPE HTML>
<?php
  $page_title = "Nothing important";

  function sum($n1, $n2)
  {
      $soma = $n1;
      for($i = 0; $i < $n2; $i++)
      {
          $soma++;
      }
      return $soma;
  }
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title><?=$page_title?></title>
    </head>
    <body>
        <!-- Soma -->
    <div class="margin-box">
        <h3> Soma de Duas Variáveis </h3>
        <?php
            $var1 = 10;
            $var2 = 6;
            echo sum($var1, $var2);
        ?>
    </div>
    </body>
</html>
