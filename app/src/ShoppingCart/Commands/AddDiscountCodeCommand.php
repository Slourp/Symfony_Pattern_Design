<?

namespace App\ShoppingCart\Commands;

use App\Cmd\Command;
use App\ShoppingCart\Entities\ShoppingCart;

class AddDiscountCodeCommand implements Command
{
    private $shoppingCart;
    private $code;

    public function __construct(ShoppingCart $shoppingCart, $code)
    {
        $this->shoppingCart = $shoppingCart;
        $this->code = $code;
    }

    public function execute()
    {
        $this->shoppingCart->addDiscountCode($this->code);
    }
}
