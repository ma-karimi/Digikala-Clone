<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-danger font-weight-bold" href="#">{{__('Setting')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <!-- Todo: set current => if(RequestAlias::path() == 'admin/manage/products')active endif-->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.menus.index')}}">{{__('Menus')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.menus.index')}}">{{__('Sliders')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.menus.index')}}">{{__('Site Setting')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.menus.index')}}">{{__('Comments')}}</a>
            </li>
        </ul>
    </div>
</nav>
