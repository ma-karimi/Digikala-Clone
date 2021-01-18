<?php


namespace App\Repository\Interfaces;


interface MenuRepositoryInterface
{
    public function all();

    public function store($validated);

    public function update($validated, $menu);

    public function delete($menu);
}
