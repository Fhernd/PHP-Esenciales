<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    $numero = rand(1, 100);

    echo $numero;
    echo '<br>';

    if ($numero <= 50)
    {
      echo "El número generado es menor o igual a 50.";
    }
    else
    {
      echo "El número generado es mayor a 50.";
    }
    ?>
  </body>
</html>
