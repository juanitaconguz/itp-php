<?PHP
echo "\nEstructuras de control\n";
$password = 'Letmein';
if ($password  === 'letmein')
{
   echo 'Password es correcto';
}
else
{
   echo 'intenta otra vez';
}


$color = 'red';

switch ($color){
   case 'green';
        break;
   case 'blue';
        break;
   default;
   echo $color;
}

echo "arreglo asociativo";

#arreglo asociativo
$product =[
	'name'  	=>'Ajax',
	'price' 	=>230,
	'disponible' 	=>true,
	];
//al imprimir un false imprime una cadena vacia

foreach ($product as $field => $value) 
{ 
   echo "\n$field: $value";
}


function test()
{
   $parameter1 = 'foo';
   $parameter2 = 'bar';
   if ($parameter1 === 'baz')
  {
      die('terminaste sript');
   }
   return "\n$parameter1 $parameter2";

}
//return 'Luis';	//con return hasta ahi termina la ehjecucion
echo test();
//exit(0);


//requiere sino lo encuentra termina el archivo
//include sino lo encuentra manda warning
//useo de un fichero en otro archivo

echo "\n";
$configuracion = require 'config.PHP';
print_r($configuracion);

?>
