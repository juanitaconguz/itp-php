<?php

/*
para ael proceso de pago de un empleado se debe ingresar la cantidad ganada.
 Al ingresar la cantidad se tiene que calcular los impuestos, tales como IVA (15%) 
e ISR (10%), mostrando la cantidad de los impuestos
y el sueldo total para el empleado, DE VARIOS EMPLEADOS
*/

$emple = [['Elena','Luna Luna', 12000.0],
	  ['Juan', 'Torres Kori', 10000.0],
	  ['Karla','Fuentes Lin', 15000.0],
         ];

$iva = 0.0;
$isr = 0.0;
$total = 0.0;

for($i=0; $i<3; $i++)
{  $iva = $emple[$i][2]*.10;
   $isr = $emple[$i][2]*.15;
   $total = $emple[$i][2] + $iva + $isr;
   echo "\n{$emple[$i][0]}         {$emple[$i][1]}         {$emple[$i][2]}   $iva   $isr   $total";

}

//print_r($emple);
?>


/*
$empleados = require 'empleados.php';

echo 'nombre        sueldo';
foreach($empleados as $empleados) {
   $empleados['sueldo'] * .10;
   $empleados['sueldo'] * .15;

   echo "{$empleado['nombre]         $sueldo";
}
*/