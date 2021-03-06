<?php


namespace App\Repository\Interfaces;


use App\Http\Requests\StoreProductRequest;

interface ProductRepositoryInterface
{
    public function all();

    public function store($validated, $request);

    public function update($validated, $request, $product);

    public function destroy($product);


}
