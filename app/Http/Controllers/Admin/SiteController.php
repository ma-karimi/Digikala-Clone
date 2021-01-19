<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use App\Repository\Interfaces\SettingRepositoryInterface;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * @var SettingRepositoryInterface
     */
    private $settingRepository;

    public function __construct(SettingRepositoryInterface $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = $this->settingRepository->all();
        return view('admin.setting.setting.index')
            ->withSetting($setting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $validated = $request->validated();
        $this->settingRepository->update($validated);
        return redirect()->route('admin.sites.index');
    }

}
