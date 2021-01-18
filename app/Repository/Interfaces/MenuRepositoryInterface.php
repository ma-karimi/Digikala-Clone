<?php


namespace App\Repository\Interfaces;


interface MenuRepositoryInterface
{
    public function all();

    public function store();

    public function update();

    public function delete();
}
