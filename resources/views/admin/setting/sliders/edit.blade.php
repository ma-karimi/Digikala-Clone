@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Edit Slider') }}</span>
                        <a href="{{route('admin.sliders.index')}}" class="btn"><i class="fas fa-chevron-left"></i></a>
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
                        <form method="POST" action="{{ route('admin.sliders.update',$slider) }}" enctype="multipart/form-data">
                            @csrf @method('put')

                            <div class="form-group row">
                                @component('components.slider-select-form',['name'=>'location','label'=>'Location'])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.select-form',['name'=>'category_id','label'=>'Category','items'=>$categories])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.slider-form-input',['name'=>'images[]','type'=>'file','title'=>"Images",'multiple'=>'multiple'])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.slider-form-input',['name'=>'alt','type'=>'text','title'=>"Alt",'multiple'=>''])
                                @endcomponent
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-2 offset-md-2">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Update Slider') }}
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


