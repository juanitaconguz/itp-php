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
public function __getTag()
{
       return $this ->tag;
 }

public function __getContent()
{
       return $this ->content;
 }

public function __getTag()
{
       return $this ->tag;
 }

