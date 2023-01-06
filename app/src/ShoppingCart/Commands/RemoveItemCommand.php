<?

namespace App\ShoppingCart\Commands;

use App\Cmd\Command;
use App\ShoppingCart\Entities\Item;
use App\ShoppingCart\Entities\ShoppingCart;

class RemoveItemCommand extends Command
{
    private $shoppingCart;
    private $item;
    private $quantity;

    public function __construct(ShoppingCart $shoppingCart, Item $item, $quantity)
    {
        $this->shoppingCart = $shoppingCart;
        $this->item = $item;
        $this->quantity = $quantity;
    }

    public function execute()
    {
        $this->shoppingCart->removeItem($this->item, $this->quantity);
    }
}
