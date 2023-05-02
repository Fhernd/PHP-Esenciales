<html>

<head>
  <title>Captura de datos del form</title>
</head>

<body>

  <?php
  $edad = intval($_POST['edad']);
  if ($edad >= 18) {
    echo "Usted es mayor de edad.";
  } else {
    echo "Usted es menor de edad.";
  }
  ?>

</body>

</html>
