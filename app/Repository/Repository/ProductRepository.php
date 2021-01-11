<?php


namespace App\Repository\Repository;


use App\Models\Product;
use App\Repository\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @var Product
     */
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function all()
    {
        $products = Product::with('categories','image','rates')->get();
        return $products;
    }

    public function store()
    {
        #todo: multiple image just get last one, resolve
        #todo: transfer all to repository (image,brand)
        $validated = $request->validated();

        $pictue_name = Carbon::now()->timestamp . '.' . $validated['images']->getClientOriginalExtension();
        $request['path'] = $validated['images']->storePubliclyAs('product', $pictue_name);

        $brand = Brand::where('brand', $validated['brand'])->first();
        if ($brand == null) {
            $brand = Brand::create($validated);
            $validated['brand_id'] = $brand->id;
        }
        if ($brand != null) {
            $validated['brand_id'] = $brand->id;
        }

        $product = Product::create($validated);

        $product->image()->create([
            'alt' => $validated['alt'],
            'path' => $request['path'],
            'imageable_type' => $request['imageable_type'],
            'imageable_id' => $request['imageable_id'],
        ]);
    }
}
