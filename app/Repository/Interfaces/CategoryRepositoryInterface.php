<?php


namespace App\Repository\Interfaces;


interface CategoryRepositoryInterface
{
    public function all();
    public function select();
    public function store($validated);
    public function update($category,$validated);
}
