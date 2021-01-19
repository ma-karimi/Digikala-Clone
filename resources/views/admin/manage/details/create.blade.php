@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Add Spechificaton Detail') }}</span>
                        <a href="{{route('admin.specifications.index')}}" class="btn"><i class="fas fa-chevron-left"></i></a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.details.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" name="title" class="form-control" autofocus>
                                    <input id="specification" type="hidden" name="specification" value="{{$specification}}" class="form-control">
                                </div>
                            </div>

                            @if($specification == 'color')
                                <div class="form-group row">
                                    <label for="value" class="col-md-2 col-form-label text-md-right">{{ __('Value') }}</label>

                                    <div class="col-md-6">
                                        <input id="value" type="color" name="value" class="form-control">
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row mb-0">
                                <div class="col-md-2 offset-md-2">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('+ Add Detail') }}
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
