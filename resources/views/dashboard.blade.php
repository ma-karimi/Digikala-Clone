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
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <!-- User specification -->
                                @component('components.dashboard-specifications',['label'=> 'Full Name','value'=> auth()->user()->name])@endcomponent
                                <!-- Modal with Button trigger -->
                                @component('components.dashboard-spec-modal',
                                ['modal_id'=>'name', 'title'=> 'Change Name','label'=> 'Full Name', 'type'=>'text', 'name'=>'name', 'value'=> auth()->user()->name])
                                @endcomponent
                            </div>
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <!-- User specification -->
                                @component('components.dashboard-specifications',['label'=> 'National Code','value'=> auth()->user()->national_code])@endcomponent
                                <!-- Modal with Button trigger -->
                                @component('components.dashboard-spec-modal',
                                ['modal_id'=>'national_code', 'title'=> 'Change National Code','label'=> 'National Code', 'type'=>'number', 'name'=>'national_code', 'value'=>auth()->user()->national_code])
                                @endcomponent
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-row">
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <!-- User specification -->
                                @component('components.dashboard-specifications',['label'=> 'Mobile Number','value'=> auth()->user()->mobile])@endcomponent
                                <!-- Modal with Button trigger -->
                                @component('components.dashboard-spec-modal',
                                ['modal_id'=>'mobile', 'title'=> 'Change Mobile Number','label'=> 'Mobile', 'type'=>'number', 'name'=>'mobile', 'value'=> auth()->user()->mobile])
                                @endcomponent
                            </div>
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <!-- User specification -->
                                @component('components.dashboard-specifications',['label'=> 'E-Mail','value'=> auth()->user()->email])@endcomponent
                                <!-- Modal with Button trigger -->
                                @component('components.dashboard-spec-modal',
                                ['modal_id'=>'email', 'title'=> 'Change E-Mail','label'=> 'E-Mail', 'type'=>'email', 'name'=>'email', 'value'=> auth()->user()->email])
                                @endcomponent
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-row">
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <!-- User specification -->
                                @component('components.dashboard-specifications',['label'=> 'Birthday','value'=> auth()->user()->birthday])@endcomponent
                                <!-- Modal with Button trigger -->
                                @component('components.dashboard-spec-modal',
                                ['modal_id'=>'birthday', 'title'=> 'Change Birthday','label'=> 'Birthday', 'type'=>'date', 'name'=>'birthday', 'value'=> auth()->user()->birthday])
                                @endcomponent
                            </div>
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <!-- User specification -->
                                @component('components.dashboard-specifications',['label'=> 'Password','value'=> '******'])@endcomponent
                                <!-- Modal with Button trigger -->
                                @component('components.dashboard-spec-modal',
                                ['modal_id'=>'password', 'title'=> 'Change Password','label'=> 'Password', 'type'=>'password', 'name'=>'password', 'value'=>'******'])
                                @endcomponent
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
