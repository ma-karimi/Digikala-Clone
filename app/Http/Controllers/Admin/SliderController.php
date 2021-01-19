<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Category;
use App\Models\Slider;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Repository\Interfaces\SliderRepositoryInterface;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * @var SliderRepositoryInterface
     */
    private $sliderRepository;
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepository;

    public function __construct(SliderRepositoryInterface $sliderRepository,CategoryRepositoryInterface $categoryRepository)
    {
        $this->sliderRepository = $sliderRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = $this->sliderRepository->all();
        return view('admin.setting.sliders.index')
            ->withSliders($sliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->select();
        return view('admin.setting.sliders.create')
            ->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSliderRequest $request)
    {
        $valideted = $request->validated();
        $this->sliderRepository->store($valideted, $request);
        return redirect()->route('admin.sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $categories = $this->categoryRepository->select();
        return view('admin.setting.sliders.edit')
            ->withCategories($categories)
            ->withSlider($slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $validated = $request->validated();
        $this->sliderRepository->update($slider, $validated, $request);
        return redirect()->route('admin.sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
