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
                            <!-- Todo: how to use trans method in that -->
                            @component('components.product-card',['path'=>'https://uupload.ir/files/h23g_richscorer_small.png','alt'=>'alt','title'=>$product->title,'rate'=>4,'quantity'=>$product->quantity? 'available' : 'not available','product'=>$product])@endcomponent
                        @endforeach
                    </div>

                    <div class="row justify-content-center">
{{--                        {{ $products->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
