<?

namespace App\ShoppingCart\Entities;

class ShoppingCart implements ShoppingCart

{
    protected $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function addItem($item, $quantity)
    {
        $this->items[$item->getName()] = [
            'item' => $item,
            'quantity' => $quantity,
        ];
    }

    public function removeItem($item, $quantity)
    {
        if (!isset($this->items[$item->getName()])) return;

        $this->items[$item->getName()]['quantity'] -= $quantity;

        if ($this->items[$item->getName()]['quantity'] <= 0) unset($this->items[$item->getName()]);
    }

    public function getTotal()
    {
        $total = 0;

        foreach ($this->items as $item) $total += $item['item']->getPrice() * $item['quantity'];

        return $total;
    }

    public function getItemCount()
    {
        $count = 0;
        foreach ($this->items as $item) $count += $item['quantity'];

        return $count;
    }

    public function getItemList()
    {
        return $this->items;
    }

    public function clear()
    {
        $this->items = [];
    }

    public function purchase()
    {
        // ...
    }

    public function addDiscountCode($code)
    {
        // ...
    }

    public function getTaxAmount($state)
    {
        // ...
    }

    public function getShippingCost($zipCode)
    {
        // ...
    }
}
