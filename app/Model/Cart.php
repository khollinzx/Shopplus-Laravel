<?php

namespace App\Model;

class Cart
{
    //
    public $items = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items =  $oldCart->items;
            $this->totalQuantity =  $oldCart->totalQuantity;
            $this->totalPrice =  $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $selectedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $selectedItem = $this->items[$id];
            }
        }
        $selectedItem['qty']++;
        $selectedItem['price'] = $item->price * $selectedItem['qty'];
        $this->items[$id] = $selectedItem;
        $this->totalQuantity++;
        $this->totalPrice += $item->price;
    }
}
