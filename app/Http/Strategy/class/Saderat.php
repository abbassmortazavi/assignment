<?php
/**
 * Saderat.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from assignment
 * @version 1.0.0
 * @date 2023/02/02 17:40
 */


namespace App\Http\Strategy\class;

class Saderat implements WalletInterface
{
    public function getWallet(): int
    {
        return 1000;
    }
}
