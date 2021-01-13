<div class="card col-md-3">
    <div class="card-header">
        <img class="card-img-top mt-3" src="{{\Illuminate\Support\Facades\Storage::url($path)}}" alt="{{$alt}}">
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
    </div>
    <div class="card-footer d-flex flex-column">
        <div class="d-flex flex-column">
            <div class="d-flex flex-row justify-content-between">
                <span> <i style="color: yellow" class="fas fa-star"></i> {{$rate? $rate : '0'}}</span>
                <span>{{$quantity? 'available' : 'not available'}}</span>
            </div>
            <span class="mt-2">{{$price}} {{__('Rial')}}</span>
        </div>
        <div class="d-flex flex-row justify-content-around mt-2">
            <form action="{{route('admin.products.destroy',$product)}}" method="Post">
                @csrf @method('delete')
                <button type="submit" class="btn">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
            <div><a class="btn" href=""><i class="fas fa-toggle-on"></i></a></div>
            <div><a class="btn" href=""><i class="fas fa-edit"></i></a></div>
        </div>
    </div>
</div>
