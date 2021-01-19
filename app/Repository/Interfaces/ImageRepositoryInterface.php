<?php


namespace App\Repository\Interfaces;


interface ImageRepositoryInterface
{
    public function create($validated,$request,$model);

    public function update($validated,$request,$model);

    public function delete($model);
}
