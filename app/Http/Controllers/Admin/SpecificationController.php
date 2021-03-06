<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSpecificationRequest;
use App\Models\Specification;
use App\Repository\Interfaces\SpecificationRepositoryInterface;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    /**
     * @var SpecificationRepositoryInterface
     */
    private $specificationRepository;

    public function __construct(SpecificationRepositoryInterface $specificationRepository)
    {
        $this->specificationRepository = $specificationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specifications = $this->specificationRepository->all();
        return view('admin.manage.specifications.index')
            ->withSpecifications($specifications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manage.specifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpecificationRequest $request)
    {
        $validated = $request->validated();
        $this->specificationRepository->store($validated);
        return redirect()->route('admin.specifications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specification  $specification
     * @return \Illuminate\Http\Response
     */
    public function show(Specification $specification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specification  $specification
     * @return \Illuminate\Http\Response
     */
    public function edit(Specification $specification)
    {
        return view('admin.manage.specifications.edit')
            ->withSpecification($specification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specification  $specification
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSpecificationRequest $request, Specification $specification)
    {
        $validated = $request->validated();
        $this->specificationRepository->update($validated, $specification);
        return redirect()->route('admin.specifications.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specification  $specification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specification $specification)
    {
        $this->specificationRepository->delete($specification);
        return redirect()->back();
    }
}
