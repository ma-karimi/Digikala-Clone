<?php


namespace App\Repository\Repository;


use App\Models\Detail;
use App\Repository\Interfaces\DetailRepositoryInterface;

class DetailRepository implements DetailRepositoryInterface
{

    public function store($validated)
    {
        Detail::create($validated);
    }

    public function update($detail, $validated)
    {
        $detail->update($validated);
    }

    public function delete($detail)
    {
        $detail->delete();
    }
}
