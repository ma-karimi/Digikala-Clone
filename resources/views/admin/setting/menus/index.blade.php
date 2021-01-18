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
                            <span class="text-danger font-weight-bold">{{ __('Comments') }}</span>
                        </div>

                        <div class="card-body row d-flex justify-content-start">
                            <div class="card col-md-12">
                                <div class="card-body">
                                    <div id="accordion">
                                        @foreach($menus as $menu)
                                            @component('components.menu-card',['title'=>$menu->title,'title2'=>$menu->en_title,
                                            'route'=>$menu->route,'menu'=>$menu,'icon'=>$menu->icon])@endcomponent
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            {{ $menus->links() }}
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
