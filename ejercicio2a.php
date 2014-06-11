<?php

/*
para ael proceso de pago de un empleado se debe ingresar la cantidad ganada.
 Al ingresar la cantidad se tiene que calcular los impuestos, tales como IVA (15%) 
e ISR (10%), mostrando la cantidad de los impuestos
y el sueldo total para el empleado, DE VARIOS EMPLEADOS
*/

$empleados = require 'empleados.php';

echo "nombre     --   sueldo\n";
foreach($empleados as $empleado) {
   $empleado['sueldo'] * .10;
   $empleado['sueldo'] * .15;
   echo "{$empleado['nombre]}     --    $sueldo";
}
?>
