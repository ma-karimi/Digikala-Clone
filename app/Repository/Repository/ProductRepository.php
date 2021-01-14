<?php


namespace App\Repository\Repository;


use App\Http\Requests\StoreProductRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Repository\Interfaces\BrandRepositoryInterface;
use App\Repository\Interfaces\CommentRepositoryInterface;
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
    /**
     * @var CommentRepositoryInterface
     */
    private $commentRepository;

    public function __construct(Product $product,ImageRepositoryInterface $imageRepository,
                                BrandRepositoryInterface $brandRepository,CommentRepositoryInterface $commentRepository)
    {
        $this->product = $product;
        $this->imageRepository = $imageRepository;
        $this->brandRepository = $brandRepository;
        $this->commentRepository = $commentRepository;
    }

    public function all()
    {
        $products = Product::with('categories','image','rates')->paginate(12);
        return $products;
    }

    public function store($validated, $request)
    {
        $brand = $this->brandRepository->create($validated);
        $validated['brand_id'] = $brand->id;
        $product = Product::create($validated);

        $this->imageRepository->create($validated,$request,$product);
    }

    public function destroy($product)
    {
        $this->commentRepository->delete_all($product->comments);
        $this->imageRepository->delete($product);
        $product->delete();
    }

    public function update($validated, $request, $product)
    {
        $brand = $this->brandRepository->create($validated);
        $validated['brand_id'] = $brand->id;
        Product::find($product->id)->update($validated);

        $this->imageRepository->update($validated,$request,$product);
    }
}
