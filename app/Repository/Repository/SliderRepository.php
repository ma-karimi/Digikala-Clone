<?php


namespace App\Repository\Repository;


use App\Models\Slider;
use App\Repository\Interfaces\SliderRepositoryInterface;

class SliderRepository implements SliderRepositoryInterface
{

    public function all()
    {
        $sliders = Slider::with('images','category')->paginate(2);
        return $sliders;
    }

    public function store($validated)
    {
        // TODO: Implement store() method.
    }

    public function update($slider, $validated)
    {
        // TODO: Implement update() method.
    }

    public function delete($slider)
    {
        // TODO: Implement delete() method.
    }
}
