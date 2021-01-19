<div class="card-header">
    <div class="row justify-content-between">
        <div class="d-flex flex-row">
            <div class="mx-3">{{$date}}</div>
            <span><i class="fas fa-circle"></i></span>
            <div class="mx-3">{{"#DKC-".$id}}</div>
            <span><i class="fas fa-circle"></i></span>
            <div class="mx-3">{{ucfirst($status)}}</div>
        </div>
        <a class="mx-5" href="{{route('admin.orders.show',$order)}}">{{__('More Detail')}}</a>
    </div>
    <div>
        <span class="mx-1">{{__('Total Price')}}</span>
        <span class="mx-1 font-weight-bold">{{$payment}}</span>
    </div>
</div>
