<?

namespace App\ShoppingCart\Commands;

use App\Cmd\Command;
use App\ShoppingCart\Entities\ShoppingCart;

class GetShippingCostCommand implements Command
{
    private $shoppingCart;
    private $zipCode;

    public function __construct(ShoppingCart $shoppingCart, $zipCode)
    {
        $this->shoppingCart = $shoppingCart;
        $this->zipCode = $zipCode;
    }

    public function execute()
    {
        return $this->shoppingCart->getShippingCost($this->zipCode);
    }
}
