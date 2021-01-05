@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0">
                        <span style="border-bottom: 2px solid red">{{ __('Orders') }}</span>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <ul class="row" style="list-style-type: none" data-label="sorting by">
                                    <span style="border-bottom: 2px solid red">{{__('Sorting')}}</span>
                                        <form action="{{route('admin.orders.index')}}" method="get">
                                            @csrf
                                            @component('components.sort-list',['value'=>'waiting', 'label'=>'Waiting'])@endcomponent
                                            @component('components.sort-list',['value'=>'processing', 'label'=>'Processing'])@endcomponent
                                            @component('components.sort-list',['value'=>'accepted', 'label'=>'Accepted'])@endcomponent
                                            @component('components.sort-list',['value'=>'posted', 'label'=>'Posted'])@endcomponent
                                            @component('components.sort-list',['value'=>'delivered', 'label'=>'Delivered'])@endcomponent
                                        </form>
                                    </li>
                                </ul>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($orders as $order)
                                    <div class="card">

                                        <div class="card-header">
                                            <div class="row justify-content-between">
                                                <div>
                                                    <span class="mx-3">{{$order->created_at}}</span>
                                                    <span><i class="far fa-circle"></i></span>
                                                    <span class="mx-3">{{"#DKC-".$order->id}}</span>
                                                    <span><i class="far fa-circle"></i></span>
                                                    <span class="mx-3">{{ucfirst($order->status)}}</span>
                                                </div>
                                                <a class="mx-5" href="{{route('admin.orders.show',$order)}}">{{__('More Detail')}}</a>
                                            </div>
                                            <div>
                                                <span class="mx-1">{{__('Total Price')}}</span>
                                                <span class="mx-1 font-weight-bold">{{$order->payment}}</span>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <p>{{__('Order Content')}}</p>
                                            <div class="row">
{{--                                                @foreach($orders->products as $product)--}}
{{--                                                    <img style="width: 60px" class="mx-2 mb-3" src="https://uupload.ir/files/h23g_richscorer_small.png" alt="">--}}
{{--                                                @endforeach--}}
                                                <img style="width: 60px" class="mx-2 mb-3" src="https://uupload.ir/files/h23g_richscorer_small.png" alt="">
                                                <img style="width: 60px" class="mx-2 mb-3" src="https://uupload.ir/files/h23g_richscorer_small.png" alt="">
                                            </div>
                                            <hr>
                                            <a class="mx-5 d-flex flex-row-reverse" href="#">{{__('Factor')}}</a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="d-flex flex-column align-items-center">
                                        <img src="https://uupload.ir/files/omwo_1.png" style="width: 50%" alt="">
                                        <p class="font-weight-bold text-muted mt-4">{{__('Your Shopping Card Is Empty')}}</p>
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-center">
{{--                        {{ $orders->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
