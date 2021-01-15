@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @component('components.product-manager-navbar')
                @endcomponent

                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Specification') }}</span>
                        <a href="{{route('admin.specifications.create')}}" class="btn"><i style="color: green" class="fas fa-lg fa-plus"></i></a>
                    </div>

                    <div class="card-body row d-flex justify-content-start">
                        <div class="card col-md-12">
                            <div id="accordion">
                                @foreach($specifications as $index => $specification)
                                    @component('components.specification-collapse',['index'=>$index,'specification'=>$specification])
                                    @endcomponent
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
{{--                        {{ $specifications->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
