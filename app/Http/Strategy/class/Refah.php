<?php
/**
 * Refah.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from assignment
 * @version 1.0.0
 * @date 2023/02/02 17:41
 */


namespace App\Http\Strategy\class;

class Refah implements WalletInterface
{

    public function getWallet(): int
    {
        return 5000;
    }
}
