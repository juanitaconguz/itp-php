<?PHP

function update_counter()
{
   global $counter;
   $counter++;  //php no obliga a declarar variables y no corre porque todavia no existe
}
$counter = 10;
update_counter();
echo $counter;
echo "\n\n";


function update_counter1()
{
   static $counter = 0;
   $counter++;  //php no obliga a declarar variables y la inicializa con cero
   echo "\nstatic:   $counter";
}
$counter = 10;
update_counter1();
update_counter1();
echo "\n$counter";


function greet($name)
{
   echo "\nHello, {$name}\n";
}

//la mandamos a llamar
greet('Juanita');

$age = 30;
$age = (string) $age;	//lo convierte a cadena
var_dump($age);		//var_dump muestra el tipo y la longuitud de la var
$age = (boolean) $age;
var_dump($age);
$age = (float) $age;
var_dump($age);
$age = (array) $age;
var_dump($age);
?>
