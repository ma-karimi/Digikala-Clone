<?php


namespace App\Repository\Repository;


use App\Models\Setting;
use App\Repository\Interfaces\SettingRepositoryInterface;

class SettingRepository implements SettingRepositoryInterface
{

    public function all()
    {
        $setting = Setting::first();
        return $setting;
    }

    public function update($validated)
    {
        Setting::where('id',1)->update($validated);
    }
}
