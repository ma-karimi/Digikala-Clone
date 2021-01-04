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
                                @component('components.dashboard-specifications',['label'=> 'Full Name','value'=> $user->name])@endcomponent
                                <!-- Modal with Button trigger -->
                                @component('components.dashboard-spec-modal',
                                ['modal_id'=>'name', 'title'=> 'Change Name','label'=> 'Full Name', 'type'=>'text', 'name'=>'name', 'value'=> $user->name])
                                @endcomponent
                            </div>
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <!-- User specification -->
                                @component('components.dashboard-specifications',['label'=> 'National Code','value'=> $user->national_code])@endcomponent
                                <!-- Modal with Button trigger -->
                                @component('components.dashboard-spec-modal',
                                ['modal_id'=>'national_code', 'title'=> 'Change National Code','label'=> 'National Code', 'type'=>'number', 'name'=>'national_code', 'value'=>$user->national_code])
                                @endcomponent
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-row">
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <!-- User specification -->
                                @component('components.dashboard-specifications',['label'=> 'Mobile Number','value'=> $user->mobile])@endcomponent
                                <!-- Modal with Button trigger -->
                                @component('components.dashboard-spec-modal',
                                ['modal_id'=>'mobile', 'title'=> 'Change Mobile Number','label'=> 'Mobile', 'type'=>'number', 'name'=>'mobile', 'value'=> $user->mobile])
                                @endcomponent
                            </div>
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <!-- User specification -->
                            @component('components.dashboard-specifications',['label'=> 'E-Mail','value'=> $user->email])@endcomponent
                            <!-- Modal with Button trigger -->
                                @component('components.dashboard-spec-modal',
                                ['modal_id'=>'email', 'title'=> 'Change E-Mail','label'=> 'E-Mail', 'type'=>'email', 'name'=>'email', 'value'=> $user->email])
                                @endcomponent
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-row">
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <!-- User specification -->
                                @component('components.dashboard-specifications',['label'=> 'Birthday','value'=> $user->birthday])@endcomponent
                                <!-- Modal with Button trigger -->
                                @component('components.dashboard-spec-modal',
                                ['modal_id'=>'birthday', 'title'=> 'Change Birthday','label'=> 'Birthday', 'type'=>'date', 'name'=>'birthday', 'value'=> $user->birthday])
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
                        <hr>
                        <div class="d-flex flex-row">
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <!-- User specification -->
                                @component('components.dashboard-many-spec',['label'=> 'Role','roles'=> $user->roles])@endcomponent
                                <!-- Modal with Button trigger -->
                                @component('components.dashboard-many-spec-modal',
                                ['roles'=> $roles,'modal_id'=>'roles', 'title'=> 'Change Roles','label'=> 'Role', 'type'=>'text', 'name'=>'role',])
                                @endcomponent
                            </div>
                            <div class="col-md-6 d-flex flex-row justify-content-lg-between">
                                <div class="col-md-6 d-flex flex-column">
                                    <span class="font-weight-bold">{{ __('Delete') }}</span>
                                </div>
                                <form action="{{route('admin.users.destroy',$user)}}" method="post">
                                    @csrf @method('delete')
                                    <button class="btn btn-light" type="submit"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
