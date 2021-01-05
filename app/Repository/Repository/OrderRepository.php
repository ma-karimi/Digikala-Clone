<?php


namespace App\Repository\Repository;


use App\Models\Order;
use App\Repository\Interfaces\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    /**
     * @var Order
     */
    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function all()
    {
        $sort = request()->sort;

        switch ($sort) {
            case 'waiting':
            case null:
            default:
                $orders = $this->order->where('status', 'waiting')->paginate(5);
                return $orders;
            case 'processing':
                $orders = $this->order->where('status', 'processing')->paginate(5);
                return $orders;
            case 'accepted':
                $orders = $this->order->where('status', 'accepted')->paginate(5);
                return $orders;
            case 'posted':
                $orders = $this->order->where('status', 'posted')->paginate(5);
                return $orders;
            case 'delivered':
                $orders = $this->order->where('status', 'delivered')->paginate(5);
                return $orders;
        }
    }
}
