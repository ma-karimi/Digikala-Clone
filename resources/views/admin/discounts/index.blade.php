@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @component('components.title-manager',['title'=>'Discount Manager'])@endcomponent

                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Discounts') }}</span>
                        <a href="{{route('admin.discounts.create')}}" class="btn"><i style="color: green" class="fas fa-lg fa-plus"></i></a>
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
                                    <form action="{{route('admin.discounts.index')}}" method="get">
                                        @csrf
                                        @component('components.sort-list',['route'=>'admin.discounts.index','value'=>'all', 'label'=>'All'])@endcomponent
                                        @component('components.sort-list',['route'=>'admin.discounts.index','value'=>'active', 'label'=>'Active'])@endcomponent
                                        @component('components.sort-list',['route'=>'admin.discounts.index','value'=>'deactive', 'label'=>'Deactive'])@endcomponent
                                    </form>
                                    </li>
                                </ul>
                            </tr>
                            <tr style="background-color: #8fcaff">
                                <th>#</th>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Value')}}</th>
                                <th>{{__('Count')}}</th>
                                <th>{{__('Expire Time')}}</th>
                                <th>{{__('Max Price')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('Operation')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($discounts as $index => $discount)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{ucfirst($discount->title)}}</td>
                                    <td>{{$discount->value}}</td>
                                    <td>{{$discount->count}}</td>
                                    <td>{{$discount->expire_time}}</td>
                                    <td>{{$discount->max_price}}</td>
                                    <td>{{$discount->status?__('Active') : __('Deactive')}}</td>
                                    <td class="d-flex flex-rowc">
                                        <form action="{{route('admin.discounts.destroy',$discount)}}" method="Post">
                                            @csrf @method('delete')
                                            <button type="submit" class="btn">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        <div><a class="btn" href=""><i class="fas fa-toggle-on"></i></a></div>
                                        <div><a class="btn" href="{{route('admin.discounts.edit',$discount)}}"><i class="fas fa-edit"></i></a></div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="row justify-content-center">
{{--                        {{ $discounts->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
