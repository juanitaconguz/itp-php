<?php

require 'Autoloading/autoloader.php';

use Html\HtmlElement;
use Html\HtmlRenderer;
use Autoloading\Autoloader;
use Html\HtmlMultiElement;

$autoloader = new Autoloader();
$autoloader->register();

$link = new HtmlElement('a', ['href=http://www.google.com.mx'], 'Google');
echo "\n";
$renderer = new Htmlrenderer();
echo $renderer->render($link);
echo $link->tag;
$link->content ='yahoo';
echo "\n";
echo $renderer->render($link);
//ul lista sin ordenar
$list = new HtmlMultiElement('ul');
$list->addChild(new HtmlElement('li', [], 'PHP'));
$list->addChild(new HtmlElement('li', [], 'Java'));
$list->addChild(new HtmlElement('li', [], 'C#'));
$list->addChild(new HtmlElement('li', [], 'Scala'));

?>


