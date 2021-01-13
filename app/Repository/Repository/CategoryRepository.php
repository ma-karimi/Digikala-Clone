<?php


namespace App\Repository\Repository;


use App\Models\Category;
use App\Repository\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function all()
    {
        $categories = Category::paginate(12);
        return $categories;
    }

    public function select()
    {
        $categories = Category::all();
        return $categories;
    }

    public function store($validated)
    {
        Category::create($validated);
    }

    public function update($category,$validated)
    {
        Category::find($category->id)->update($validated);
    }
}
