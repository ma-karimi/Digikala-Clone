<?php


namespace App\Repository\Repository;


use App\Models\Specification;
use App\Repository\Interfaces\SpecificationRepositoryInterface;

class SpecificationRepository implements SpecificationRepositoryInterface
{

    public function all()
    {
        $specifications = Specification::with('details')->get();
        return $specifications;
    }

    public function store($validated)
    {
        Specification::create($validated);
    }

    public function edit()
    {
        // TODO: Implement edit() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete($specification)
    {
        $specification->delete();
    }
}
