<?php


namespace App\Repository\Repository;


use App\Http\Requests\StoreProductRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Repository\Interfaces\BrandRepositoryInterface;
use App\Repository\Interfaces\ImageRepositoryInterface;
use App\Repository\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @var Product
     */
    private $product;
    /**
     * @var ImageRepositoryInterface
     */
    private $imageRepository;
    /**
     * @var BrandRepositoryInterface
     */
    private $brandRepository;

    public function __construct(Product $product,ImageRepositoryInterface $imageRepository, BrandRepositoryInterface $brandRepository)
    {
        $this->product = $product;
        $this->imageRepository = $imageRepository;
        $this->brandRepository = $brandRepository;
    }

    public function all()
    {
        $products = Product::with('categories','image','rates')->get();
        return $products;
    }

    public function store($validated, $request)
    {
        #todo: multiple image just get last one, resolve
        #todo: transfer all to repository (image,brand)

        $brand = $this->brandRepository->create($validated);
        $validated['brand_id'] = $brand->id;
        $product = Product::create($validated);

        $this->imageRepository->create($validated,$request,$product);
    }
}