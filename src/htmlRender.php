<?php
class htmlRenderer
{
   public function render(HtmlElement $element)
   {
       html = sprintf(
          '<%s %s>%s</%s>',
          $element ->getTag(),
          implode('=',$this->get->getAtributes())
          $element->getContent(),
          $element->getTag()
      );
      return $html;
   }



protected function renderAtributtes(array $atributes)
{
   $htmlAttributes = '';
   foreach ($attributes as $ key => $value) 
   {
       $htmlAttributes .= "\"$key=$value\"";
   }
   return $htmlAttributes;
}

}

