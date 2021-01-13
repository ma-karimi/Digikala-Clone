@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @component('components.product-manager-navbar')
                @endcomponent

                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Products') }}</span>
                        <a href="{{route('admin.products.create')}}" class="btn"><i style="color: green" class="fas fa-lg fa-plus"></i></a>
                    </div>

                    <div class="card-body row d-flex justify-content-start">
                        @foreach($products as $product)
                            <!-- Todo: how to use foreach in component -->
                            <!-- Todo: how to use translate method in component -->
                            @component('components.product-card',['path'=>$product->image->path,'alt'=>$product->image->alt,'title'=>$product->title,
                            'rate'=>$product->average,'quantity'=>$product->quantity,'product'=>$product,'price'=>$product->price])@endcomponent
                        @endforeach
                    </div>

                    <div class="row justify-content-center">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
