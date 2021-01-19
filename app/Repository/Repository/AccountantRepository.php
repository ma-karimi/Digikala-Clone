<?php


namespace App\Repository\Repository;


use App\Models\Order;
use App\Models\Payment;
use App\Repository\Interfaces\AccountantRepositoryInterface;

class AccountantRepository implements AccountantRepositoryInterface
{

    public function all()
    {
        $sort = request()->sort;

        switch ($sort) {
            case 'all':
            case null:
            default:
                $orders = Order::with('payments')->paginate(10);
                return $orders;
            case 'successful':
                $orders = Order::with('payments')
                    ->where('status', 'Successful')
                    ->paginate(10);
                return $orders;
                #todo: how set sort in relations
            case 'failed':
                $orders = Order::with('payments')
                    ->where('status', 'failed')
                    ->paginate(10);
                return $orders;
        }
    }
}
