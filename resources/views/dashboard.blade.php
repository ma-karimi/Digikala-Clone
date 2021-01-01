@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-0">
                    <span style="border-bottom: 2px solid red">{{ __('Personal Informations') }}</span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-flex flex-row">
                        <div class="col-md-6 d-flex flex-column">
                            <span class="font-weight-bold">{{ __('Full Name') }}</span>
                            <span class="text-muted text-capitalize">{{auth()->user()->name}}</span>
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <span class="font-weight-bold">{{ __('International Code') }}</span>
                            <span class="text-muted">{{auth()->user()->icode}}</span>
                        </div>
                    </div>
                        <hr>
                    <div class="d-flex flex-row">
                        <div class="col-md-6 d-flex flex-column">
                            <span class="font-weight-bold">{{ __('Mobile Number') }}</span>
                            <span class="text-muted">{{auth()->user()->mobile}}</span>
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <span class="font-weight-bold">{{ __('E-Mail') }}</span>
                            <span class="text-muted">{{auth()->user()->email}}</span>
                        </div>
                    </div>
                        <hr>
                    <div class="d-flex flex-row">
                        <div class="col-md-6 d-flex flex-column">
                            <span class="font-weight-bold">{{ __('Birthday') }}</span>
                            <span class="text-muted">{{auth()->user()->Birthday}}</span>
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <span class="font-weight-bold">{{ __('Password') }}</span>
                            <span class="text-muted">{{ __('******') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
