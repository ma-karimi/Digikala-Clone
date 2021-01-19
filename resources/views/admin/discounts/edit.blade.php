@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Edit Discount') }}</span>
                        <a href="{{route('admin.discounts.index')}}" class="btn"><i class="fas fa-chevron-left"></i></a>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.discounts.update',$discount) }}">
                            @csrf @method('put')

                            <div class="form-group row">
                                @component('components.edit-form-input',['name'=>'title','type'=>'text','title'=>'Title','value'=>$discount->title])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.edit-form-input',['name'=>'value','type'=>'number','title'=>'Value','value'=>$discount->value])
                                @endcomponent
                                <span class="mt-2"><i class="fas fa-percentage"></i></span>
                            </div>

                            <div class="form-group row">
                                @component('components.edit-form-input',['name'=>'count','type'=>'number','title'=>'Count','value'=>$discount->count])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.edit-form-input',['name'=>'expire_time','type'=>'date','title'=>'Expire Time','value'=>$discount->expire_time])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.edit-form-input',['name'=>'max_price','type'=>'number','title'=>'Maximum Price','value'=>$discount->max_price])
                                @endcomponent
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-2 offset-md-2">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Edit Discount') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
