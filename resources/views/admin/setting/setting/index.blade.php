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
                            <span class="text-danger font-weight-bold">{{ __('Site Setting') }}</span>
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
                                <div class="bg bg-info">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-md-right">{{ __('Free Shipment') }}</label>
                                        <div class="col-md-6 mt-2">
                                            {{$setting->free_shipment_limit}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-md-right">{{ __('Status Message') }}</label>
                                        <div class="col-md-6 mt-2">
                                            {{$setting->status_msg}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-md-right">{{ __('Status') }}</label>
                                        <div class="col-md-6 mt-2">
                                            {{$setting->status? 'Active' : 'Deactive'}}
                                        </div>
                                    </div>
                                </div>
                            <form method="POST" action="{{ route('admin.sites.update',$setting) }}">
                                @csrf @method('put')

                                <div class="form-group row">
                                    @component('components.create-form-input',['name'=>'free_shipment_limit','type'=>'text','title'=>'Free Shipment'])
                                    @endcomponent
                                </div>
                                <div class="form-group row">
                                    @component('components.edit-form-input',['value'=>$setting->status_msg, 'name'=>'status_msg','type'=>'text','title'=>'Status Message'])
                                    @endcomponent
                                </div>

                                <div class="form-group">
                                    <label  class="col-md-2 col-form-label text-md-right" for="status">Status</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="active" value="1">
                                        <label class="form-check-label" for="active">{{__('Active')}}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="deactive" value="0">
                                        <label class="form-check-label" for="deactive">{{__('Deactive')}}</label>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-2 offset-md-2">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Change Status') }}
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
