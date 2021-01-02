<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cms Project</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            direction: rtl;
            text-align: right;
        }
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
    </nav>

    <main class="py-4 col-md-12">
        <div class="d-flex flex-row">
            <div class="container-fluid text-center col-md-2 ">
                <div class=" sidenav border pt-4 d-flex flex-column">
                    <img class="d-flex justify-content-center rounded-circle" src="https://uupload.ir/files/h23g_richscorer_small.png" alt="">
                    <span class="font-weight-bold text-capitalize mt-2">{{auth()->user()->name}}</span>
                    <span class="form-control-sm text-muted ">{{auth()->user()->mobile}}</span>
                    <a class="m-2 btn" href="{{route('dashboard')}}">{{ __('User Dashboard') }}</a>
                    @hasrole('admin')
                        <a class="m-2 btn" href="">{{ __('Orders') }}</a>
                        <a class="m-2 btn" href="">{{ __('Users') }}</a>
                        <a class="m-2 btn" href="">{{ __('Accountants') }}</a>
                        <a class="m-2 btn" href="">{{ __('Discounts') }}</a>
                        <a class="m-2 btn" href="">{{ __('Site Setting') }}</a>
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
                    <span class="text-md-center">{{ __('24Hours Support') }}</span>
                </div>
                <div class="d-flex flex-column">
                    <img src="" alt="">
                    <span class="text-md-center">{{ __('Spot Payment') }}</span>
                </div>
                <div class="d-flex flex-column">
                    <img src="" alt="">
                    <span class="text-md-center">{{ __('7Days Guarantee') }}</span>
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
@yield('script')
</body>
</html>
