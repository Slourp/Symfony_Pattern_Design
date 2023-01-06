<?

namespace App\ShoppingCart\Commands;


use App\Cmd\Command;
use App\ShoppingCart\Entities\ShoppingCart;

class GetTaxAmountCommand implements Command
{
    private $shoppingCart;
    private $state;

    public function __construct(ShoppingCart $shoppingCart, $state)
    {
        $this->shoppingCart = $shoppingCart;
        $this->state = $state;
    }

    public function execute()
    {
        return $this->shoppingCart->getTaxAmount($this->state);
    }
}
