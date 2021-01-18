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

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}
