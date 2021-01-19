<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\Interfaces\AccountantRepositoryInterface;
use Illuminate\Http\Request;

class AccountantController extends Controller
{
    /**
     * @var AccountantRepositoryInterface
     */
    private $accountantRepository;

    public function __construct(AccountantRepositoryInterface $accountantRepository)
    {

        $this->accountantRepository = $accountantRepository;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $orders = $this->accountantRepository->all();
        return view('admin.accountant.index')
            ->withOrders($orders);
    }
}
