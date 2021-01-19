<div class="card">
    <div class="card-header d-flex flex-row" id="heading{{$index}}">
        <h5 class="mb-0 col-md-10">
            <button class="btn" data-toggle="collapse" data-target="#collapse{{$index}}" aria-expanded="true" aria-controls="collapse{{$index}}">
                <i class="fas fa-comment-dots"></i><span class="mx-2">{{ucfirst(substr($comment->text,0,20))}}</span>
            </button>
        </h5>
        <div class="col-md-2 d-flex flex-row">
            <form action="{{route('admin.comments.destroy',$comment)}}" method="Post">
                @csrf @method('delete')
                <button type="submit" class="btn">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
            <div class="checkbox mx-5">
                <label>
                    <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="info">
                </label>
            </div>
        </div>
    </div>

    <div id="collapse{{$index}}" class="collapse show" aria-labelledby="heading{{$index}}" data-parent="#accordion">
        <div class="card-body">
            <p class="font-weight-bold">{{ucfirst($comment->user->name)}} {{__('Says:')}}</p>
            <p class="font-weight-bold">{{__('On Product:')}}
                <a href="{{route('admin.products.show',$comment->product->id)}}">{{ucfirst($comment->product->title)}}</a>
            </p>
            {{$comment->text}}
        </div>
    </div>
</div>
