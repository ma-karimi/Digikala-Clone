<?php


namespace App\Repository\Interfaces;


interface SettingRepositoryInterface
{
    public function all();
    public function update($validated);
}
