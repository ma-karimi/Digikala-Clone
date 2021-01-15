<?php


namespace App\Repository\Interfaces;


interface SpecificationRepositoryInterface
{
    public function all();

    public function store($validated);

    public function edit();

    public function update();

    public function delete($specification);
}
