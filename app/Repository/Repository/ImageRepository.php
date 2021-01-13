<?php


namespace App\Repository\Repository;


use App\Repository\Interfaces\ImageRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ImageRepository implements ImageRepositoryInterface
{

    public function create($validated, $request, $product)
    {
        $pictue_name = Carbon::now()->timestamp . '.' . $validated['images']->getClientOriginalExtension();
        $request['path'] = $validated['images']->storePubliclyAs('product', $pictue_name);

        $product->image()->create([
            'alt' => $validated['alt'],
            'path' => $request['path'],
            'imageable_type' => $request['imageable_type'],
            'imageable_id' => $request['imageable_id'],
        ]);
    }

    public function update($validated, $request, $product)
    {
        $pictue_name = Carbon::now()->timestamp . '.' . $validated['images']->getClientOriginalExtension();
        $request['path'] = $validated['images']->storePubliclyAs('product', $pictue_name);

        $product->image->update([
            'alt' => $validated['alt'],
            'path' => $request['path'],
            'imageable_type' => $request['imageable_type'],
            'imageable_id' => $request['imageable_id'],
        ]);
    }

    public function delete($product)
    {
        Storage::delete($product->image->path);
    }
}
