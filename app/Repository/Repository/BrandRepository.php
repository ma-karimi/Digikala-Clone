<?php


namespace App\Repository\Repository;


use App\Models\Brand;
use App\Repository\Interfaces\BrandRepositoryInterface;

class BrandRepository implements BrandRepositoryInterface
{
    public function create($validated)
    {
        $brand = Brand::where('brand', $validated['brand'])->first();
        if ($brand == null) {
            $brand = Brand::create($validated);
            return $brand;
        }
        if ($brand != null) {
            return $brand;
        }
    }
}
