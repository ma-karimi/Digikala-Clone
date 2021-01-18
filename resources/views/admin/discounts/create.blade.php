@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Add Discount') }}</span>
                        <a href="{{route('admin.discounts.index')}}" class="btn"><i class="fas fa-chevron-left"></i></a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.discounts.store') }}">
                            @csrf

                            <div class="form-group row">
                                @component('components.create-form-input',['name'=>'title','type'=>'text','title'=>'Title'])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.create-form-input',['name'=>'value','type'=>'number','title'=>'Value'])
                                @endcomponent
                                <span class="mt-2"><i class="fas fa-percentage"></i></span>
                            </div>

                            <div class="form-group row">
                                @component('components.create-form-input',['name'=>'count','type'=>'number','title'=>'Count'])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.create-form-input',['name'=>'expire_time','type'=>'date','title'=>'Expire Time'])
                                @endcomponent
                            </div>

                            <div class="form-group row">
                                @component('components.create-form-input',['name'=>'max_price','type'=>'number','title'=>'Maximum Price'])
                                @endcomponent
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-2 offset-md-2">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('+ Add Discount') }}
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



<script>
    function myFunction() {
        var x = document.getElementById("myForm").elements[0].value;
        document.getElementById("details").innerHTML = x;
    }
</script>
