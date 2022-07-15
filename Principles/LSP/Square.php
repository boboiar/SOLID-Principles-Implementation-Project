<?php
/**
 * Created by PhpStorm.
 * User: boiar
 * Date: 14/07/22
 * Time: 11:32 ص
 */

namespace SOLID\LSP;


class Square extends Rectangle
{

   public function set_height($height)
   {
       $this->height = $height;
       $this->width = $height;
   }

   public function set_width($width)
   {
       $this->width = $width;
       $this->height = $width;
   }


}