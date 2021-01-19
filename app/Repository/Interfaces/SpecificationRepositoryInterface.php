<?php


namespace App\Repository\Interfaces;


interface SpecificationRepositoryInterface
{
    public function all();

    public function select($specification);

    public function store($validated);

    public function update($validated, $specification);

    public function delete($specification);
}
