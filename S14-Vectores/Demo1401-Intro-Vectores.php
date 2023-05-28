<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $nombres[] = "juan";
  $nombres[] = "pedro";
  $nombres[] = "ana";
  // Iteración usando índices:
  for ($f = 0; $f < count($nombres); $f++) {
    echo $nombres[$f];
    echo "<br>";
  }
  ?>

</body>

</html>