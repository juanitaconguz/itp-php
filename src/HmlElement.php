<?php
class HtmlElement
{
	protected $tag;
	protected $content;
	protected $attributes;
	
	public function __construct(
	$tag,
	$attributes=[],
	$content = null
	)
	{
	$this->tag = $tag;
	$this->content = $content;
	$this->attributes = $attributes;
	}
	/**
	public  function __call($name, $arguments)
	{
	if('render' === $name){
		$html=sprintf(
		'<%s  %s> %s </%s>',
		$this ->tag,
		implode ('=', $this->attributes),
		$this ->content,
		$this ->tag
		);
		return $html;
	}
	//var_dump($name);
	//var_dump($arguments);
	}
	
	public function render()
	{
	$html=sprintf(
		'<%s  %s> %s </%s>',
		$this ->tag,
		implode ('=', $this->attributes),
		$this ->content,
		$this ->tag
		);
		return $html;
	}
	
	/*public function __toString()
	{
	return $this-> render();
	}*/
	
	public function __get($property)
	{
	if ('tag'  === $property){
		return $this->tag;
		}
	}
	
	public function __set($property, $value)
	{
	if ('content' === $property){
		$this->content =$value;
		}
	}
	
	public function getTag()
	{
	return $this->tag;
	}
	
	public function getContent()
	{
	return $this->content;
	}
	
	public function getAttributes()
	{
	return $this->attributes;
	}
}

/*
$link = new HtmlElement('a', ['href=http://www.google.com.mx'], 'Google');
echo "\n";
$renderer = new HtmlRenderer();
echo $renderer->render($link);
echo "\n";
//echo $link ->render(['class' => 'important-link']);
echo "\n";
echo $link->tag;
echo "\n";
$link->content ='yahoo';
echo "\n";
echo $link;
*/
//<a href="http://www.google.com.mx"> Google </a>
//<span> nombre </span>
//<br>
?>