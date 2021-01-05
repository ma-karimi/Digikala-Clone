<div class="card-header">
    <div class="row justify-content-between">
        <div>
            <span class="mx-3">{{$date}}</span>
            <span><i class="far fa-circle"></i></span>
            <span class="mx-3">{{"#DKC-".$id}}</span>
            <span><i class="far fa-circle"></i></span>
            <span class="mx-3">{{ucfirst($status)}}</span>
        </div>
        <a class="mx-5" href="{{route('admin.orders.show',$order)}}">{{__('More Detail')}}</a>
    </div>
    <div>
        <span class="mx-1">{{__('Total Price')}}</span>
        <span class="mx-1 font-weight-bold">{{$payment}}</span>
    </div>
</div>
