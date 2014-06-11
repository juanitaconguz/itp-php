<?php
// con funciones

$empleados = require 'empleados.php';


//nominafun.php


//FUNCIONES ANONIMAS

$mayor = function($a, $b) 
{
   if ($a > $b)
   {
      return $a;
   }
   else
   {
      return $b;
   }
};     //es necesario el ;

echo $mayor(12, 7);
echo "\n";
$mayor = 'HOla';
echo $mayor;
echo "\n";
//ordena descendentemente

$numbers = [1,3,4,11,100,5];

usort($numbers, $mayor);
print_r($numbers);

usort($numbers, function($a, $b) {
   return $a - $b;
});
print_r($numbers);

usort($numbers, function($a, $b) {
   return $b - $a;
});
print_r($numbers);

$ordering = 'ascedent';
usort($numbers, function($a, $b) use ($ordering) 
{
   if ('ascedent' === $ordering)
   {
      return $a - $b;
   }
   return $b - $a;   
});

print_r($numbers);

$ordering = 'descedent';
usort($numbers, function($a, $b) use ($ordering) 
{
   if ('ascedent' === $ordering)
   {
      return $a - $b;
   }
   return $b - $a;   
});

print_r($numbers);


//FUNCIONES

function first()
{
   echo 'first';
}

function second()
{
   echo 'second';
}

echo "\n";
$function = 'second';
$function();
echo "\n";

// puedo tener variables don nombre de palabra reservada, lo que la diferencia es el $

//suma todos los valores con que se llame
function suma()
{
      echo "\n FUNCION QUE SUMA N VALORES \n";
   $suma = 0;
   foreach(func_get_Args() as $number)
   {
   if(!is_numeric($number)) continue;
   $suma += $number;
   }
   return $suma;

}

//la ejecuto
echo "\n".suma(2, 5, 6, 7, 8, 10);
echo "\n".suma(1, 2, 3, 4, 100);
//probando con valores no numericos
echo "\n".suma(2, 2, true, 2, 2, 'a', 2);

function countList() //me falta
{

}
//llamado de funciones

nomina_foreach($empleados);
nomina_for($empleados);
nomina_while($empleados);


function nomina_while($empleados) 
{
   echo "\n FUNCION CON WHILE \n";
   echo "Nombre               | Sueldo\n";
   $i = 0;
   while ($i < count ($empleados)) { 
        $sueldo = $empleados[$i]['sueldo']
           - $empleados[$i]['sueldo'] * .15
           - $empleados[$i]['sueldo'] * .1;
        echo "{$empleados[$i]['nombre']}     | $sueldo\n"; 
       $i++;       
  }
}


function nomina_for($empleados)
{
   echo "\n FUNCION CON FOR \n";
   echo "Nombre               | Sueldo\n";
   for ($i = 0; $i < count($empleados); $i++) {   //el parametro debe ser el mismo
        $sueldo = $empleados[$i]['sueldo']
        - $empleados[$i]['sueldo'] * .15
        - $empleados[$i]['sueldo'] * .1;

        echo "{$empleados[$i]['nombre']}     | $sueldo\n";
    }
}



function nomina_foreach($empleados) //el parametro debe ser el mismo
{
   echo "\n FUNCION CON FOREACH \n";
   echo "Nombre               | Sueldo\n";
   foreach ($empleados as $empleado) {   //el parametro debe ser el mismo
        $sueldo = $empleado['sueldo']
        - $empleado['sueldo'] * .15
        - $empleado['sueldo'] * .1;

        echo "{$empleado['nombre']}     | $sueldo\n";
  }
}
