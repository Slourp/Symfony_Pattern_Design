<?php

namespace App\ShoppingCart\Commands;

class CalculateTotalCostCommand implements Command
{
    private $cart;

    public function __construct(ShoppingCart $cart)
    {
        $this->cart = $cart;
    }

    public function execute()
    {
        return $this->cart->getTotalCost();
    }
}
