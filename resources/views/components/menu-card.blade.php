<div class="card col-md-3">
    <div class="card-header">
        <i class="{{$icon}}"></i> <span class="mx-3">{{ucfirst($title)}}</span>
    </div>
    <div class="card-body">
        <h4 class="card-title my-2">{{ucfirst($title2)}}</h4>
        <hr>
        <hr>
        <h5 class="card-title my-2">{{$route}}</h5>
    </div>
    <div class="card-footer d-flex flex-column">
        <div class="d-flex flex-row justify-content-around mt-2">
            <form action="{{route('admin.menus.destroy',$menu)}}" method="Post">
                @csrf @method('delete')
                <button type="submit" class="btn">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
            <div><a class="btn" href="{{route('admin.menus.edit',$menu)}}"><i class="fas fa-edit"></i></a></div>
        </div>
    </div>
</div>
