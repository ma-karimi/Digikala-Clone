@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Edit Category') }}</span>
                        <a href="{{route('admin.categories.index')}}" class="btn"><i class="fas fa-chevron-left"></i></a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form method="POST" action="{{ route('admin.categories.update',$category) }}" enctype="multipart/form-data">
                                @csrf @method('put')

                                <div class="form-group row">
                                    <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" name="title" class="form-control" value="{{$category->title}}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Parent') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="parent_id" id="parent">
                                            <option value="">{{__('None')}}</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-2 offset-md-2">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('+ Edit Category') }}
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
