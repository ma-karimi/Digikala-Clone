<?php


namespace App\Repository\Repository;


use App\Models\Discount;
use App\Repository\Interfaces\DiscountRepositoryInterface;

class DiscountRepository implements DiscountRepositoryInterface
{

    public function all()
    {
        $sort = request()->sort;

        switch ($sort) {
            case 'all':
            case null:
            default:
                $discounts = Discount::paginate(5);
                return $discounts;
            case 'active':
                $discounts = Discount::where('status', 1)->paginate(5);
                return $discounts;
            case 'deactive':
                $discounts = Discount::where('status', 0)->paginate(5);
                return $discounts;

        }
    }

    public function store($validated)
    {
        Discount::create($validated);
    }

    public function update($discount, $validated)
    {
        $discount->update($validated);
    }

    public function delete($discount)
    {
        $discount->delete();
    }
}
