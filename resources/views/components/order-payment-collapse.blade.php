{{--<!-- Modal -->--}}
<div class="collapse mt-2" id="{{$id}}">
    <div class="card card-header border-0 d-flex flex-row justify-content-between">
        <div class="mx-5">{{__('Date')}}</div>
        <div class="mx-5">{{__('Description')}}</div>
        <div class="mx-5">{{__('Status')}}</div>
        <div class="mx-5">{{__('Price')}}</div>
    </div>
    <div class="card card-header border-0 d-flex flex-row justify-content-between">
        {{--<!-- #todo: need foreach for each payment -->--}}
        {{--            @foreach()--}}
        <div class="mx-5">{{'2020-10-12'}}</div>
        <div class="mx-5">{{'Online'}}</div>
        <div class="mx-5">{{'Failed'}}</div>
        <div class="mx-5">{{'350000'}}</div>
        {{--            @endforeach--}}
    </div>
</div>
