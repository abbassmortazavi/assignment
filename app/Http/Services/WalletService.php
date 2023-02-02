<?php
/**
 * WalletService.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from assignment
 * @version 1.0.0
 * @date 2023/02/02 18:51
 */


namespace App\Http\Services;

use App\Http\Strategy\class\Mellat;
use App\Http\Strategy\class\Refah;
use App\Http\Strategy\class\Saderat;
use App\Http\Strategy\class\Sterategy;

class WalletService
{
    /**
     * @param Refah $refah
     * @param Mellat $mellat
     * @param Saderat $saderat
     */
    public function __construct(protected Refah $refah, protected Mellat $mellat, protected Saderat $saderat)
    {

    }

    /**
     * @return int
     */
    public function getSumWalletAllBankForUser(): int
    {
        $mellat = new Sterategy($this->mellat);
        $refah = new Sterategy($this->refah);
        $saderat = new Sterategy($this->saderat);
        return $mellat->getWallet() + $refah->getWallet() + $saderat->getWallet();
    }

    /**
     * @param $bank
     * @return int|mixed|string
     */
    public function getUserWalletBank($bank): mixed
    {
        return match ($bank) {
            "Mellat" => $this->_getWalletMellat(),
            "Refah" => $this->_getWalletRefah(),
            "Saderat" => $this->_getWalletSaderat(),
            default => "undefined"
        };
    }

    /**
     * @return int
     */
    private function _getWalletMellat(): int
    {
        $mellat = new Sterategy($this->mellat);
        return $mellat->getWallet();
    }

    /**
     * @return int
     */
    private function _getWalletRefah(): int
    {
        $refah = new Sterategy($this->refah);
        return $refah->getWallet();
    }

    /**
     * @return mixed
     */
    private function _getWalletSaderat(): mixed
    {
        $saderat = new Sterategy($this->saderat);
        return $saderat->getWallet();
    }
}
