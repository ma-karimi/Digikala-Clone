<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="text-danger font-weight-bolder">{{ config('app.name', 'Laravel') }}</span>
            </a>
        </div>
    </nav>

    <main class="py-4 col-md-12">
        <div class="d-flex flex-row">
            <div class="container-fluid text-center col-md-2 ">
                <div class=" sidenav border pt-4 d-flex flex-column align-items-center">
                    <img class="img-fluid rounded-circle" width="70px" src="https://uupload.ir/files/h23g_richscorer_small.png" alt="">
                    <span class="font-weight-bold text-capitalize mt-2">{{auth()->user()->name}}</span>
                    <span class="form-control-sm text-muted ">{{auth()->user()->mobile}}</span>
                    <a class="m-2 btn" href="{{route('dashboard')}}">{{ __('User Dashboard') }}</a>
                    @hasanyrole('super-admin|admin')
                        <a class="m-2 btn" href="{{route('admin.orders.index')}}">{{ __('Orders') }}</a>
                        <a class="m-2 btn" href="{{route('admin.users.index')}}">{{ __('Users') }}</a>
                        <a class="m-2 btn" href="{{route('admin.products.index')}}">{{ __('Product Manager') }}</a>
                        <a class="m-2 btn" href="{{route('admin.accountants')}}">{{ __('Accountants') }}</a>
                        <a class="m-2 btn" href="{{route('admin.discounts.index')}}">{{ __('Discounts') }}</a>
                        <a class="m-2 btn" href="{{route('admin.menus.index')}}">{{ __('Setting') }}</a>
                    @else
                        <a class="m-2 btn" href="">{{ __('Orders') }}</a>
                        <a class="m-2 btn" href="">{{ __('Favorites') }}</a>
                        <a class="m-2 btn" href="">{{ __('Comments') }}</a>
                        <a class="m-2 btn" href="">{{ __('Locations') }}</a>
                        <a class="m-2 btn" href="">{{ __('Lastseens') }}</a>
                    @endhasrole
                    <form action="{{ route('logout') }}" method="POST"> @csrf
                        <button type="submit" class="m-2 btn">{{ __('Logout') }}</button>
                    </form>
                </div>
            </div>
            @yield('content')
        </div>

        <div class="border p-4 mx-3 mt-3 " style="background-color:#e0e8ec">
            <div class="d-flex flex-row justify-content-around">
                <div class="d-flex flex-column">
                    <img src="" alt="">
                    <span class="text-md-center">{{ __('Express Delivery') }}</span>
                </div>
                <div class="d-flex flex-column">
                    <img src="" alt="">
                    <span class="text-md-center">{{ __('24 Hours Support') }}</span>
                </div>
                <div class="d-flex flex-column">
                    <img src="" alt="">
                    <span class="text-md-center">{{ __('Spot Payment') }}</span>
                </div>
                <div class="d-flex flex-column">
                    <img src="" alt="">
                    <span class="text-md-center">{{ __('7 Days Guarantee') }}</span>
                </div>
                <div class="d-flex flex-column">
                    <img src="" alt="">
                    <span class="text-md-center">{{ __('Originality Guarantee') }}</span>
                </div>
            </div>
            <hr>
            <div class="text-md-center">
                <span class="font-weight-bold">{{ __('All Days, 24 Hours,We are responsible for you') }}</span>
            </div>
            <div class="d-flex flex-row justify-content-md-center">
                <div>{{ __('021-44442222') }}</div>
                <div class="mx-2 font-weight-bold">{{ __('Telephone ') }}</div>
                <div>{{ __('info@digikala.com') }}</div>
                <div class="mr-2 font-weight-bold">{{ __('E-Mail Address ') }}</div>
            </div>
        </div>
    </main>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

@yield('script')
</body>
</html>
