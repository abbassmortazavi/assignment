<?php
/**
 * BankController.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from assignment
 * @version 1.0.0
 * @date 2023/02/02 18:51
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\WalletService;
use App\Http\Strategy\class\Refah;
use App\Http\Strategy\class\Sterategy;
use Exception;
use Illuminate\Http\Request;

class BankController extends Controller
{
    private WalletService $service;

    /**
     * @param WalletService $service
     */
    public function __construct(WalletService $service)
    {
        $this->service = $service;
    }

    /**
     * @return Sterategy|string
     */
    public function getSumWalletAllBankForUser(): string|Sterategy
    {
        try {
            return $this->service->getSumWalletAllBankForUser();
        } catch (Exception $exception) {
            return $exception->getMessage();
        }

    }
}
