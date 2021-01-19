@extends('layouts.users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @component('components.product-manager-navbar')
                @endcomponent

                <div class="card">
                    <div class="card-header border-0 d-flex justify-content-between">
                        <span class="text-danger font-weight-bold">{{ __('Comments') }}</span>
                    </div>

                    <div class="card-body row d-flex justify-content-start">
                        <div class="card col-md-12">
                            <div class="card-body">
                                <div id="accordion">
                                    @foreach($comments as $index => $comment)
                                        @component('components.comment-collapse',['index'=>$index,'comment'=>$comment])
                                        @endcomponent
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        {{ $comments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
