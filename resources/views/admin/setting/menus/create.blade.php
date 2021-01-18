@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Add Menu') }}</span>
                        <a href="{{route('admin.menus.index')}}" class="btn"><i class="fas fa-chevron-left"></i></a>
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
                        <form method="POST" action="{{ route('admin.menus.store') }}">
                            @csrf

                            <div class="form-group row">
                                @component('components.create-form-input',['name'=>'title','type'=>'text','title'=>'Title'])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.create-form-input',['name'=>'en_title','type'=>'text','title'=>'English Title'])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.create-form-input',['name'=>'route','type'=>'text','title'=>'Route'])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.create-form-input',['name'=>'icon','type'=>'text','title'=>'Icon'])
                                @endcomponent
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-2 offset-md-2">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('+ Add Menu') }}
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


