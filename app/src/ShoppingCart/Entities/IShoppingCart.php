<?

namespace App\ShoppingCart\Entities;

interface ShoppingCart
{

    public function addItem($item, $quantity);
    public function removeItem($item, $quantity);
    public function getTotal();
    public function getItemCount();
    public function getItemList();
    public function clear();
    public function purchase();
    public function addDiscountCode($code);
    public function getTaxAmount($state);
    public function getShippingCost($zipCode);
}
