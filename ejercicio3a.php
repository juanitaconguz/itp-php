<?php
/*En una empresa textil se necesita el balance del pago de sus empleados 
por departamento, ya que cuenta con 2 departamentos, cada uno con 6 empleados
*/


$departamentos = require 'empleados.php';
//agrega un nuevo departamento
$departamentos['Ventas'] = [];
//no importa cuantos tenga, al final agrega otro elemento
$departamentos['Ventas'][] = 
[
   'nombre' => 'Roberto Torres',
   'sueldo' => '1000'
];

echo "\nNombre      °     Sueldo    ° Departamento   °   Iva   °    ISR   ° Total";
foreach ($departamentos as $departamento => $empleados) 
{
   echo "\n$departamento";
   $totalDepartamento = 0;
   foreach($empleados as $empleado)
   {
      $iva = $empleado['sueldo'] * .15;
      $isr = $empleado['sueldo'] * .1;
      $total = $empleado['sueldo'] -$iva - $isr;
      $totalDepartamento += $total;
      echo "\n{$empleado['nombre']}   {$empleado['sueldo']}    ";
      echo "$departamento      $iva        $isr             $total";
   }
}

?>
