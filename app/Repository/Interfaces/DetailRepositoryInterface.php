<?php


namespace App\Repository\Interfaces;


interface DetailRepositoryInterface
{
    public function store($validated);

    public function update($detail, $validated);

    public function delete($detail);
}
