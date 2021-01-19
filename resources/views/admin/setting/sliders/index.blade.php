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
                            <span class="text-danger font-weight-bold">{{ __('Sliders') }}</span>
                            <a href="{{route('admin.sliders.create')}}" class="btn"><i style="color: green" class="fas fa-lg fa-plus"></i></a>
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr style="background-color: #8fcaff">
                                        <th>{{__('Location')}}</th>
                                        <th>{{__('Category Title')}}</th>
                                        <th>{{__('Image Count')}}</th>
                                        <th>{{__('Operation')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $index  => $slider)
                                    <tr>
                                        <td>{{$slider->location}}</td>
                                        @if($slider->category_id !=null)
                                            <td>{{$slider->category->title}}</td>
                                        @else
                                            <td>{{__('Null')}}</td>
                                        @endif
                                        <td>{{count($slider->images)}}</td>

                                        <td class="d-flex flex-rowc">
                                            <form action="{{route('admin.sliders.destroy',$slider)}}" method="Post">
                                                @csrf @method('delete')
                                                <button type="submit" class="btn">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            <div><a class="btn" href="{{route('admin.sliders.edit',$slider)}}"><i class="fas fa-edit"></i></a></div>
                                            <div><a class="btn" href="{{route('admin.sliders.show',$slider)}}"><i class="fas fa-eye"></i></a></div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="row justify-content-center">
{{--                            {{ $menus->links() }}--}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
