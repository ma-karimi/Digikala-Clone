@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Add Product') }}</span>
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
                                    <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" name="title" class="form-control" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="en-title" class="col-md-2 col-form-label text-md-right">{{ __('English Title') }}</label>

                                    <div class="col-md-6">
                                        <input id="en-title" type="text" name="en-title" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="slug" class="col-md-2 col-form-label text-md-right">{{ __('Slug') }}</label>

                                    <div class="col-md-6">
                                        <input id="slug" type="text" name="slug" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="price" class="col-md-2 col-form-label text-md-right">{{ __('Price') }}</label>

                                    <div class="col-md-6">
                                        <input id="price" type="number" name="price" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="quantity" class="col-md-2 col-form-label text-md-right">{{ __('Quantity') }}</label>

                                    <div class="col-md-6">
                                        <input id="quantity" type="number" name="quantity" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="brand" class="col-md-2 col-form-label text-md-right">{{ __('Brand') }}</label>
                                    <!-- Todo: create brand or select from search -->
                                    <!-- Todo: js accept create new -->
                                    <div class="col-md-6">
                                        <input id="brand" type="text" name="brand" class="form-control" >
                                    </div>
                                    <button type="submit" class="btn btn-light">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class="form-group row">
                                    <label for="category" class="col-md-2 col-form-label text-md-right">{{ __('Category') }}</label>
                                    <!-- Todo: create category or select from search -->
                                    <!-- Todo: js accept create new -->
                                    <div class="col-md-6">
                                        <input id="category" type="text" name="category" class="form-control" >
                                    </div>
                                    <button type="submit" class="btn btn-light">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class="form-group row">
                                    <label for="image" class="col-md-2 col-form-label text-md-right">{{ __('Image') }}</label>

                                    <div class="col-md-6">
                                        <input id="image" type="file" name="images" multiple class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alt" class="col-md-2 col-form-label text-md-right">{{ __('Alt') }}</label>

                                    <div class="col-md-6">
                                        <input id="alt" type="text" name="alt" multiple class="form-control">
                                        <input id="alt" type="hidden" name="imageable_type" value="App\Models\Product">
                                        <input id="alt" type="hidden" name="imageable_id" value="$product->id">
                                    </div>
                                </div>

                                <div class=" d-flex flex-column">
                                    <div class="form-group row">
                                        <label for="detail" class="col-md-2 col-form-label text-md-right">{{ __('Detail') }}</label>

                                        <div class="col-md-6">
                                            <input id="detail" type="text" name="detail" class="form-control" aria-describedby="detailHelp" >
                                            <div id="detailHelp" class="form-text text-danger">*Enter your Title and click to add. </div>
                                        </div>
                                        <button type="submit" class="btn btn-light" onclick="myFunction()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <div id="details" class="d-flex flex-column"> </div>
                                </div>

                                <div class="form-group row">
                                    <label for="review" class="col-md-2 col-form-label text-md-right">{{ __('Review') }}</label>
                                    <!-- Todo: add review in product table-->
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
