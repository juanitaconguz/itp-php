<?PHP

echo "\n 'ejercicio 1'\n";
echo "\nMaria Juana Contreras Guzman";
echo "\ncurso PHP";

/*
para ael proceso de pago de un empleado se debe ingresar la cantidad ganada.
 Al ingresar la cantidad se tiene que calcular los impuestos, tales como IVA (15%) 
e ISR (10%), mostrando la cantidad de los impuestos
y el sueldo total para el empreado
*/


#arreglo asociativo
$emple = 
[
	'name'  	=>'Elena',
	'apellidos' 	=>'Luna Luna',
	'sueldo' 	=>12000,
];
$nom = $emple['name'];
$ape = $emple['apellidos'];
$iva = 0;
$isr = 0;
$iva = $emple['sueldo'] * .1;
$isr = $emple['sueldo'] * .15;

echo "\n NOMBRE        $nom";
echo "\n APELLIDOS     $ape";

echo "\n ISR           $isr";
echo "\n IVA           $iva";

$total = 0;
$total = $emple['sueldo'] - $iva -$isr;

echo "\n\n SUELDO NETO   $total";
?>
