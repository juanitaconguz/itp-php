<?PHP
echo 'Segunda sesión PHP, martes 10 de junio de 2014';
echo "\n";
$bigVariable = 'PHP ';
$short = &$bigVariable;	//el ooperador . pega cadenas
$bigVariable .= 'Jan';
echo "$short is $short";
echo "\nLong is $bigVariable\n ";


?>
