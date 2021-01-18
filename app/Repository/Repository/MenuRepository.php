<?php


namespace App\Repository\Repository;


use App\Models\Menu;
use App\Repository\Interfaces\MenuRepositoryInterface;

class MenuRepository implements MenuRepositoryInterface
{

    public function all()
    {
        $menus = Menu::paginate(12);
        return $menus;
    }

    public function store($validated)
    {
        Menu::create($validated);
    }

    public function update($validated, $menu)
    {
        $menu->update($validated);
    }

    public function delete($menu)
    {
        $menu->delete();
    }
}
