<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  if ($_REQUEST['operacion'] == "sumar") {
    $suma = $_REQUEST['numero1'] + $_REQUEST['numero2'];
    echo "La suma es:" . $suma;
  } elseif ($_REQUEST['operacion'] == "resta") {
      $resta = $_REQUEST['numero1'] - $_REQUEST['numero2'];
      echo "La resta es:" . $resta;
  }

  ?>

</body>

</html>
