<?php


namespace App\Repository\Interfaces;


interface ImageRepositoryInterface
{
    public function create($validated,$request,$product);
}
