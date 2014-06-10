<?PHP
echo 'Segunda sesión PHP, martes 10 de junio de 2014';
echo "\n";
$bigVariable = 'PHP ';
$short = &$bigVariable;	//el ooperador . pega cadenas
$bigVariable .= 'Jan';
echo "$short is $short";
echo "\nLong is $bigVariable\n ";

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
greet('Juanita')

?>
