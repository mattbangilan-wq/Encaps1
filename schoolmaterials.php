<?php
class Schoolmaterials {
   public $item; 
   public $price;

function set_details($item, $price){
    $this->item=$item;
    $this->price=$price;
    }
function get_details(){
    return $this->item. ". Price: "
    .$this->price. " pesos";
    }
}
?>