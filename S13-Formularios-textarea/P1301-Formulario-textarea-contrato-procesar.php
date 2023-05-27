<?php

$ciudad = $_REQUEST['ciudad'];
$empresa = $_REQUEST['empresa'];
$apoderado = $_REQUEST['apoderado'];
$empleado = $_REQUEST['empleado'];
$domicilio = $_REQUEST['domicilio'];
$domicilioEmpleado = $_REQUEST['domicilioEmpleado'];


$contrato = "En la ciudad de $ciudad, se acuerda entre la Empresa $empresa representada por el Sr. $apoderado en su carácter de Apoderado, con domicilio en la calle $domicilio y el Sr. $empleado, futuro empleado con domicilio en $domicilioEmpleado, celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.";

echo $contrato;
