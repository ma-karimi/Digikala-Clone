@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex flex-row">
                            <a class="btn btn-light mx-2" href="{{route('admin.orders.index')}}"><i class="fal fa-arrow-alt-from-left"></i></a>
                            <span style="border-bottom: 2px solid red">{{ __('Orders Detail') }}</span>
                            <span class="mx-4">{{ $order->created_at }}</span>
                            <span class="mx-4">{{"#DKC-".$order->id }}</span>
                        </div>
                        <hr>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                @component('components.order-detail-div',['class1'=>'','class2'=>'text-muted',
                                            'class3'=>'font-weight-bold','label'=>'Receiver','value'=>'Enter later'])
                                @endcomponent
                                @component('components.order-detail-div',['class1'=>'mx-5','class2'=>'text-muted',
                                            'class3'=>'font-weight-bold','label'=>'Mobile','value'=>'Enter later'])
                                @endcomponent
                            </div>
                            @component('components.order-detail-div',['class1'=>'d-flex flex-row','class2'=>'text-muted',
                                            'class3'=>'font-weight-bold','label'=>'Address','value'=>'Enter later'])
                            @endcomponent
                        </div>
                        <hr>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row justify-content-between">
                                @component('components.order-detail-div',['class1'=>'','class2'=>'text-muted',
                                'class3'=>'font-weight-bold','label'=>'Total Price','value'=>'Enter later'])
                                @endcomponent
                                <a class="btn btn-light" data-toggle="collapse" href="#payment" role="button" aria-expanded="false" aria-controls="collapseExample">{{__('Payment')}}</a>
                            </div>
                            @component('components.order-payment-collapse',['id'=>'payment'])@endcomponent
                        </div>
                        <hr>
                        <div class="d-flex flex-row-reverse">
                            <a class="btn btn-light mx-2" href="{{route('admin.orders.index')}}">{{__('Show Factor')}}</a>
                        </div>
                        <hr>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <div class="card">
                                    @component('components.order-header',['date'=>$order->created_at,'id'=>$order->id,
                                    'status'=>$order->status,'order'=>$order,'payment'=>$order->payment])
                                    @endcomponent
                                    <div class="card-body row">
                                        {{--<!-- #todo: need foreach for each product -->--}}
                                        <div class="col-md-4">
                                            <img style="width: 40%" src="https://uupload.ir/files/h23g_richscorer_small.png" alt="">
                                        </div>
                                        <div class="col-md-8 d-flex flex-column">
                                            <span class="">product title</span>
                                            <span class="">product color</span>
                                            <span class="">product seller</span>
                                            <span class="">product price</span>
                                        </div>
                                    </div>

                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
