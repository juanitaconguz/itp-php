<?php
 namespace HtmlMultiElement;

   class HtmlMultiElement extends HtmlMultiElement
{
   protected $children;

   public function __construct($tag, $attributes = [], $content = null)
   {
      parent::__construct($tag, $attributes, $content);
      $this->children = [];
   }

   public function addChild(HtmlElement $element)
   {
       $this->children[] = $element;  
   }
   public function getChildren()
  {
   return $this->children;
   }
}

   

?>


