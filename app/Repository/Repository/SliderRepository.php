<?php


namespace App\Repository\Repository;


use App\Models\Slider;
use App\Repository\Interfaces\ImageRepositoryInterface;
use App\Repository\Interfaces\SliderRepositoryInterface;

class SliderRepository implements SliderRepositoryInterface
{
    /**
     * @var ImageRepositoryInterface
     */
    private $imageRepository;

    public function __construct(ImageRepositoryInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function all()
    {
        $sliders = Slider::with('images','category')->paginate(10);
        return $sliders;
    }

    public function store($valideted, $request)
    {
        $slider = Slider::create($valideted);
        $this->imageRepository->create($valideted, $request, $slider);
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
