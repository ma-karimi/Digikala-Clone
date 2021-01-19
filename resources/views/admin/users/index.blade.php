@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0">
                        <span style="border-bottom: 2px solid red">{{ __('Users') }}</span>
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
                                        <form action="{{route('admin.users.index')}}" method="get">
                                            @csrf
                                            @component('components.sort-list',['route'=>'admin.users.index','value'=>'all', 'label'=>'All'])@endcomponent
                                            @component('components.sort-list',['route'=>'admin.users.index','value'=>'admin', 'label'=>'Admin'])@endcomponent
                                            @component('components.sort-list',['route'=>'admin.users.index','value'=>'active', 'label'=>'Active'])@endcomponent
                                            @component('components.sort-list',['route'=>'admin.users.index','value'=>'deactive', 'label'=>'Deactive'])@endcomponent
                                        </form>
                                    </li>
                                </ul>
                            </tr>
                            <tr style="background-color: #8fcaff">
                                <th>{{__('Username')}}</th>
                                <th>{{__('E-Mail')}}</th>
                                <th>{{__('Mobile')}}</th>
                                <th>{{__('Role')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('More')}}</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                @if(auth()->user()->id != $user->id && !$user->hasRole('super-admin'))
                                    <tr>
                                        <td>{{ucfirst($user->name)}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->mobile}}</td>
                                        <td>
                                            @foreach($user->roles as $role)
                                                <span class="badge btn-warning">{{ucfirst($role->name)}}</span> <br>
                                            @endforeach
                                        </td>
                                        <!-- Todo: set active deactive status toggle button -->
                                        <td>{{$user->status ? __('Active') : __('Deactive') }}</td>
                                        <td>
                                            <a class="btn" href="{{route('admin.users.show', $user->id)}}"><i class="fas fa-angle-right"></i></a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-center">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
