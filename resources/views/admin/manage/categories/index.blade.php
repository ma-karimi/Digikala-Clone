@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @component('components.product-manager-navbar')
                @endcomponent

                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Categories') }}</span>
                        <a href="{{route('admin.categories.create')}}" class="btn"><i style="color: green" class="fas fa-lg fa-plus"></i></a>
                    </div>

                    <div class="card-body row d-flex justify-content-start">
                        @foreach($categories as $category)
                            <div class="card col-md-3">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">{{$category->title}}</h5>
                                    <hr>
                                    @if($category->childrens != null)
                                        @foreach($category->childrens as $children)
                                            <div class="card-text mx-1 badge badge-info">
                                                {{$children->title}}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row justify-content-center">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
