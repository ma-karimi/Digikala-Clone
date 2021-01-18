<?php


namespace App\Repository\Interfaces;


interface MenuRepositoryInterface
{
    public function all();

    public function store($validated);

    public function update();

    public function delete();
}
