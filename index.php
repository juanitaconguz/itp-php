<?php

require 'Html/HmlElement.php';
require 'Html/Htmlrenderer.php';

use Html\HtmlElement;
use Html\HtmlRenderer;

$link = new HtmlElement('a', ['href=http://www.google.com.mx'], 'Google');
echo "\n";
$renderer = new Htmlrenderer();
echo $renderer->render($link);
echo "\n";
echo $link->tag;
echo "\n";
$link->content ='yahoo';
echo "\n";
echo $renderer->render($link);

?>