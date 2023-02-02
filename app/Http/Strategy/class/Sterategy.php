<?php
/**
 * Sterategy.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from assignment
 * @version 1.0.0
 * @date 2023/02/02 18:13
 */


namespace App\Http\Strategy\class;

class Sterategy
{
    public  $bank = Mellat::class;

    /**
     * @param $bank
     */
    public function __construct($bank)
    {
        $this->bank = $bank;
    }

    /**
     * @return int
     */
    public function getWallet(): int
    {
        return $this->bank->getWallet();
    }
}
