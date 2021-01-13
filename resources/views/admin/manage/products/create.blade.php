@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Add Product') }}</span>
                        <a href="{{route('admin.products.index')}}" class="btn"><i class="fas fa-chevron-left"></i></a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    @component('components.create-form-input',['name'=>'title','type'=>'text','title'=>'Title'])
                                    @endcomponent
                                </div>

                                <div class="form-group row">
                                    @component('components.create-form-input',['name'=>'en-title','type'=>'text','title'=>'English Title'])
                                    @endcomponent
                                </div>

                                <div class="form-group row">
                                    @component('components.create-form-input',['name'=>'slug','type'=>'text','title'=>'Slug'])
                                    @endcomponent
                                </div>

                                <div class="form-group row">
                                    @component('components.create-form-input',['name'=>'price','type'=>'number','title'=>'Price'])
                                    @endcomponent
                                </div>

                                <div class="form-group row">
                                    @component('components.create-form-input',['name'=>'quantity','type'=>'number','title'=>'Quantity'])
                                    @endcomponent
                                </div>

                                <div class="form-group row">
                                    @component('components.create-form-input',['name'=>'brand','type'=>'text','title'=>'Brand'])
                                    @endcomponent
                                        <!-- Todo: search if a brand is not exist create after submit -->
                                        <button type="button" class="btn btn-light">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                </div>

                                <div class="form-group row">
                                    <label for="category" class="col-md-2 col-form-label text-md-right">{{ __('Category') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="category" id="parent">
                                            <option value="">{{__('None')}}</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#catCreator">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <!-- Todo: solve with ajax-->
{{--                                    @component('components.create-category-modal',['modal_id'=>'catCreator','title'=>'Create New Category',--}}
{{--                                    'categories'=>$categories,'category'=>$category])--}}
{{--                                    @endcomponent--}}
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="file" name="images" multiple >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    @component('components.create-form-input',['name'=>'alt','type'=>'text','title'=>'Alt'])
                                    @endcomponent
                                        <input id="alt" type="hidden" name="imageable_type" value="App\Models\Product">
                                        <input id="alt" type="hidden" name="imageable_id" value="$product->id">

                                </div>

                                <div class=" d-flex flex-column">
                                    <div class="form-group row">
                                        @component('components.create-form-input',['name'=>'detail','type'=>'text','title'=>'Detail'])
                                        @endcomponent
                                        <!-- Todo: add detail ajax in this form-->
                                        <button type="button" class="btn btn-light" onclick="myFunction()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <div id="details" class="d-flex flex-column"></div>
                                </div>

                                <div class="form-group row">
                                    <label for="review" class="col-md-2 col-form-label text-md-right">{{ __('Review') }}</label>

                                    <div class="col-md-6">
                                        <textarea class="form-control"  name="review" id="review" cols="180" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-2 offset-md-2">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('+ Add Product') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



<script>
    function myFunction() {
        var x = document.getElementById("myForm").elements[0].value;
        document.getElementById("details").innerHTML = x;
    }
</script>
