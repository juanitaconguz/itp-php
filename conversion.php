<?PHP
echo "\nconvirtiendo tipos\n";
$age = 30;
$age = (string) $age;	//lo convierte a cadena
var_dump($age);		//var_dump muestra el tipo y la longuitud de la var
$age = (boolean) $age;
var_dump($age);
$age = (float) $age;
var_dump($age);
$age = (array) $age;
var_dump($age);

var_dump('10' == 10);	//devuelve true caundo son del mismo tipo
var_dump('5' . 10);
var_dump('2' + 2);
var_dump('10' === 10);
?>
