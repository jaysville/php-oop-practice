<?php

class Basket 
{
    public $itemsTotal;
    public $shippingCost;
    public $discount;
    
    public function calculateSubTotal(){
       
      $subTotal= ( $this->itemsTotal + $this->shippingCost)-$this->discount;
      return $subTotal;

    }



}

$yellow = new Basket();

$yellow ->itemsTotal=45;
$yellow ->shippingCost=35;
$yellow ->discount=30;
$yellow->calculateSubTotal();

print_r($yellow->calculateSubTotal());