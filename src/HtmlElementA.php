<?php
class HtmlElement
{
    protected $tag;
    protected $content;
    protected $attributes;

//constructor. deben ser publicos. deben ir con una función. 
    public function __construct(
       $tag,
        $attributes = [],
       $content = null
    )
    {
       $this->tag = $tag;
       $this->content = $content;
       $this->attributes = $attributes;
    }

//metodo magico
    public function __call($name, $arguments)
    {
      if ('render' === $name) {
          $html = sprintf(
              '<%s %s>%s</%s>',
          $this->tag,
          implode('=', $this->attributes),
          $this->content,
          $this->tag
      );

      return $html;
      }
//      var_dump($name);
//    var_dump($arguments);
}



//no llamo el metodo pero interbnamente se se ejecuta el metodo por eso se llama magicas
//-> 
public function __get($property)
{
   if ('tag' === $property)
   {
      return $this ->tag;
   }
}

public function __set($property, $value)
{
   if ('content' === $property)
   {
      $this->content= $value;
   }
}



public function __tostring()
{
   return $this->render();
}

$link = new HtmlElement(
    'a',
    ['href' => 'http://www.google.com.mx'],
    'Google'
);
//

echo $link->render(['class' => 'important-link']);
echo "\n.$lin"k;


// render es cualquier nombre de metodo, 


//
//<a href="http://www.google.com.mx">Google</a>
//<span>Nombre</span>
//<br>

