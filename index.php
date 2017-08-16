<!DOCTYPE HTML>
<?php
  $page_title = "Nothing important";

  function sum($n1, $n2)
  {
      $finalsum = $n1;
      for($i = 0; $i < $n2; $i++)
      {
          $finalsum++;
      }
      return $finalsum;
  }

  function multiplication($n1, $n2)
  {
      $product = 0;
      for($i = 0; $i < $n2; $i++)
      {
          for($j = 0; $j < $n1; $j++)
          {
              $product++;
          }
      }

      return $product;
  }

  function nada() {}
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

    <div class="margin-box">
        <h3> Produto de Duas Variáveis </h3>
        <?php
            $var3 = 5;
            $var4 = 30;
            echo multiplication($var3, $var4);
        ?>
    </div>
    </body>
</html>
