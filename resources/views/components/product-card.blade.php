<div class="card col-md-3">
    <img class="card-img-top mt-3 " src="{{$path}}" alt="{{$alt}}">

    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
    </div>
    <div class="card-footer d-flex flex-column">
        <div class="d-flex flex-row justify-content-between">
            <span>{{$rate}}</span>
            <span>{{$quantity}}</span>
        </div>
        <div class="d-flex flex-row justify-content-around mt-2">
            <form action="{{route('admin.products.destroy',$product)}}" method="Post">
                @csrf @method('delete')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
            <div><a class="btn btn-success" href=""><i class="fas fa-toggle-on"></i></a></div>
            <div><a class="btn btn-primary" href=""><i class="fas fa-file-edit"></i></a></div>
        </div>
    </div>
</div>