<?php


namespace App\Repository\Interfaces;


interface SliderRepositoryInterface
{
    public function all();
    public function store($validated);
    public function update($slider, $validated);
    public function delete($slider);
}
