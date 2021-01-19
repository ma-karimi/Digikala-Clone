<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($slider->images as $index => $image)
            <li data-bs-target="#myCarousel" data-bs-slide-to={{$index}} @if($index==0)class="active"@endif></li>
        @endforeach
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner active">
        @foreach($slider->images as $index => $image)
            @if($index == 0)
                <div class="carousel-item active">
                    <img src="{{\Illuminate\Support\Facades\Storage::url($image->path)}}" alt="" style="width:100%;">
                </div>
            @else
                <div class="carousel-item">
                    <img src="{{\Illuminate\Support\Facades\Storage::url($image->path)}}" alt="" style="width:100%;">
                </div>
            @endif
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class=" carousel-control-next" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class=" carousel-control-prev" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
