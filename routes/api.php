<?php

use App\Http\Controllers\Api\BankController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('backend')
    ->controller(BankController::class)
    ->group(static function () {
        Route::get('wallet', 'getSumWalletAllBankForUser');
        Route::get('get-wallet/{bank}', 'getUserWalletBank');
//        Route::get('refah', 'getWallet');
//        Route::get('saderat', 'getWallet');
    });


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
