<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDetailRequest;
use App\Http\Requests\UpdateDetailRequest;
use App\Models\Detail;
use App\Models\Specification;
use App\Repository\Interfaces\DetailRepositoryInterface;
use App\Repository\Interfaces\SpecificationRepositoryInterface;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * @var DetailRepositoryInterface
     */
    private $detailRepository;
    /**
     * @var SpecificationRepositoryInterface
     */
    private $specificationRepository;

    /**
     * DetailController constructor.
     * @param DetailRepositoryInterface $detailRepository
     */
    public function __construct(DetailRepositoryInterface $detailRepository, SpecificationRepositoryInterface $specificationRepository)
    {
        $this->detailRepository = $detailRepository;
        $this->specificationRepository = $specificationRepository;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $specification = $request->specification;
        return view('admin.manage.details.create')
            ->withSpecification($specification);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailRequest $request)
    {
        $specification =$this->specificationRepository->select($request->specification);
        $validated = $request->validated();
        $validated['specification_id'] = $specification[0]->id;
        $this->detailRepository->store($validated);
        return redirect()->route('admin.specifications.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        return view('admin.manage.details.edit')
            ->withDetail($detail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailRequest $request, Detail $detail)
    {
        $validated = $request->validated();
        $this->detailRepository->update($detail, $validated);
        return redirect()->route('admin.specifications.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        $this->detailRepository->delete($detail);
        return redirect()->route('admin.specifications.index');
    }
}
