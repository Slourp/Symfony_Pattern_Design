<?

namespace App\ShoppingCart\Entities;

class ShoppingCart
{
    private $items = [];

    public function addItem(Item $item, int $quantity)
    {
        !isset($this->items[$item->getName()]) && $this->items[$item->getName()] = [
            'item' => $item,
            'quantity' => 0,
        ];

        $this->items[$item->getName()]['quantity'] += $quantity;
    }

    public function removeItem(Item $item, int $quantity)
    {
        if (!isset($this->items[$item->getName()])) return;

        $this->items[$item->getName()]['quantity'] -= $quantity;

        if ($this->items[$item->getName()]['quantity'] <= 0) unset($this->items[$item->getName()]);
    }

    public function getTotalCost(): float
    {
        $totalCost = 0.0;
        foreach ($this->items as $item) $totalCost += $item['item']->getCost() * $item['quantity'];

        return $totalCost;
    }

    public function getItemCount(): int
    {
        $itemCount = 0;
        foreach ($this->items as $item) $itemCount += $item['quantity'];
        return $itemCount;
    }

    public function clear()
    {
        $this->items = [];
    }

    public function isEmpty(): bool
    {
        return empty($this->items);
    }

    public function applyDiscount(float $discount): float
    {
        $totalCost = $this->getTotalCost();
        return $totalCost * (1 - $discount);
    }

    public function getItems(): array
    {
        return array_values($this->items);
    }
}
