<?php
# archivo de trabajo de Maria Juana Contreras GUzmán

$message = 'Hola Mundo'; 

/*
9 de junio de 2014
comentario
de 
varias 
lineas
todo lo de este archivo es global
*/
# el punto y coma final se puede omitir siempre que haya etiqueta de cierre

echo $message;	//comentario en linea

define ('PUBLISHER','Springer');

echo PUBLISHER;	//la llamo tal cual se definio: todas mayusculas

$pi = 0.0314E2;

echo $pi;

echo "$message\n";	//no funciona con comillas simples

echo '\n$pi';

echo "\n$pi";

#definiendo arreglos

$people = ['Luis','Mistral', 'Noe', 1234, false,[2], true];  // [2] es otro arreglo

print_r($people);

/*
para versiones anterior a 5.4 debe de verse un arreglo
print_r($old);
*/

#arreglo asociativo
$product = 
[
	'name'  	=>'Ajax',
	'price' 	=>230,
	'disponible' 	=>true,
	];

print_r($product);
#para imprimir el precio del producto (las expresiones van entre llaves

echo "\nEste es el precio del producto {$product['price']}\n";
echo $product['name'];

//variables de variables (variable con un nombre variable)

$foo = "bar";
$$foo = "baz";
echo "\n\n$foo";
echo "\n$bar";
?>


