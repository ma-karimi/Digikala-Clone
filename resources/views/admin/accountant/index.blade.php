@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0">
                        <span style="border-bottom: 2px solid red">{{ __('Accountants') }}</span>
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
                                        <form action="{{route('admin.accountants')}}" method="get">
                                            @csrf
                                            @component('components.sort-list',['route'=>'admin.accountants','value'=>'all', 'label'=>'All'])@endcomponent
                                            @component('components.sort-list',['route'=>'admin.accountants','value'=>'successful', 'label'=>'Successful'])@endcomponent
                                            @component('components.sort-list',['route'=>'admin.accountants','value'=>'failed', 'label'=>'Failed'])@endcomponent
                                        </form>
                                    </li>
                                </ul>
                            </tr>
                            <tr style="background-color: #8fcaff">
                                <th>{{__('Order Id')}}</th>
                                <th>{{__('Payment Method')}}</th>
                                <th>{{__('Tracking Code')}}</th>
                                <th>{{__('Total Price')}}</th>
                                <th>{{__('Status')}}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($orders as $order)
                                <tr>

                                    @foreach($order->payments as $payment)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{ucfirst($order->payment)}}</td>
                                        <td>{{$payment->tracking_code}}</td>
                                        <td>{{$payment->total_price}}</td>
                                        <td>{{ucfirst($payment->status)}}</td>
                                    </tr>
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-center">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
