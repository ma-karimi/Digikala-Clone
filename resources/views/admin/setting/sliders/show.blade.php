@extends('layouts.users')
<!-- Todo: add search box by category,brand in right menu -->
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @component('components.site-setting-navbar')
                @endcomponent

                    <div class="card">
                        <div class="card-header border-0 d-flex justify-content-between">
                            <span class="text-danger font-weight-bold">{{ __('Slider') }}</span>
                            <a href="{{route('admin.sliders.index')}}" class="btn"><i class="fas fa-chevron-left"></i></a>
                        </div>

                        <div class="card-body">
                            @component('components.slider',['slider'=>$slider])
                            @endcomponent
                        </div>

                        <div class="row justify-content-center">
{{--                            {{ $menus->links() }}--}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
