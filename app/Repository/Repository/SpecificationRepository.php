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

    public function update($validated, $specification)
    {
        $specification->update($validated);
    }

    public function delete($specification)
    {
        $specification->delete();
    }
}
