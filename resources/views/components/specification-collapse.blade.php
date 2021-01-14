<div class="card">
    <div class="card-header d-flex flex-row" id="heading{{$index}}">
        <h5 class="mb-0 col-md-12 d-flex flex-row justify-content-between">
            <button class="btn" data-toggle="collapse" data-target="#collapse{{$index}}" aria-expanded="true" aria-controls="collapse{{$index}}">
                <i class="fas fa-info"></i><span class="mx-2">{{ucfirst($specification->title)}}</span>
            </button>
            <div class="d-flex flex-row">
                <form action="{{route('admin.specifications.destroy',$specification)}}" method="Post">
                    @csrf @method('delete')
                    <button type="submit" class="btn">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
                <a class="btn" href="{{route('admin.specifications.edit',$specification)}}"><i class="fas fa-edit"></i></a>
            </div>

        </h5>
    </div>

    <div id="collapse{{$index}}" class="collapse show" aria-labelledby="heading{{$index}}" data-parent="#accordion">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="d-flex flex-row col-md-10">
                    <p>{{__('Details')}}:</p>
                    @foreach($specification->details as $detail)
                        <span style="color: {{$detail->value}}" class="badge mx-2 border-right">{{$detail->title}}</span>
                    @endforeach
                </div>
                <p class="col-md-2 mx-5">
                    <i class="mx-1 fas fa-lg fa-plus"></i>
                    <i class="mx-1 fas fa-lg fa-trash"></i>
                </p>
            </div>
        </div>
    </div>
</div>
