<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-danger font-weight-bold" href="#">{{__('Product Manager')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <!-- Todo: set current => if(RequestAlias::path() == 'admin/manage/products')active endif-->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.products.index')}}">{{__('Product')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.categories.index')}}">{{__('Categories')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{__('Details')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{__('Comments')}}</a>
            </li>
        </ul>
    </div>
</nav>
