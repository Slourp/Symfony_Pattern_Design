<?

namespace App\ShoppingCart\Commands;

use App\Cmd\Command;
use App\ShoppingCart\Entities\ShoppingCart;

class ClearCommand implements Command
{
    private $shoppingCart;

    public function __construct(ShoppingCart $shoppingCart)
    {
        $this->shoppingCart = $shoppingCart;
    }

    public function execute()
    {
        $this->shoppingCart->clear();
    }
}
