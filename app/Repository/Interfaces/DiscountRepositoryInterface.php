<?php


namespace App\Repository\Interfaces;


interface DiscountRepositoryInterface
{
    public function all();

    public function store($validated);

    public function update($discount, $validated);

    public function delete($discount);
}
